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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/bought_products.html.twig */
class __TwigTemplate_f9dbfbe87609bfb7fbbb27e9bc03bc9f extends Template
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "productsInformation", [], "any", false, false, false, 26), "boughtProductsInformation", [], "any", false, false, false, 26))) {
            // line 27
            echo "<div class=\"card customer-bought-products-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">attach_money</i>
    ";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Purchased products", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
    <span class=\"badge badge-primary rounded\">";
            // line 31
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "productsInformation", [], "any", false, false, false, 31), "boughtProductsInformation", [], "any", false, false, false, 31)), "html", null, true);
            echo "</span>
  </h3>
  <div class=\"card-body\">
      <table class=\"table\">
        <thead>
          <tr>
            <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity", [], "Admin.Global"), "html", null, true);
            echo "</th>
          </tr>
        </thead>
        <tbody>
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "productsInformation", [], "any", false, false, false, 43), "boughtProductsInformation", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 44
                echo "          <tr class=\"customer-bought-product\">
            <td class=\"customer-bought-product-date\">";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "boughtDate", [], "any", false, false, false, 45), "html", null, true);
                echo "</td>
            <td class=\"customer-bought-product-name\">
              <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminOrders", true, ["id_order" => twig_get_attribute($this->env, $this->source, $context["product"], "orderId", [], "any", false, false, false, 47), "vieworder" => 1]), "html", null, true);
                echo "\">
                ";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productName", [], "any", false, false, false, 48), "html", null, true);
                echo "
              </a>
            </td>
            <td class=\"customer-bought-product-quantity\">";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "boughtQuantity", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </tbody>
      </table>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/bought_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 54,  97 => 51,  91 => 48,  87 => 47,  82 => 45,  79 => 44,  75 => 43,  68 => 39,  64 => 38,  60 => 37,  51 => 31,  47 => 30,  42 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/View/bought_products.html.twig", "C:\\laragon\\www\\DesipulosVapeHub\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Customer\\Blocks\\View\\bought_products.html.twig");
    }
}
