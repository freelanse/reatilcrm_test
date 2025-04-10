<?php
// Version
define('VERSION', '3.0.3.2');

// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
	header('Location: ../install/index.php');
	exit;
}
date_default_timezone_set('Europe/Minsk'); // Часовой пояс для админки

// Startup
require_once(DIR_SYSTEM . 'startup.php');

start('admin');