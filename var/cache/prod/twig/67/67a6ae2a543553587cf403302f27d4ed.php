<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__3fdc62e5587a66f370384a76b9be7676 */
class __TwigTemplate_a29ec1ff2f92d5ca7ac0e261903c9e35 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/DesipulosVapeHub/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/DesipulosVapeHub/img/app_icon.png\" />

<title>Products • Desipulos VapeHub</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'PH';
    var _PS_VERSION_ = '8.1.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Read this message';
    var token = '14a2b1c664ada112104c0419fc277ba2';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '118259ae899c49ba9fa6db0dc77e833d';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/DesipulosVapeHub/admin28/index.php/improve/modules/manage?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg';
    var admin_notification_get_link = '/DesipulosVapeHub/admin28/index.php/common/notifications?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg';
    var admin_notification_push_link = adminNotificationPushLink = '/DesipulosVapeHub/admin28/index.php/common/notifications/ack?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg';
    var tab_modules_list = '';
    var update_success";
        // line 42
        echo "_msg = 'Update successful';
    var search_product_msg = 'Search for a product';
  </script>



<link
      rel=\"preload\"
      href=\"/DesipulosVapeHub/admin28/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/DesipulosVapeHub/admin28/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/DesipulosVapeHub/admin28/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/DesipulosVapeHub/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/DesipulosVapeHub/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/DesipulosVapeHub/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/DesipulosVapeHub/admin28/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/DesipulosVapeHub\\/admin28\\/\";
var baseDir = \"\\/DesipulosVapeHub\\/\";
var changeFormLanguageUrl = \"\\/DesipulosVapeHub\\/admin28\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\";
var currency = {\"iso_code\":\"PHP\",\"sign\":\"\\u20b1\",\"name\":\"Philippine Piso\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PHP\",\"currencySymbol\":\"\\u20b1\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativeP";
        // line 67
        echo "attern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/DesipulosVapeHub/admin28/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/DesipulosVapeHub/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/DesipulosVapeHub/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/DesipulosVapeHub/js/admin.js?v=8.1.1\"></script>
<script type=\"text/javascript\" src=\"/DesipulosVapeHub/admin28/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/DesipulosVapeHub/js/tools.js?v=8.1.1\"></script>
<script type=\"text/javascript\" src=\"/DesipulosVapeHub/admin28/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/DesipulosVapeHub/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/DesipulosVapeHub/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/DesipulosVapeHub/admin28/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/DesipulosVapeHub/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/DesipulosVapeHub/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/DesipulosVapeHub/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/DesipulosVapeHub/admin28/index.php/common/notifications?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg',
      CHECKBOX_ORDER: 1,
      CHECKBOX_";
        // line 94
        echo "CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminproducts\"
  data-base-url=\"/DesipulosVapeHub/admin28/index.php\"  data-token=\"Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminDashboard&amp;token=23ce39235540ceb36a22ebc515445db5\"></a>
      <span id=\"shop_version\">8.1.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=71fa839c09fdd8793387add469f6f068\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/DesipulosVapeHub/admin28/index.php/improve/modules/manage?token=8050a4c6365f9626e0d0bbfb980a2937\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/DesipulosVapeHub/admin28/index.php/sell/catalog/categories/new?token=8050a4c6365f9626e0d0bbfb980a2937\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/DesipulosVapeHub/admin28/index.php/sell/catalog/products-v2/create?token=8050a4c6365f9626e0d0bbfb980a2937\"
                 data-item=\"New product\"
      >New p";
        // line 138
        echo "roduct</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=7abbc9317db637c7f8253ca78466287d\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/DesipulosVapeHub/admin28/index.php/sell/orders?token=8050a4c6365f9626e0d0bbfb980a2937\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"181\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products-v2\"
        data-post-link=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminQuickAccesses&token=50a43b1482ada1b42e3a6f16833c68f8\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Products - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminQuickAccesses&token=50a43b1482ada1b42e3a6f16833c68f8\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/DesipulosVapeHub/admin28/index.php?controller=AdminSearch&amp;token=43fc8a2f965d0ddf2bfb22282bf68f59\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"t";
        // line 179
        echo "ext\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"";
        // line 193
        echo "icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=71fa839c09fdd8793387add469f6f068\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/DesipulosVapeHub/admin28/index.php/improve/modules/manage?token=8050a4c6365f9626e0d0bbfb980a2937\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/DesipulosVapeHub/admin28/index.php/sell/catalog/categories/new?token=8050a4c6365f9626e0d0bbfb980a2937\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/DesipulosVapeHub/admin28/index.php/sell/catalog/products-v2/create?token=8050a4c6365f9626e0d0bbfb980a2937\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=7abbc9317db637c7f8253ca78466287d\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/DesipulosVapeHub/admin28/index.php/sel";
        // line 233
        echo "l/orders?token=8050a4c6365f9626e0d0bbfb980a2937\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"86\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/sell/catalog/products-v2\"
      data-post-link=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminQuickAccesses&token=50a43b1482ada1b42e3a6f16833c68f8\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Products - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminQuickAccesses&token=50a43b1482ada1b42e3a6f16833c68f8\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/DesipulosVapeHub/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
              ";
        // line 281
        echo "            <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=db0e84313d022112882bf1eb70ac6d4b\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media the";
        // line 331
        echo "se days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/DesipulosVapeHub/img/pr/default.jpg\" alt=\"Matt\" /></span>
        <span class=\"employee_profile\">Welcome back Matt</span>
      </div>

      <a class=\"dropdown-";
        // line 383
        echo "item employee-link profile-link\" href=\"/DesipulosVapeHub/admin28/index.php/configure/advanced/employees/1/edit?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminLogin&amp;logout=1&amp;token=2134289f7e46992a3b2526eec0206d9d\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/DesipulosVapeHub/admin28/index.php/configure/advanced/employees/toggle-navigation?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminDashboard&amp;token=23ce39235540ceb36a22ebc515445db5\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.1</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminDashboard&amp;token=23ce39235540ceb36a22ebc515445db5\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" da";
        // line 431
        echo "ta-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/DesipulosVapeHub/admin28/index.php/sell/orders/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/sell/orders/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/sell/orders/invoices/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Invoices
                               ";
        // line 463
        echo " </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/sell/orders/credit-slips/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/sell/orders/delivery-slips/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminCarts&amp;token=db0e84313d022112882bf1eb70ac6d4b\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_";
        // line 496
        echo "submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/DesipulosVapeHub/admin28/index.php/sell/catalog/products?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/sell/catalog/products?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/sell/catalog/categories?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
         ";
        // line 526
        echo "                     <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/sell/catalog/monitoring/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminAttributesGroups&amp;token=d0a39e9f55f3d3cf75932b9269477525\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/sell/catalog/brands/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/sell/attachments/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Files
                                </a>
                              </li>

             ";
        // line 555
        echo "                                                                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminCartRules&amp;token=7abbc9317db637c7f8253ca78466287d\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/sell/stocks/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/DesipulosVapeHub/admin28/index.php/sell/customers/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
   ";
        // line 586
        echo "                                         </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/sell/customers/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/sell/addresses/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminCustomerThreads&amp;token=e5f47ba2c78183301896277d6ebff022\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-";
        // line 616
        echo "icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminCustomerThreads&amp;token=e5f47ba2c78183301896277d6ebff022\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/sell/customer-service/order-messages/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminReturn&amp;token=54f3ca24d19456b1ffa9d18e5b3fadfc\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                       ";
        // line 645
        echo "                       </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminStats&amp;token=71fa839c09fdd8793387add469f6f068\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/DesipulosVapeHub/admin28/index.php/improve/modules/manage?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
               ";
        // line 684
        echo "                                             </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/improve/modules/manage?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/DesipulosVapeHub/admin28/index.php/improve/design/themes/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
      ";
        // line 715
        echo "                        <li class=\"link-leveltwo\" data-submenu=\"127\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/improve/design/themes/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/improve/design/mail_theme/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/improve/design/cms-pages/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/improve/design/modules/positions/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Positions
                                </a>
                              </li>

                                ";
        // line 744
        echo "                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminImages&amp;token=5a075db53e0d66e8fa812717ccf03fb9\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/modules/link-widget/list?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminCarriers&amp;token=54f22e0ce76287cfeb0c357ff36fcd9f\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
 ";
        // line 775
        echo "                                           </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminCarriers&amp;token=54f22e0ce76287cfeb0c357ff36fcd9f\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/improve/shipping/preferences/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/DesipulosVapeHub/admin28/index.php/improve/payment/payment_methods?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                  ";
        // line 806
        echo "                                                  keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/improve/payment/payment_methods?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/improve/payment/preferences?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/DesipulosVapeHub/admin28/index.php/improve/international/localization/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                 ";
        // line 836
        echo "     International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/improve/international/localization/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/improve/international/zones/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/improve/international/taxes/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Taxes
                                </a>";
        // line 864
        echo "
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/improve/international/translations/settings?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/DesipulosVapeHub/admin28/index.php/configure/shop/preferences/preferences?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                            ";
        // line 902
        echo "                          
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/configure/shop/preferences/preferences?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/configure/shop/order-preferences/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/configure/shop/product-preferences/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/configure/shop/customer-prefere";
        // line 930
        echo "nces/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/configure/shop/contacts/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/configure/shop/seo-urls/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminSearchConf&amp;token=7e8a2b72eabb7d589465ea853ba239e1\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                             ";
        // line 962
        echo "                         
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/DesipulosVapeHub/admin28/index.php/configure/advanced/system-information/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/configure/advanced/system-information/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/configure/advanced/performance/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Performance
                                </a>
                              </li>

                    ";
        // line 991
        echo "                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/configure/advanced/administration/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/configure/advanced/emails/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/configure/advanced/import/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/configure/advanced/employees/?_token=Pfei8JkYL_mH4ikhcHGDB0";
        // line 1019
        echo "eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/configure/advanced/sql-requests/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/configure/advanced/logs/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/configure/advanced/webservice-keys/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
 ";
        // line 1049
        echo "                                                           
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/configure/advanced/feature-flags/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/DesipulosVapeHub/admin28/index.php/configure/advanced/security/?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Catalog</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/DesipulosVapeHub/admin28/index.php/sell/catalog/products?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\" aria-current=\"page\">Products</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Products          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn";
        // line 1100
        echo " btn-primary new-product-button pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/DesipulosVapeHub/admin28/index.php/sell/catalog/products-v2/create?shopId=1&amp;_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\"                  title=\"New product\"                  data-modal-title=\"Add new product\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  New product
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/DesipulosVapeHub/admin28/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminProducts%253Fversion%253D8.1.1%2526country%253Den/Help?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item new-product-button  pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/DesipulosVapeHub/admin28/index.php/sell/catalog/products-v2/create?shopId=1&amp;_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\"              title=\"New product\"            >
              New product
              <i class=\"material-icons\">add_circle_outline</i>            </a>
          ";
        // line 1136
        echo "        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/DesipulosVapeHub/admin28/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminProducts%253Fversion%253D8.1.1%2526country%253Den/Help?_token=Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1162
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://localhost/DesipulosVapeHub/admin28/index.php?controller=AdminDashboard&amp;token=23ce39235540ceb36a22ebc515445db5\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1196
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1162
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1196
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__3fdc62e5587a66f370384a76b9be7676";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1361 => 1196,  1340 => 1162,  1329 => 102,  1320 => 1196,  1280 => 1162,  1252 => 1136,  1214 => 1100,  1161 => 1049,  1129 => 1019,  1099 => 991,  1068 => 962,  1034 => 930,  1004 => 902,  964 => 864,  934 => 836,  902 => 806,  869 => 775,  836 => 744,  805 => 715,  772 => 684,  731 => 645,  700 => 616,  668 => 586,  635 => 555,  604 => 526,  572 => 496,  537 => 463,  503 => 431,  453 => 383,  399 => 331,  347 => 281,  297 => 233,  255 => 193,  239 => 179,  196 => 138,  155 => 102,  145 => 94,  116 => 67,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3fdc62e5587a66f370384a76b9be7676", "");
    }
}
