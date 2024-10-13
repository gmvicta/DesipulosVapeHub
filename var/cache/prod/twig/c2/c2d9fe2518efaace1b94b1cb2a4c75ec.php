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

/* @PrestaShop/Admin/Sell/Order/Order/view.html.twig */
class __TwigTemplate_02736ecc8b40a391c81c5d96b00173b7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 31
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $context["use_regular_h1_structure"] = false;
        // line 27
        ob_start(function () { return ''; });
        // line 28
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/header.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 28)->display($context);
        $context["layoutTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 109
        $context["js_translatable"] = twig_array_merge(["The product was successfully added." => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The product was successfully added.", [], "Admin.Notifications.Success"), "The product was successfully removed." => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The product was successfully removed.", [], "Admin.Notifications.Success"), "[1] products were successfully added." => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1] products were successfully added.", [], "Admin.Notifications.Success"), "[1] products were successfully removed." => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1] products were successfully removed.", [], "Admin.Notifications.Success")],         // line 114
($context["js_translatable"] ?? null));
        // line 31
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 31);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/new-theme/public/orders" . ($context["rtl_suffix"] ?? null)) . ".css")), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 38
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "  <div id=\"order-view-page\" data-order-title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order", [], "Admin.Global"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["orderForViewing"] ?? null), "id", [], "any", false, false, false, 39), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["orderForViewing"] ?? null), "reference", [], "any", false, false, false, 39), "html", null, true);
        echo "\">
    <div class=\"d-print-none\">
      ";
        // line 41
        $context["displayAdminOrderTopHookContent"] = $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminOrderTop", ["id_order" => twig_get_attribute($this->env, $this->source, ($context["orderForViewing"] ?? null), "id", [], "any", false, false, false, 41)]);
        // line 42
        echo "      ";
        if ((($context["displayAdminOrderTopHookContent"] ?? null) != "")) {
            // line 43
            echo "        ";
            echo ($context["displayAdminOrderTopHookContent"] ?? null);
            echo "
      ";
        }
        // line 45
        echo "      <div class=\"order-actions\">
        ";
        // line 46
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/order_actions.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 46)->display($context);
        // line 47
        echo "      </div>
    </div>

    <div class=\"d-none d-print-block mb-4\">
      ";
        // line 51
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/print_order_statistics.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 51)->display($context);
        // line 52
        echo "    </div>

    <div id=\"orderProductsModificationPosition\" class=\"d-none mb-4\"></div>

    <div class=\"d-none d-print-block mb-4\">
      ";
        // line 57
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/print_title.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 57)->display($context);
        // line 58
        echo "    </div>

    <div class=\"product-row row\">
      <div class=\"col-md-4 left-column\">
        ";
        // line 62
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 62)->display($context);
        // line 63
        echo "        ";
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminOrderSide", ["id_order" => twig_get_attribute($this->env, $this->source, ($context["orderForViewing"] ?? null), "id", [], "any", false, false, false, 63)]);
        echo "
        ";
        // line 64
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/messages.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 64)->display($context);
        // line 65
        echo "        ";
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminOrderSideBottom", ["id_order" => twig_get_attribute($this->env, $this->source, ($context["orderForViewing"] ?? null), "id", [], "any", false, false, false, 65)]);
        echo "
      </div>

      <div class=\"col-md-8 d-print-block right-column\">
        <div id=\"orderProductsOriginalPosition\">
          ";
        // line 70
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 70)->display($context);
        // line 71
        echo "        </div>
        ";
        // line 72
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 72)->display($context);
        // line 73
        echo "        ";
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminOrderMain", ["id_order" => twig_get_attribute($this->env, $this->source, ($context["orderForViewing"] ?? null), "id", [], "any", false, false, false, 73)]);
        echo "
        ";
        // line 74
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 74)->display($context);
        // line 75
        echo "        ";
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminOrderMainBottom", ["id_order" => twig_get_attribute($this->env, $this->source, ($context["orderForViewing"] ?? null), "id", [], "any", false, false, false, 75)]);
        echo "
      </div>
    </div>

    ";
        // line 79
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["orderForViewing"] ?? null), "sources", [], "any", false, false, false, 79), "sources", [], "any", false, false, false, 79))) {
            // line 80
            echo "      <div class=\"product-row\">
        <div class=\"left-column\">
          ";
            // line 82
            $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/sources.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 82)->display($context);
            // line 83
            echo "        </div>
      </div>
    ";
        }
        // line 86
        echo "
    ";
        // line 87
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["orderForViewing"] ?? null), "linkedOrders", [], "any", false, false, false, 87), "linkedOrders", [], "any", false, false, false, 87))) {
            // line 88
            echo "      ";
            $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/linked_orders.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 88)->display($context);
            // line 89
            echo "    ";
        }
        // line 90
        echo "
    ";
        // line 91
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminOrder", ["id_order" => twig_get_attribute($this->env, $this->source, ($context["orderForViewing"] ?? null), "id", [], "any", false, false, false, 91)]);
        echo "

    ";
        // line 93
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/add_order_discount_modal.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 93)->display($context);
        // line 94
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_shipping_modal.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 94)->display($context);
        // line 95
        echo "    ";
        if (( !(null === twig_get_attribute($this->env, $this->source, ($context["orderForViewing"] ?? null), "customer", [], "any", false, false, false, 95)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["orderForViewing"] ?? null), "customer", [], "any", false, false, false, 95), "id", [], "any", false, false, false, 95) != 0))) {
            // line 96
            echo "      ";
            $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_customer_address_modal.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 96)->display($context);
            // line 97
            echo "    ";
        }
        // line 98
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/view_all_messages_modal.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 98)->display($context);
        // line 99
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/view_product_pack_modal.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 99)->display($context);
        // line 100
        echo "  </div>
";
    }

    // line 103
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/order_view.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 106,  229 => 104,  225 => 103,  220 => 100,  217 => 99,  214 => 98,  211 => 97,  208 => 96,  205 => 95,  202 => 94,  200 => 93,  195 => 91,  192 => 90,  189 => 89,  186 => 88,  184 => 87,  181 => 86,  176 => 83,  174 => 82,  170 => 80,  168 => 79,  160 => 75,  158 => 74,  153 => 73,  151 => 72,  148 => 71,  146 => 70,  137 => 65,  135 => 64,  130 => 63,  128 => 62,  122 => 58,  120 => 57,  113 => 52,  111 => 51,  105 => 47,  103 => 46,  100 => 45,  94 => 43,  91 => 42,  89 => 41,  79 => 39,  75 => 38,  69 => 35,  64 => 34,  60 => 33,  55 => 31,  53 => 114,  52 => 109,  48 => 28,  46 => 27,  44 => 26,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", "C:\\laragon\\www\\DesipulosVapeHub\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\view.html.twig");
    }
}
