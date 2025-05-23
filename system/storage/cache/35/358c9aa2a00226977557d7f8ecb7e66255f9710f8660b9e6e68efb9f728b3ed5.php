<?php

/* install/step_3.twig */
class __TwigTemplate_2f0cf115bcd72737b7d268bfe37a05131444f321a2335744d02d037cf1256cf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div class=\"container\">
  <header>
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <h1 class=\"pull-left\">3<small>/4</small></h1>
        <h3>";
        // line 7
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "<br>
          <small>";
        // line 8
        echo (isset($context["text_step_3"]) ? $context["text_step_3"] : null);
        echo "</small></h3>
      </div>
      <div class=\"col-sm-6\">
        <div id=\"logo\" class=\"pull-right hidden-xs\"> <img src=\"view/image/logo.png\" alt=\"OpenCart\" title=\"OpenCart\" /></div>
      </div>
    </div>
  </header>";
        // line 15
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 16
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>";
        }
        // line 20
        echo "  <div class=\"row\">
    <div class=\"col-sm-9\">
      <form action=\"";
        // line 22
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <p>";
        // line 23
        echo (isset($context["text_db_connection"]) ? $context["text_db_connection"] : null);
        echo "</p>
        <fieldset>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-driver\">";
        // line 26
        echo (isset($context["entry_db_driver"]) ? $context["entry_db_driver"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"db_driver\" id=\"input-db-driver\" class=\"form-control\">";
        // line 29
        if ((isset($context["mysqli"]) ? $context["mysqli"] : null)) {
            // line 30
            if (((isset($context["db_driver"]) ? $context["db_driver"] : null) == "mysqli")) {
                // line 31
                echo "                <option value=\"mysqli\" selected=\"selected\">";
                echo (isset($context["text_mysqli"]) ? $context["text_mysqli"] : null);
                echo "</option>";
            } else {
                // line 33
                echo "                <option value=\"mysqli\">";
                echo (isset($context["text_mysqli"]) ? $context["text_mysqli"] : null);
                echo "</option>";
            }
        }
        // line 36
        if ((isset($context["pdo"]) ? $context["pdo"] : null)) {
            // line 37
            if (((isset($context["db_driver"]) ? $context["db_driver"] : null) == "mpdo")) {
                // line 38
                echo "                <option value=\"mpdo\" selected=\"selected\">";
                echo (isset($context["text_mpdo"]) ? $context["text_mpdo"] : null);
                echo "</option>";
            } else {
                // line 40
                echo "                <option value=\"mpdo\">";
                echo (isset($context["text_mpdo"]) ? $context["text_mpdo"] : null);
                echo "</option>";
            }
        }
        // line 43
        if ((isset($context["pgsql"]) ? $context["pgsql"] : null)) {
            // line 44
            if (((isset($context["db_driver"]) ? $context["db_driver"] : null) == "pgsql")) {
                // line 45
                echo "                <option value=\"pgsql\" selected=\"selected\">";
                echo (isset($context["text_pgsql"]) ? $context["text_pgsql"] : null);
                echo "</option>";
            } else {
                // line 47
                echo "                <option value=\"pgsql\">";
                echo (isset($context["text_pgsql"]) ? $context["text_pgsql"] : null);
                echo "</option>";
            }
        }
        // line 50
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-hostname\">";
        // line 54
        echo (isset($context["entry_db_hostname"]) ? $context["entry_db_hostname"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"db_hostname\" value=\"";
        // line 56
        echo (isset($context["db_hostname"]) ? $context["db_hostname"] : null);
        echo "\" id=\"input-db-hostname\" class=\"form-control\" />";
        // line 57
        if ((isset($context["error_db_hostname"]) ? $context["error_db_hostname"] : null)) {
            // line 58
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_db_hostname"]) ? $context["error_db_hostname"] : null);
            echo "</div>";
        }
        // line 60
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-username\">";
        // line 63
        echo (isset($context["entry_db_username"]) ? $context["entry_db_username"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"db_username\" value=\"";
        // line 65
        echo (isset($context["db_username"]) ? $context["db_username"] : null);
        echo "\" id=\"input-db-username\" class=\"form-control\" />";
        // line 66
        if ((isset($context["error_db_username"]) ? $context["error_db_username"] : null)) {
            // line 67
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_db_username"]) ? $context["error_db_username"] : null);
            echo "</div>";
        }
        // line 69
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-password\">";
        // line 72
        echo (isset($context["entry_db_password"]) ? $context["entry_db_password"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"db_password\" value=\"";
        // line 74
        echo (isset($context["db_password"]) ? $context["db_password"] : null);
        echo "\" id=\"input-db-password\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-database\">";
        // line 78
        echo (isset($context["entry_db_database"]) ? $context["entry_db_database"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"db_database\" value=\"";
        // line 80
        echo (isset($context["db_database"]) ? $context["db_database"] : null);
        echo "\" id=\"input-db-database\" class=\"form-control\" />";
        // line 81
        if ((isset($context["error_db_database"]) ? $context["error_db_database"] : null)) {
            // line 82
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_db_database"]) ? $context["error_db_database"] : null);
            echo "</div>";
        }
        // line 84
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-port\">";
        // line 87
        echo (isset($context["entry_db_port"]) ? $context["entry_db_port"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"db_port\" value=\"";
        // line 89
        echo (isset($context["db_port"]) ? $context["db_port"] : null);
        echo "\" id=\"input-db-port\" class=\"form-control\" />";
        // line 90
        if ((isset($context["error_db_port"]) ? $context["error_db_port"] : null)) {
            // line 91
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_db_port"]) ? $context["error_db_port"] : null);
            echo "</div>";
        }
        // line 93
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-prefix\">";
        // line 96
        echo (isset($context["entry_db_prefix"]) ? $context["entry_db_prefix"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"db_prefix\" value=\"";
        // line 98
        echo (isset($context["db_prefix"]) ? $context["db_prefix"] : null);
        echo "\" id=\"input-db-prefix\" class=\"form-control\" />";
        // line 99
        if ((isset($context["error_db_prefix"]) ? $context["error_db_prefix"] : null)) {
            // line 100
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_db_prefix"]) ? $context["error_db_prefix"] : null);
            echo "</div>";
        }
        // line 102
        echo "            </div>
          </div>
        </fieldset>
        <p>";
        // line 105
        echo (isset($context["text_db_administration"]) ? $context["text_db_administration"] : null);
        echo "</p>
        <fieldset>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-username\">";
        // line 108
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"username\" value=\"";
        // line 110
        echo (isset($context["username"]) ? $context["username"] : null);
        echo "\" id=\"input-username\" class=\"form-control\" />";
        // line 111
        if ((isset($context["error_username"]) ? $context["error_username"] : null)) {
            // line 112
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_username"]) ? $context["error_username"] : null);
            echo "</div>";
        }
        // line 114
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 117
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"password\" value=\"";
        // line 119
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\" />";
        // line 120
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 121
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</div>";
        }
        // line 123
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 126
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 128
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />";
        // line 129
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 130
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>";
        }
        // line 132
        echo "            </div>
          </div>
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-left\"><a href=\"";
        // line 136
        echo (isset($context["back"]) ? $context["back"] : null);
        echo "\" class=\"btn btn-default\">";
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
        // line 138
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
      </form>
    </div>
    <div class=\"col-sm-3\">";
        // line 143
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "</div>
  </div>
</div>";
        // line 146
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "install/step_3.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 146,  314 => 143,  306 => 138,  299 => 136,  293 => 132,  288 => 130,  286 => 129,  283 => 128,  278 => 126,  273 => 123,  268 => 121,  266 => 120,  263 => 119,  258 => 117,  253 => 114,  248 => 112,  246 => 111,  243 => 110,  238 => 108,  232 => 105,  227 => 102,  222 => 100,  220 => 99,  217 => 98,  212 => 96,  207 => 93,  202 => 91,  200 => 90,  197 => 89,  192 => 87,  187 => 84,  182 => 82,  180 => 81,  177 => 80,  172 => 78,  165 => 74,  160 => 72,  155 => 69,  150 => 67,  148 => 66,  145 => 65,  140 => 63,  135 => 60,  130 => 58,  128 => 57,  125 => 56,  120 => 54,  114 => 50,  108 => 47,  103 => 45,  101 => 44,  99 => 43,  93 => 40,  88 => 38,  86 => 37,  84 => 36,  78 => 33,  73 => 31,  71 => 30,  69 => 29,  64 => 26,  58 => 23,  54 => 22,  50 => 20,  43 => 16,  41 => 15,  32 => 8,  28 => 7,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <header>*/
/*     <div class="row">*/
/*       <div class="col-sm-6">*/
/*         <h1 class="pull-left">3<small>/4</small></h1>*/
/*         <h3>{{ heading_title }}<br>*/
/*           <small>{{ text_step_3 }}</small></h3>*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         <div id="logo" class="pull-right hidden-xs"> <img src="view/image/logo.png" alt="OpenCart" title="OpenCart" /></div>*/
/*       </div>*/
/*     </div>*/
/*   </header>*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="row">*/
/*     <div class="col-sm-9">*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*         <p>{{ text_db_connection }}</p>*/
/*         <fieldset>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-db-driver">{{ entry_db_driver }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="db_driver" id="input-db-driver" class="form-control">*/
/*                 {% if mysqli %}*/
/*                 {% if db_driver == 'mysqli' %}*/
/*                 <option value="mysqli" selected="selected">{{ text_mysqli }}</option>*/
/*                 {% else %}*/
/*                 <option value="mysqli">{{ text_mysqli }}</option>*/
/*                 {% endif %}*/
/*                 {% endif %}*/
/*                 {% if pdo %}*/
/*                 {% if db_driver == 'mpdo' %}*/
/*                 <option value="mpdo" selected="selected">{{ text_mpdo }}</option>*/
/*                 {% else %}*/
/*                 <option value="mpdo">{{ text_mpdo }}</option>*/
/*                 {% endif %}*/
/*                 {% endif %}*/
/*                 {% if pgsql %}*/
/*                 {% if db_driver == 'pgsql' %}*/
/*                 <option value="pgsql" selected="selected">{{ text_pgsql }}</option>*/
/*                 {% else %}*/
/*                 <option value="pgsql">{{ text_pgsql }}</option>*/
/*                 {% endif %}*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-db-hostname">{{ entry_db_hostname }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="db_hostname" value="{{ db_hostname }}" id="input-db-hostname" class="form-control" />*/
/*               {% if error_db_hostname %}*/
/*               <div class="text-danger">{{ error_db_hostname }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-db-username">{{ entry_db_username }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="db_username" value="{{ db_username }}" id="input-db-username" class="form-control" />*/
/*               {% if error_db_username %}*/
/*               <div class="text-danger">{{ error_db_username }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-db-password">{{ entry_db_password }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="password" name="db_password" value="{{ db_password }}" id="input-db-password" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-db-database">{{ entry_db_database }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="db_database" value="{{ db_database }}" id="input-db-database" class="form-control" />*/
/*               {% if error_db_database %}*/
/*               <div class="text-danger">{{ error_db_database }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-db-port">{{ entry_db_port }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="db_port" value="{{ db_port }}" id="input-db-port" class="form-control" />*/
/*               {% if error_db_port %}*/
/*               <div class="text-danger">{{ error_db_port }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-db-prefix">{{ entry_db_prefix }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="db_prefix" value="{{ db_prefix }}" id="input-db-prefix" class="form-control" />*/
/*               {% if error_db_prefix %}*/
/*               <div class="text-danger">{{ error_db_prefix }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </fieldset>*/
/*         <p>{{ text_db_administration }}</p>*/
/*         <fieldset>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-username">{{ entry_username }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="username" value="{{ username }}" id="input-username" class="form-control" />*/
/*               {% if error_username %}*/
/*               <div class="text-danger">{{ error_username }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-password">{{ entry_password }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="password" value="{{ password }}" id="input-password" class="form-control" />*/
/*               {% if error_password %}*/
/*               <div class="text-danger">{{ error_password }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="email" value="{{ email }}" id="input-email" class="form-control" />*/
/*               {% if error_email %}*/
/*               <div class="text-danger">{{ error_email }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </fieldset>*/
/*         <div class="buttons">*/
/*           <div class="pull-left"><a href="{{ back }}" class="btn btn-default">{{ button_back }}</a></div>*/
/*           <div class="pull-right">*/
/*             <input type="submit" value="{{ button_continue }}" class="btn btn-primary" />*/
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*     </div>*/
/*     <div class="col-sm-3">{{ column_left }}</div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
