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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig */
class __TwigTemplate_859a18d627edb4c35b8dfaaeff5659af extends Template
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
<div class=\"card mt-2\" id=\"view_order_payments_block\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment", [], "Admin.Global"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["orderForViewing"] ?? null), "payments", [], "any", false, false, false, 29), "payments", [], "any", false, false, false, 29)), "html", null, true);
        echo ")
    </h3>
  </div>

  <div class=\"card-body\">
    ";
        // line 34
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments_alert.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig", 34)->display(twig_array_merge($context, ["payments" => twig_get_attribute($this->env, $this->source,         // line 35
($context["orderForViewing"] ?? null), "payments", [], "any", false, false, false, 35), "linkedOrders" => twig_get_attribute($this->env, $this->source,         // line 36
($context["orderForViewing"] ?? null), "linkedOrders", [], "any", false, false, false, 36)]));
        // line 38
        echo "
    <table class=\"table\" data-role=\"payments-grid-table\">
      <thead>
        <tr>
          <th class=\"table-head-date\">";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th class=\"table-head-payment\">";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment method", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</th>
          <th class=\"table-head-transaction\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Transaction ID", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</th>
          <th class=\"table-head-amount\">";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th class=\"table-head-invoice\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th class=\"table-head-employee\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Employee", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["orderForViewing"] ?? null), "payments", [], "any", false, false, false, 52), "payments", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 53
            echo "        <tr>
          <td data-role=\"date-column\">";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\LocalizationExtension']->dateFormatFull(twig_get_attribute($this->env, $this->source, $context["payment"], "date", [], "any", false, false, false, 54)), "html", null, true);
            echo "</td>
          <td data-role=\"payment-method-column\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
          <td data-role=\"transaction-id-column\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "transactionId", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
          <td data-role=\"amount-column\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "amount", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
          <td data-role=\"invoice-column\">";
            // line 58
            if (twig_get_attribute($this->env, $this->source, $context["payment"], "invoiceNumber", [], "any", false, false, false, 58)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "invoiceNumber", [], "any", false, false, false, 58), "html", null, true);
            }
            echo "</td>
          <td data-role=\"invoice-column\">";
            // line 59
            if (twig_get_attribute($this->env, $this->source, $context["payment"], "employeeName", [], "any", false, false, false, 59)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "employeeName", [], "any", false, false, false, 59), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
          <td class=\"text-right\">
            <button class=\"btn btn-sm btn-outline-secondary js-payment-details-btn\">
              ";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Details", [], "Admin.Global"), "html", null, true);
            echo "
            </button>
          </td>
        </tr>
        <tr class=\"d-none\" data-role=\"payment-details\">
          <td colspan=\"6\">
            <p class=\"mb-0\">
              <strong>";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Card number", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>
              ";
            // line 70
            if (twig_get_attribute($this->env, $this->source, $context["payment"], "cardNumber", [], "any", false, false, false, 70)) {
                // line 71
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "cardNumber", [], "any", false, false, false, 71), "html", null, true);
                echo "
              ";
            } else {
                // line 73
                echo "                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not defined", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
              ";
            }
            // line 75
            echo "            </p>
            <p class=\"mb-0\">
              <strong>";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Card type", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>&nbsp;
              ";
            // line 78
            if (twig_get_attribute($this->env, $this->source, $context["payment"], "cardBrand", [], "any", false, false, false, 78)) {
                // line 79
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "cardBrand", [], "any", false, false, false, 79), "html", null, true);
                echo "
              ";
            } else {
                // line 81
                echo "                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not defined", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
              ";
            }
            // line 83
            echo "            </p>
            <p class=\"mb-0\">
              <strong>";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Expiration date", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</strong>&nbsp;
              ";
            // line 86
            if (twig_get_attribute($this->env, $this->source, $context["payment"], "cardExpiration", [], "any", false, false, false, 86)) {
                // line 87
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "cardExpiration", [], "any", false, false, false, 87), "html", null, true);
                echo "
              ";
            } else {
                // line 89
                echo "                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not defined", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
              ";
            }
            // line 91
            echo "            </p>
            <p class=\"mb-0\">
              <strong>";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cardholder name", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>&nbsp;
              ";
            // line 94
            if (twig_get_attribute($this->env, $this->source, $context["payment"], "cardHolder", [], "any", false, false, false, 94)) {
                // line 95
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "cardHolder", [], "any", false, false, false, 95), "html", null, true);
                echo "
              ";
            } else {
                // line 97
                echo "                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not defined", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
              ";
            }
            // line 99
            echo "            </p>
          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "      <tr class=\"d-print-none\">
        ";
        // line 104
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addOrderPaymentForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_add_payment", ["orderId" => twig_get_attribute($this->env, $this->source, ($context["orderForViewing"] ?? null), "id", [], "any", false, false, false, 104)])]);
        echo "
          <td>
            ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["addOrderPaymentForm"] ?? null), "date", [], "any", false, false, false, 106), 'widget');
        echo "
          </td>
          <td>
            ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["addOrderPaymentForm"] ?? null), "payment_method", [], "any", false, false, false, 109), 'widget');
        echo "
          </td>
          <td>
            ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["addOrderPaymentForm"] ?? null), "transaction_id", [], "any", false, false, false, 112), 'widget');
        echo "
          </td>
          <td>
            ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["addOrderPaymentForm"] ?? null), "amount_currency", [], "any", false, false, false, 115), 'widget');
        echo "
          </td>
          <td>
            <div ";
        // line 118
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["addOrderPaymentForm"] ?? null), "id_invoice", [], "any", false, false, false, 118), "vars", [], "any", false, false, false, 118), "choices", [], "any", false, false, false, 118))) {
            echo "class=\"d-none\"";
        }
        echo ">
              ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["addOrderPaymentForm"] ?? null), "id_invoice", [], "any", false, false, false, 119), 'widget');
        echo "
            </div>
          </td>
          <td></td>
          <td>
            <button type=\"submit\" class=\"btn btn-primary btn-sm\">";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add", [], "Admin.Actions"), "html", null, true);
        echo "</button>
          </td>
        ";
        // line 126
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addOrderPaymentForm"] ?? null), 'form_end');
        echo "
      </tr>
      </tbody>
    </table>

    ";
        // line 131
        if (( !twig_get_attribute($this->env, $this->source, ($context["orderForViewing"] ?? null), "valid", [], "any", false, false, false, 131) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["changeOrderCurrencyForm"] ?? null), "new_currency_id", [], "any", false, false, false, 131), "vars", [], "any", false, false, false, 131), "choices", [], "any", false, false, false, 131)))) {
            // line 132
            echo "      ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["changeOrderCurrencyForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_change_currency", ["orderId" => twig_get_attribute($this->env, $this->source, ($context["orderForViewing"] ?? null), "id", [], "any", false, false, false, 132)])]);
            echo "
        <div class=\"form-group row d-print-none\">
          <label class=\"form-control-label\">";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Change currency", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</label>
          <div class=\"col-sm\">
            <div class=\"input-group\">
              ";
            // line 137
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["changeOrderCurrencyForm"] ?? null), "new_currency_id", [], "any", false, false, false, 137), 'widget');
            echo "
              <button class=\"btn btn-outline-secondary btn-sm ml-2\">
                ";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Change", [], "Admin.Actions"), "html", null, true);
            echo "
              </button>
            </div>

            <div class=\"d-none\">
              ";
            // line 144
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["changeOrderCurrencyForm"] ?? null), 'rest');
            echo "
            </div>

            <small class=\"text-muted\">
              ";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Do not forget to update your exchange rate before making this change.", [], "Admin.Orderscustomers.Help"), "html", null, true);
            echo "
            </small>
          </div>
        </div>
      ";
            // line 152
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["changeOrderCurrencyForm"] ?? null), 'form_end');
            echo "
    ";
        }
        // line 154
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 154,  333 => 152,  326 => 148,  319 => 144,  311 => 139,  306 => 137,  300 => 134,  294 => 132,  292 => 131,  284 => 126,  279 => 124,  271 => 119,  265 => 118,  259 => 115,  253 => 112,  247 => 109,  241 => 106,  236 => 104,  233 => 103,  224 => 99,  218 => 97,  212 => 95,  210 => 94,  206 => 93,  202 => 91,  196 => 89,  190 => 87,  188 => 86,  184 => 85,  180 => 83,  174 => 81,  168 => 79,  166 => 78,  162 => 77,  158 => 75,  152 => 73,  146 => 71,  144 => 70,  140 => 69,  130 => 62,  120 => 59,  114 => 58,  110 => 57,  106 => 56,  102 => 55,  98 => 54,  95 => 53,  91 => 52,  83 => 47,  79 => 46,  75 => 45,  71 => 44,  67 => 43,  63 => 42,  57 => 38,  55 => 36,  54 => 35,  53 => 34,  43 => 29,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig", "C:\\laragon\\www\\DesipulosVapeHub\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\View\\payments.html.twig");
    }
}
