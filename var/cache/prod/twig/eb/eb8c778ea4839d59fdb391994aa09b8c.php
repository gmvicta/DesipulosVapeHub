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

/* @PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/products.html.twig */
class __TwigTemplate_bc56ce87d87fb5fbf5fe691ac240b9e3 extends Template
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
<div class=\"card\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products", [], "Admin.Global"), "html", null, true);
        echo "
    (";
        // line 29
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["viewableManufacturer"] ?? null), "manufacturerProducts", [], "any", false, false, false, 29)), "html", null, true);
        echo ")
  </h3>
  <div class=\"card-body\">
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["viewableManufacturer"] ?? null), "manufacturerProducts", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 33
            echo "      <div class=\"card\">
        <div class=\"card-header clearfix\">
          <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_form", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 35), "html", null, true);
            echo "</a>

          <div class=\"d-inline-block float-right\">
            <div class=\"btn-group-action text-right\">
              <div class=\"btn-group\">
                <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split p-0 no-rotate\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                </a>
                <div class=\"dropdown-menu dropdown-menu-right\">
                  <a class=\"btn tooltip-link js-submit-row-action dropdown-item\"
                     href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_form", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\"
                  >
                    ";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit", [], "Admin.Actions"), "html", null, true);
            echo "
                  </a>
                  <button class=\"btn tooltip-link js-form-submit-btn dropdown-item\"
                          type=\"button\"
                          data-form-submit-url=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_unit_action", ["action" => "delete", "id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\"
                          data-form-confirm-message=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_sprintf("%s%s?", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete item #", [], "Admin.International.Feature"), twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 51)), "html", null, true);
            echo "\"
                  >
                    ";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
            echo "
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"card-body\">
          ";
            // line 61
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "combinations", [], "any", false, false, false, 61))) {
                // line 62
                echo "            <table class=\"table\">
              <thead>
                <tr>
                  <th>";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attribute name", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reference", [], "Admin.Global"), "html", null, true);
                echo "</th>
                  <th>";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("EAN-13", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("UPC", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MPN", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  ";
                // line 70
                if (( !($context["isAllShopContext"] ?? null) && ($context["isStockManagementEnabled"] ?? null))) {
                    // line 71
                    echo "                    <th>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Available quantity", [], "Admin.Catalog.Feature"), "html", null, true);
                    echo "</th>
                  ";
                }
                // line 73
                echo "                </tr>
              </thead>
              <tbody>
                ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "combinations", [], "any", false, false, false, 76));
                foreach ($context['_seq'] as $context["_key"] => $context["combination"]) {
                    // line 77
                    echo "                  <tr>
                    <td>";
                    // line 78
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["combination"], "attributes", [], "any", false, false, false, 78), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 79
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["combination"], "reference", [], "any", false, false, false, 79), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 80
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["combination"], "ean13", [], "any", false, false, false, 80), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["combination"], "upc", [], "any", false, false, false, 81), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 82
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["combination"], "mpn", [], "any", false, false, false, 82), "html", null, true);
                    echo "</td>
                    ";
                    // line 83
                    if (( !($context["isAllShopContext"] ?? null) && ($context["isStockManagementEnabled"] ?? null))) {
                        // line 84
                        echo "                      <td>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["combination"], "quantity", [], "any", false, false, false, 84), "html", null, true);
                        echo "</td>
                    ";
                    }
                    // line 86
                    echo "                  </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['combination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "              </tbody>
            </table>
          ";
            } else {
                // line 91
                echo "            <table class=\"table\">
              <thead>
                <tr>
                  <th>";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ref:", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 95
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("EAN-13:", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 96
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("UPC:", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 97
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MPN:", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  ";
                // line 98
                if (($context["isStockManagementEnabled"] ?? null)) {
                    // line 99
                    echo "                    <th>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Qty:", [], "Admin.Catalog.Feature"), "html", null, true);
                    echo "</th>
                  ";
                }
                // line 101
                echo "                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "reference", [], "any", false, false, false, 105), "html", null, true);
                echo "</td>
                  <td>";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "ean13", [], "any", false, false, false, 106), "html", null, true);
                echo "</td>
                  <td>";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "upc", [], "any", false, false, false, 107), "html", null, true);
                echo "</td>
                  <td>";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "mpn", [], "any", false, false, false, 108), "html", null, true);
                echo "</td>
                  ";
                // line 109
                if (($context["isStockManagementEnabled"] ?? null)) {
                    // line 110
                    echo "                    <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 110), "html", null, true);
                    echo "</td>
                  ";
                }
                // line 112
                echo "                </tr>
              </tbody>
            </table>
          ";
            }
            // line 116
            echo "        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 119,  258 => 116,  252 => 112,  246 => 110,  244 => 109,  240 => 108,  236 => 107,  232 => 106,  228 => 105,  222 => 101,  216 => 99,  214 => 98,  210 => 97,  206 => 96,  202 => 95,  198 => 94,  193 => 91,  188 => 88,  181 => 86,  175 => 84,  173 => 83,  169 => 82,  165 => 81,  161 => 80,  157 => 79,  153 => 78,  150 => 77,  146 => 76,  141 => 73,  135 => 71,  133 => 70,  129 => 69,  125 => 68,  121 => 67,  117 => 66,  113 => 65,  108 => 62,  106 => 61,  95 => 53,  90 => 51,  86 => 50,  79 => 46,  74 => 44,  60 => 35,  56 => 33,  52 => 32,  46 => 29,  42 => 28,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/products.html.twig", "C:\\laragon\\www\\DesipulosVapeHub\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Manufacturer\\Blocks\\View\\products.html.twig");
    }
}
