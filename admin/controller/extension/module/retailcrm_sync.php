<?php
class ControllerExtensionModuleRetailcrmSync extends Controller {
public function syncClients() {
// Загружаем необходимые модели
$this->load->model('customer/customer');
$this->load->model('setting/setting');

// Настройка API для обращения к retailCRM
$apiKey = '2eb7unYNzkXlejhy54fEn0X695Ls7BJE';
$apiUrl = 'https://archilym.retailcrm.ru/api/v4/customers';

$params = [
'apiKey' => $apiKey,
'limit'  => 100
];

$query = http_build_query($params);
$ch = curl_init($apiUrl . '?' . $query);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = json_decode(curl_exec($ch), true);
curl_close($ch);

if (!$response || empty($response['success'])) {
echo 'Ошибка API: ' . json_encode($response);
return;
}

foreach ($response['customers'] as $customer) {
$customer_id = null;

if (!empty($customer['email'])) {
$customer_data = $this->model_customer_customer->getCustomerByEmail($customer['email']);
if ($customer_data) {
$customer_id = $customer_data['customer_id'];
}
}

if (!$customer_id && !empty($customer['phones'][0]['number'])) {
$phone = $customer['phones'][0]['number'];
$results = $this->model_customer_customer->getCustomers([
'filter_telephone' => $phone
]);
if (!empty($results)) {
$customer_id = $results[0]['customer_id'];
}
}

if ($customer_id) {
$existing = $this->model_customer_customer->getCustomer($customer_id);

$update = [
'firstname'          => $customer['firstName'] ?? $existing['firstname'],
'lastname'           => $customer['lastName'] ?? $existing['lastname'],
'email'              => $customer['email'] ?? $existing['email'],
'telephone'          => $customer['phones'][0]['number'] ?? $existing['telephone'],
'customer_group_id'  => $existing['customer_group_id'],
'newsletter'         => $existing['newsletter'],
'status'             => $existing['status'],
'safe'               => $existing['safe'],
'password'           => '',
'affiliate'          => [],
'custom_field'       => is_array($existing['custom_field']) ? $existing['custom_field'] : []
];

// Обновляем основные поля клиента
$this->model_customer_customer->editCustomer($customer_id, $update);

// Обновляем children_count напрямую в базе, если поле есть
if (isset($customer['customFields']['children_count'])) {
$children_count = (int)$customer['customFields']['children_count'];

$this->db->query("UPDATE `" . DB_PREFIX . "customer` SET `children_count` = '" . (int)$children_count . "' WHERE `customer_id` = '" . (int)$customer_id . "'");
}
}

// === ДОБАВЛЕНО: Синхронизация заказов по deliveryDate и tracking_number
$apiUrlOrders = 'https://archilym.retailcrm.ru/api/v5/orders';
$paramsOrders = [
    'apiKey' => $apiKey,
    'limit'  => 100
];
$queryOrders = http_build_query($paramsOrders);
$chOrders = curl_init($apiUrlOrders . '?' . $queryOrders);
curl_setopt($chOrders, CURLOPT_RETURNTRANSFER, true);
$responseOrders = json_decode(curl_exec($chOrders), true);
curl_close($chOrders);

if (!empty($responseOrders['orders'])) {
    foreach ($responseOrders['orders'] as $order) {
        if (empty($order['externalId'])) {
            continue; // пропускаем, если нет ID OpenCart
        }

        $order_id = (int)$order['externalId'];

        $delivery_date = !empty($order['delivery']['date']) ? $order['delivery']['date'] : null;
        $tracking_number = !empty($order['delivery']['address']['metro']) ? $order['delivery']['address']['metro'] : null;

        $update_fields = [];

        if ($delivery_date) {
            $update_fields[] = "`delivery_date` = '" . $this->db->escape($delivery_date) . "'";
        }

        if ($tracking_number) {
            $update_fields[] = "`tracking_number` = '" . $this->db->escape($tracking_number) . "'";
        }

        if (!empty($update_fields)) {
            $sql = "UPDATE `" . DB_PREFIX . "order` SET " . implode(', ', $update_fields) . " WHERE `order_id` = " . (int)$order_id;
            $this->db->query($sql);
        }
    }
}
// === КОНЕЦ ДОБАВЛЕНИЯ
}

// Выводим всех клиентов
$customers = $this->model_customer_customer->getCustomers();

echo '<h2>Список всех клиентов в OpenCart</h2>';
foreach ($customers as $customer) {
echo '<hr>';
echo '<strong>Имя:</strong> ' . $customer['firstname'] . '<br>';
echo '<strong>Фамилия:</strong> ' . $customer['lastname'] . '<br>';
echo '<strong>Email:</strong> ' . $customer['email'] . '<br>';
echo '<strong>Телефон:</strong> ' . $customer['telephone'] . '<br>';
echo '<strong>Дата создания:</strong> ' . $customer['date_added'] . '<br>';
echo '<strong>Дети (children_count):</strong> ' . $customer['children_count'] . '<br>';
// === ДОБАВЛЕНО: Вывод заказов клиента с delivery_date и tracking_number
$customer_orders = $this->db->query("SELECT * FROM `" . DB_PREFIX . "order` WHERE `customer_id` = '" . (int)$customer['customer_id'] . "'");
if ($customer_orders->num_rows > 0) {
    foreach ($customer_orders->rows as $order) {
        echo '<div style="margin-left:15px; margin-top:5px;">';
        echo '<strong>Заказ ID:</strong> ' . $order['order_id'] . '<br>';
        echo '<strong>Дата доставки:</strong> ' . ($order['delivery_date'] ?? '—') . '<br>';
        echo '<strong>Трек номер:</strong> ' . ($order['tracking_number'] ?? '—') . '<br>';
        echo '</div>';
    }
} else {
    echo '<em>Нет заказов</em><br>';
}
// === КОНЕЦ ДОБАВЛЕНИЯ
}

echo 'Синхронизация с retailCRM завершена. Все данные обновлены в OpenCart.';
}
}
