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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/carts.html.twig */
class __TwigTemplate_9024086e25265f5f5c17ad1b234e3b23 extends Template
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
<div class=\"customer-carts-card card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">shopping_cart</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carts", [], "Admin.Global"), "html", null, true);
        echo "
    <span class=\"badge badge-primary rounded\">";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "cartsInformation", [], "any", false, false, false, 30)), "html", null, true);
        echo "</span>
  </h3>
  <div class=\"card-body\">
    ";
        // line 33
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "cartsInformation", [], "any", false, false, false, 33))) {
            // line 34
            echo "      <table class=\"table\">
        <thead>
          <tr>
            <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carrier", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th class=\"text-right\">";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions", [], "Admin.Global"), "html", null, true);
            echo "</th>
          </tr>
        </thead>
        <tbody>
        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "cartsInformation", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["cart"]) {
                // line 46
                echo "          ";
                $context["cartViewUrl"] = $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminCarts", true, ["id_cart" => twig_get_attribute($this->env, $this->source, $context["cart"], "cartId", [], "any", false, false, false, 46), "viewcart" => 1]);
                // line 47
                echo "
          <tr class=\"customer-cart\">
            <td class=\"customer-cart-id js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 49
                echo twig_escape_filter($this->env, ($context["cartViewUrl"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "cartId", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
            <td class=\"customer-cart-date js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 50
                echo twig_escape_filter($this->env, ($context["cartViewUrl"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "cartCreationDate", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
            <td class=\"customer-cart-carrier js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 51
                echo twig_escape_filter($this->env, ($context["cartViewUrl"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "carrierName", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
            <td class=\"customer-cart-total js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 52
                echo twig_escape_filter($this->env, ($context["cartViewUrl"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "cartTotal", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
            <td class=\"customer-cart-actions text-right\">
              <div class=\"btn-group-action\">
                <div class=\"btn-group\">
                  <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, ($context["cartViewUrl"] ?? null), "html", null, true);
                echo "\"
                     class=\"btn tooltip-link dropdown-item grid-view-row-link\"
                     data-toggle=\"pstooltip\"
                     data-placement=\"top\"
                     data-original-title=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View", [], "Admin.Actions"), "html", null, true);
                echo "\"
                  >
                    <i class=\"material-icons\">zoom_in</i>
                  </a>
                </div>
              </div>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "        </tbody>
      </table>
    ";
        } else {
            // line 72
            echo "      <p class=\"text-muted text-center mb-0\">
        ";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No cart is available", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "
      </p>
    ";
        }
        // line 76
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/carts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 76,  151 => 73,  148 => 72,  143 => 69,  128 => 60,  121 => 56,  112 => 52,  106 => 51,  100 => 50,  94 => 49,  90 => 47,  87 => 46,  83 => 45,  76 => 41,  72 => 40,  68 => 39,  64 => 38,  60 => 37,  55 => 34,  53 => 33,  47 => 30,  43 => 29,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/View/carts.html.twig", "C:\\laragon\\www\\DesipulosVapeHub\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Customer\\Blocks\\View\\carts.html.twig");
    }
}
