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

/* @PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/addresses.html.twig */
class __TwigTemplate_2a9057d3c4d5491a382f6ad7d14f8e26 extends Template
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
<div class=\"card\" data-role=\"addresses-card\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Addresses", [], "Admin.Global"), "html", null, true);
        echo "
    (";
        // line 29
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["viewableManufacturer"] ?? null), "manufacturerAddresses", [], "any", false, false, false, 29)), "html", null, true);
        echo ")
  </h3>
  <div class=\"card-body\">
    ";
        // line 32
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["viewableManufacturer"] ?? null), "manufacturerAddresses", [], "any", false, false, false, 32))) {
            // line 33
            echo "      <table class=\"table\">
        <thead>
          <tr>
            <th>";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Address", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Address (2)", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("City", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("State", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home phone", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mobile phone", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Other", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["viewableManufacturer"] ?? null), "manufacturerAddresses", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 49
                echo "            <tr>
              <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "first_name", [], "any", false, false, false, 50), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "last_name", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
              <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "address1", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
              <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "address2", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
              <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
              <td>";
                // line 54
                if (twig_get_attribute($this->env, $this->source, $context["address"], "state", [], "any", false, false, false, 54)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "state", [], "any", false, false, false, 54), "html", null, true);
                } else {
                    echo "-";
                }
                echo "</td>
              <td>";
                // line 55
                if (twig_get_attribute($this->env, $this->source, $context["address"], "phone", [], "any", false, false, false, 55)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "phone", [], "any", false, false, false, 55), "html", null, true);
                } else {
                    echo "-";
                }
                echo "</td>
              <td>";
                // line 56
                if (twig_get_attribute($this->env, $this->source, $context["address"], "phone_mobile", [], "any", false, false, false, 56)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "phone_mobile", [], "any", false, false, false, 56), "html", null, true);
                } else {
                    echo "-";
                }
                echo "</td>
              <td>";
                // line 57
                if (twig_get_attribute($this->env, $this->source, $context["address"], "other", [], "any", false, false, false, 57)) {
                    echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "other", [], "any", false, false, false, 57), "html", null, true));
                } else {
                    echo "-";
                }
                echo "</td>
              <td>
                <div class=\"btn-group-action text-right\">
                  <div class=\"btn-group\">
                    <a class=\"btn tooltip-link js-link-row-action dropdown-item\"
                       href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_manufacturer_addresses_edit", ["addressId" => twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                echo "\"
                       data-toggle=\"pstooltip\"
                       data-placement=\"top\"
                       data-original-title=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit", [], "Admin.Actions"), "html", null, true);
                echo "\"
                    >
                      <i class=\"material-icons\">edit</i>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "        </tbody>
      </table>
    ";
        } else {
            // line 77
            echo "      ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No address has been found for this brand.", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "
    ";
        }
        // line 79
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/addresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 79,  182 => 77,  177 => 74,  162 => 65,  156 => 62,  144 => 57,  136 => 56,  128 => 55,  120 => 54,  116 => 53,  112 => 52,  108 => 51,  102 => 50,  99 => 49,  95 => 48,  87 => 43,  83 => 42,  79 => 41,  75 => 40,  71 => 39,  67 => 38,  63 => 37,  59 => 36,  54 => 33,  52 => 32,  46 => 29,  42 => 28,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/addresses.html.twig", "C:\\laragon\\www\\DesipulosVapeHub\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Manufacturer\\Blocks\\View\\addresses.html.twig");
    }
}
