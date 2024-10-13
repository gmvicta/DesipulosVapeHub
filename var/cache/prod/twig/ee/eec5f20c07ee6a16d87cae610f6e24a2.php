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

/* __string_template__9f955827b0226ff62bf6e87cb429a695 */
class __TwigTemplate_c8247833ca3c4bcab0fbcd85d841bab8 extends Template
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


  <link href=\"/DesipulosVapeHub/admin28/themes/new-theme/public/light_theme.css\" rel=\"stylesheet\" type=\"text/css\">
";
        // line 87
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminproducts\"
  data-base-url=\"/DesipulosVapeHub/admin28/index.php\"  data-token=\"Pfei8JkYL_mH4ikhcHGDB0eX4KPzxVKfNIjiNm8FQJg\">

<div id=\"main-div\" class=\"light_display_layout\">
          
      <div class=\"-notoolbar\">
        

        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 103
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        
      </div>
    </div>

";
        // line 109
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 87
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 103
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

    // line 109
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
        return "__string_template__9f955827b0226ff62bf6e87cb429a695";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 109,  191 => 103,  180 => 87,  171 => 109,  159 => 103,  138 => 87,  116 => 67,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9f955827b0226ff62bf6e87cb429a695", "");
    }
}
