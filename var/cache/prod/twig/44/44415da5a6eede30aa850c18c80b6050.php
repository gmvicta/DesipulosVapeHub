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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig */
class __TwigTemplate_85d0900bf3f8d4df0a761d5953dfee81 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $context["validOrdersCount"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "ordersInformation", [], "any", false, false, false, 26), "validOrders", [], "any", false, false, false, 26));
        // line 27
        $context["invalidOrdersCount"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "ordersInformation", [], "any", false, false, false, 27), "invalidOrders", [], "any", false, false, false, 27));
        // line 28
        $context["ordersCount"] = (($context["validOrdersCount"] ?? null) + ($context["invalidOrdersCount"] ?? null));
        // line 29
        echo "
<div class=\"card customer-orders-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">shopping_basket</i>
    ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders", [], "Admin.Global"), "html", null, true);
        echo "
    <span class=\"badge badge-primary rounded\">";
        // line 34
        echo twig_escape_filter($this->env, ($context["ordersCount"] ?? null), "html", null, true);
        echo "</span>
  </h3>
  <div class=\"card-body\">
    ";
        // line 37
        if ((($context["ordersCount"] ?? null) > 0)) {
            // line 38
            echo "      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col\">
              ";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Valid orders:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
              <span class=\"badge badge-success rounded\">";
            // line 43
            echo twig_escape_filter($this->env, ($context["validOrdersCount"] ?? null), "html", null, true);
            echo "</span>
              ";
            // line 44
            $context["totalAmount"] = (("<span id=\"total-order-amount\">" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "ordersInformation", [], "any", false, false, false, 44), "totalSpent", [], "any", false, false, false, 44)) . "</span>");
            // line 45
            echo "              ";
            echo twig_sprintf($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("for a total amount of %s", [], "Admin.Orderscustomers.Feature"), ($context["totalAmount"] ?? null));
            echo "
            </div>
            <div class=\"col\">
              ";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid orders:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
              <span class=\"badge badge-danger rounded\">";
            // line 49
            echo twig_escape_filter($this->env, ($context["invalidOrdersCount"] ?? null), "html", null, true);
            echo "</span>
            </div>
          </div>
        </div>
      </div>

      ";
            // line 55
            if (($context["validOrdersCount"] ?? null)) {
                // line 56
                echo "        <table class=\"table\">
          <thead>
            <tr>
              <th>";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
                echo "</th>
              <th>";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date", [], "Admin.Global"), "html", null, true);
                echo "</th>
              <th>";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment", [], "Admin.Global"), "html", null, true);
                echo "</th>
              <th>";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status", [], "Admin.Global"), "html", null, true);
                echo "</th>
              <th>";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products", [], "Admin.Global"), "html", null, true);
                echo "</th>
              <th>";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total spent", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</th>
              <th class=\"text-right\">";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions", [], "Admin.Global"), "html", null, true);
                echo "</th>
            </tr>
          </thead>
          <tbody>
            ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "ordersInformation", [], "any", false, false, false, 69), "validOrders", [], "any", false, false, false, 69));
                foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                    // line 70
                    echo "              ";
                    $context["orderViewUrl"] = $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminOrders", true, ["id_order" => twig_get_attribute($this->env, $this->source, $context["order"], "orderId", [], "any", false, false, false, 70), "vieworder" => 1]);
                    // line 71
                    echo "
              <tr class=\"customer-valid-order\">
                <td class=\"customer-valid-order-id js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 73
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderId", [], "any", false, false, false, 73), "html", null, true);
                    echo "</td>
                <td class=\"customer-valid-order-date js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 74
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderPlacedDate", [], "any", false, false, false, 74), "html", null, true);
                    echo "</td>
                <td class=\"customer-valid-order-payment js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 75
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "paymentMethodName", [], "any", false, false, false, 75), "html", null, true);
                    echo "</td>
                <td class=\"customer-valid-order-status js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 76
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderStatus", [], "any", false, false, false, 76), "html", null, true);
                    echo "</td>
                <td class=\"customer-valid-order-products js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 77
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderProductsCount", [], "any", false, false, false, 77), "html", null, true);
                    echo "</td>
                <td class=\"customer-valid-order-total js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 78
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "totalPaid", [], "any", false, false, false, 78), "html", null, true);
                    echo "</td>
                <td class=\"customer-valid-order-actions text-right\">
                  <div class=\"btn-group-action\">
                    <div class=\"btn-group\">
                      <a href=\"";
                    // line 82
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\" class=\"btn tooltip-link dropdown-item view-link\" data-toggle=\"pstooltip\" data-placement=\"top\" data-original-title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View", [], "Admin.Actions"), "html", null, true);
                    echo "\">
                        <i class=\"material-icons\">zoom_in</i>
                      </a>
                    </div>
                  </div>
                </td>
              </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "          </tbody>
        </table>
      ";
            }
            // line 93
            echo "

      ";
            // line 95
            if (($context["invalidOrdersCount"] ?? null)) {
                // line 96
                echo "        <table class=\"table\">
          <thead>
            <tr>
              <th>";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
                echo "</th>
              <th>";
                // line 100
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date", [], "Admin.Global"), "html", null, true);
                echo "</th>
              <th>";
                // line 101
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment", [], "Admin.Global"), "html", null, true);
                echo "</th>
              <th>";
                // line 102
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status", [], "Admin.Global"), "html", null, true);
                echo "</th>
              <th>";
                // line 103
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products", [], "Admin.Global"), "html", null, true);
                echo "</th>
              <th>";
                // line 104
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total spent", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</th>
              <th class=\"text-right\">";
                // line 105
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions", [], "Admin.Global"), "html", null, true);
                echo "</th>
            </tr>
          </thead>
          <tbody>
            ";
                // line 109
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "ordersInformation", [], "any", false, false, false, 109), "invalidOrders", [], "any", false, false, false, 109));
                foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                    // line 110
                    echo "              ";
                    $context["orderViewUrl"] = $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminOrders", true, ["id_order" => twig_get_attribute($this->env, $this->source, $context["order"], "orderId", [], "any", false, false, false, 110), "vieworder" => 1]);
                    // line 111
                    echo "
              <tr class=\"customer-invalid-order\">
                <td class=\"customer-invalid-order-id js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 113
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderId", [], "any", false, false, false, 113), "html", null, true);
                    echo "</td>
                <td class=\"customer-invalid-order-date js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 114
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderPlacedDate", [], "any", false, false, false, 114), "html", null, true);
                    echo "</td>
                <td class=\"customer-invalid-order-payment js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 115
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "paymentMethodName", [], "any", false, false, false, 115), "html", null, true);
                    echo "</td>
                <td class=\"customer-invalid-order-status js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 116
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderStatus", [], "any", false, false, false, 116), "html", null, true);
                    echo "</td>
                <td class=\"customer-invalid-order-products js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 117
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderProductsCount", [], "any", false, false, false, 117), "html", null, true);
                    echo "</td>
                <td class=\"customer-invalid-order-total js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 118
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "totalPaid", [], "any", false, false, false, 118), "html", null, true);
                    echo "</td>
                <td class=\"text-right customer-invalid-order-actions\">
                  <div class=\"btn-group-action\">
                    <div class=\"btn-group\">
                      <a href=\"";
                    // line 122
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\" class=\"btn tooltip-link dropdown-item grid-view-row-link\" data-toggle=\"pstooltip\" data-placement=\"top\" data-original-title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View", [], "Admin.Actions"), "html", null, true);
                    echo "\">
                        <i class=\"material-icons\">zoom_in</i>
                      </a>
                    </div>
                  </div>
                </td>
              </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "          </tbody>
        </table>
      ";
            }
            // line 133
            echo "
    ";
        } else {
            // line 135
            echo "      <p class=\"text-muted text-center\">
        ";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%firstname% %lastname% has not placed any orders yet", ["%firstname%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 136), "firstName", [], "any", false, false, false, 136), "%lastname%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 136), "lastName", [], "any", false, false, false, 136)], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      </p>
    ";
        }
        // line 139
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 139,  329 => 136,  326 => 135,  322 => 133,  317 => 130,  301 => 122,  292 => 118,  286 => 117,  280 => 116,  274 => 115,  268 => 114,  262 => 113,  258 => 111,  255 => 110,  251 => 109,  244 => 105,  240 => 104,  236 => 103,  232 => 102,  228 => 101,  224 => 100,  220 => 99,  215 => 96,  213 => 95,  209 => 93,  204 => 90,  188 => 82,  179 => 78,  173 => 77,  167 => 76,  161 => 75,  155 => 74,  149 => 73,  145 => 71,  142 => 70,  138 => 69,  131 => 65,  127 => 64,  123 => 63,  119 => 62,  115 => 61,  111 => 60,  107 => 59,  102 => 56,  100 => 55,  91 => 49,  87 => 48,  80 => 45,  78 => 44,  74 => 43,  70 => 42,  64 => 38,  62 => 37,  56 => 34,  52 => 33,  46 => 29,  44 => 28,  42 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig", "C:\\laragon\\www\\DesipulosVapeHub\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Customer\\Blocks\\View\\orders.html.twig");
    }
}
