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

/* @PrestaShop/Admin/Sell/Order/Order/preview.html.twig */
class __TwigTemplate_7063df4f42d3213973538457252d390d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'order_preview' => [$this, 'block_order_preview'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('order_preview', $context, $blocks);
    }

    public function block_order_preview($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "  <div class=\"row order-preview-content mt-2\" data-role=\"preview-row\">
    <div class=\"col-5\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"row\">
            <div class=\"col-1\">
              <p class=\"mb-0\">
                <i class=\"material-icons pr-1\">local_shipping</i>
              </p>
            </div>
            <div class=\"col\" data-role=\"shipping-details\">
              <p class=\"mb-0\">
                <strong>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carrier", [], "Admin.Global"), "html", null, true);
        echo ":</strong>
                ";
        // line 40
        if ( !twig_get_attribute($this->env, $this->source, ($context["orderPreview"] ?? null), "isVirtual", [], "any", false, false, false, 40)) {
            // line 41
            echo "                  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["orderPreview"] ?? null), "shippingDetails", [], "any", false, false, false, 41), "carrierName", [], "any", false, false, false, 41), "html", null, true);
            echo "
                ";
        } else {
            // line 43
            echo "                  -
                ";
        }
        // line 45
        echo "              </p>

              <p class=\"mb-0\">
                <strong>";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tracking number", [], "Admin.Shipping.Feature"), "html", null, true);
        echo ":</strong>
                ";
        // line 49
        if (( !twig_get_attribute($this->env, $this->source, ($context["orderPreview"] ?? null), "isVirtual", [], "any", false, false, false, 49) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["orderPreview"] ?? null), "shippingDetails", [], "any", false, false, false, 49), "trackingNumber", [], "any", false, false, false, 49)))) {
            // line 50
            echo "                  ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["orderPreview"] ?? null), "shippingDetails", [], "any", false, false, false, 50), "trackingUrl", [], "any", false, false, false, 50)) {
                // line 51
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["orderPreview"] ?? null), "shippingDetails", [], "any", false, false, false, 51), "trackingUrl", [], "any", false, false, false, 51), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["orderPreview"] ?? null), "shippingDetails", [], "any", false, false, false, 51), "trackingNumber", [], "any", false, false, false, 51), "html", null, true);
                echo "</a>
                  ";
            } else {
                // line 53
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["orderPreview"] ?? null), "shippingDetails", [], "any", false, false, false, 53), "trackingNumber", [], "any", false, false, false, 53), "html", null, true);
                echo "
                  ";
            }
            // line 55
            echo "                ";
        } else {
            // line 56
            echo "                  -
                ";
        }
        // line 58
        echo "              </p>

              <p class=\"mb-2\">
                <strong>";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shipping details", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo ":</strong>
                ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, ($context["orderPreview"] ?? null), "virtual", [], "any", false, false, false, 62)) {
            // line 63
            echo "                  -
                ";
        }
        // line 65
        echo "              </p>

              ";
        // line 67
        if ( !twig_get_attribute($this->env, $this->source, ($context["orderPreview"] ?? null), "virtual", [], "any", false, false, false, 67)) {
            // line 68
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["orderPreview"] ?? null), "shippingAddressFormatted", [], "any", false, false, false, 68), "
"));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 69
                echo "                  <p";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 69)) {
                    echo " class=\"mb-0\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["line"], "html", null, true);
                echo "</p>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "              ";
        }
        // line 72
        echo "            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"row\">
            <div class=\"col-1\">
              <p class=\"mb-0\">
                <i class=\"material-icons pr-1\">email</i>
              </p>
            </div>
            <div class=\"col\" data-role=\"email\">
              <p class=\"mb-1\">
                <strong>";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email:", [], "Admin.Global"), "html", null, true);
        echo "</strong>
              </p>

              <p class=\"mb-0\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["orderPreview"] ?? null), "invoiceDetails", [], "any", false, false, false, 87), "email", [], "any", false, false, false, 87), "html", null, true);
        echo "</p>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-1\">
              <p class=\"mb-0\">
                <i class=\"material-icons pr-1\">receipt</i>
              </p>
            </div>
            <div class=\"col\" data-role=\"invoice-details\">
              <p class=\"mb-1\">
                <strong>";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice details", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo ":</strong>
              </p>


              ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["orderPreview"] ?? null), "invoiceAddressFormatted", [], "any", false, false, false, 102), "
"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 103
            echo "                <p";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 103)) {
                echo " class=\"mb-0\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["line"], "html", null, true);
            echo "</p>
              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-7\">
      <div class=\"table-responsive\">
        <table class=\"table product table-borderless border-bottom-0\" data-role=\"product-table\">
          <thead>
          <tr>
            ";
        // line 115
        if (twig_get_attribute($this->env, $this->source, ($context["orderPreview"] ?? null), "taxIncluded", [], "any", false, false, false, 115)) {
            // line 116
            echo "              ";
            $context["taxInclusion"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tax included", [], "Admin.Global");
            // line 117
            echo "            ";
        } else {
            // line 118
            echo "              ";
            $context["taxInclusion"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tax excluded", [], "Admin.Global");
            // line 119
            echo "            ";
        }
        // line 120
        echo "
            <th>
              ";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products", [], "Admin.Global"), "html", null, true);
        echo "
              (";
        // line 123
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["orderPreview"] ?? null), "productDetails", [], "any", false, false, false, 123)), "html", null, true);
        echo ")
            </th>
            <th>";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reference", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"js-cell-product-stock-location\">";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stock location", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</th>
            ";
        // line 127
        if ((twig_get_attribute($this->env, $this->source, ($context["orderPreview"] ?? null), "taxIncluded", [], "any", false, false, false, 127) == false)) {
            // line 128
            echo "              <th class=\"text-center\">
                ";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tax", [], "Admin.Global"), "html", null, true);
            echo "
              </th>
            ";
        }
        // line 132
        echo "            <th class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"text-center\">
              ";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "
              <small>";
        // line 135
        echo twig_escape_filter($this->env, ($context["taxInclusion"] ?? null), "html", null, true);
        echo "</small>
            </th>
          </tr>
          </thead>
          <tbody>
          ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["orderPreview"] ?? null), "productDetails", [], "any", false, false, false, 140));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["productDetail"]) {
            // line 141
            echo "            <tr class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 141) > ($context["productsPreviewLimit"] ?? null))) {
                echo "js-product-preview-more d-none";
            }
            echo "\">
              <td class=\"p-1\">
                ";
            // line 143
            if (twig_get_attribute($this->env, $this->source, $context["productDetail"], "id", [], "any", false, false, false, 143)) {
                // line 144
                echo "                  <a class=\"px-0 external-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_form", ["id" => twig_get_attribute($this->env, $this->source, $context["productDetail"], "id", [], "any", false, false, false, 144)]), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productDetail"], "name", [], "any", false, false, false, 144), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 146
                echo "                  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productDetail"], "name", [], "any", false, false, false, 146), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product deleted", [], "Admin.Catalog.Feature"), "html", null, true);
                echo ")
                ";
            }
            // line 148
            echo "              </td>
              <td class=\"p-1\">";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productDetail"], "reference", [], "any", false, false, false, 149), "html", null, true);
            echo "</td>
              <td class=\"p-1 js-cell-product-stock-location\">
                ";
            // line 151
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["productDetail"], "location", [], "any", false, false, false, 151))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productDetail"], "location", [], "any", false, false, false, 151), "html", null, true);
            }
            // line 152
            echo "              </td>
              ";
            // line 153
            if ((twig_get_attribute($this->env, $this->source, ($context["orderPreview"] ?? null), "taxIncluded", [], "any", false, false, false, 153) == false)) {
                // line 154
                echo "                <td class=\"p-1 text-center\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productDetail"], "totalTax", [], "any", false, false, false, 154), "html", null, true);
                echo "</td>
              ";
            }
            // line 156
            echo "              <td class=\"p-1 text-center\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productDetail"], "quantity", [], "any", false, false, false, 156), "html", null, true);
            echo "</td>
              <td class=\"p-1 text-center\">";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productDetail"], "totalPrice", [], "any", false, false, false, 157), "html", null, true);
            echo "</td>
            </tr>
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productDetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "
          ";
        // line 161
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["orderPreview"] ?? null), "productDetails", [], "any", false, false, false, 161)) > ($context["productsPreviewLimit"] ?? null))) {
            // line 162
            echo "            <tr>
              <td colspan=\"6\">
                <a href=\"#\" class=\"js-preview-more-products-btn text-dark\">
                  <i class=\"material-icons\">more_horiz</i>
                  ";
            // line 166
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("(%count% more)", ["%count%" => (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 167
($context["orderPreview"] ?? null), "productDetails", [], "any", false, false, false, 167)) - ($context["productsPreviewLimit"] ?? null))], "Admin.Global"), "html", null, true);
            // line 168
            echo "
                </a>
              </td>
            </tr>
          ";
        }
        // line 173
        echo "          </tbody>
        </table>
      </div>

      <div class=\"text-right\">
        <a href=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_view", ["orderId" => ($context["orderId"] ?? null)]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm mb-3\">
          ";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open details", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
          <i class=\"material-icons rtl-flip\">arrow_right_alt</i>
        </a>
      </div>
    </div>
  </div>
  ";
        // line 185
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayOrderPreview", ["order_id" => ($context["orderId"] ?? null)]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/preview.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  462 => 185,  453 => 179,  449 => 178,  442 => 173,  435 => 168,  433 => 167,  432 => 166,  426 => 162,  424 => 161,  421 => 160,  404 => 157,  399 => 156,  393 => 154,  391 => 153,  388 => 152,  384 => 151,  379 => 149,  376 => 148,  368 => 146,  360 => 144,  358 => 143,  350 => 141,  333 => 140,  325 => 135,  321 => 134,  315 => 132,  309 => 129,  306 => 128,  304 => 127,  300 => 126,  296 => 125,  291 => 123,  287 => 122,  283 => 120,  280 => 119,  277 => 118,  274 => 117,  271 => 116,  269 => 115,  257 => 105,  236 => 103,  218 => 102,  211 => 98,  197 => 87,  191 => 84,  177 => 72,  174 => 71,  153 => 69,  134 => 68,  132 => 67,  128 => 65,  124 => 63,  122 => 62,  118 => 61,  113 => 58,  109 => 56,  106 => 55,  100 => 53,  92 => 51,  89 => 50,  87 => 49,  83 => 48,  78 => 45,  74 => 43,  68 => 41,  66 => 40,  62 => 39,  48 => 27,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/preview.html.twig", "C:\\laragon\\www\\DesipulosVapeHub\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\preview.html.twig");
    }
}
