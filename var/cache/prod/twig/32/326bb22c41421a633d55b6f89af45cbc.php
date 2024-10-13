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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/addresses.html.twig */
class __TwigTemplate_6ee98461cf57809dc6f572a97d3681a9 extends Template
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
<div class=\"card customer-addresses-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">location_on</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Addresses", [], "Admin.Global"), "html", null, true);
        echo "
    <span class=\"badge badge-primary rounded\">";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "addressesInformation", [], "any", false, false, false, 30)), "html", null, true);
        echo "</span>

    <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminAddresses", true, ["id_customer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "customerId", [], "any", false, false, false, 32), "value", [], "any", false, false, false, 32), "addaddress" => 1, "back" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 32), "uri", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\" class=\"tooltip-link float-right\" 
    data-toggle=\"pstooltip\" title=\"\" data-placement=\"top\" data-original-title=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add", [], "Admin.Actions"), "html", null, true);
        echo "\">
      <i class=\"material-icons\">add_circle</i>
    </a>
  </h3>

  <div class=\"card-body\">
    ";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerAddressGrid"] ?? null), "data", [], "any", false, false, false, 39), "records_total", [], "any", false, false, false, 39) > 0)) {
            // line 40
            echo "      ";
            $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid.html.twig", "@PrestaShop/Admin/Sell/Customer/Blocks/View/addresses.html.twig", 40)->display(twig_array_merge($context, ["grid" => ($context["customerAddressGrid"] ?? null)]));
            // line 41
            echo "    ";
        } else {
            // line 42
            echo "      <p class=\"text-muted text-center mb-0\">
        ";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%firstname% %lastname% has not registered any addresses yet", ["%firstname%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 43), "firstName", [], "any", false, false, false, 43), "%lastname%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 43), "lastName", [], "any", false, false, false, 43)], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      </p>
    ";
        }
        // line 46
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/addresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 46,  76 => 43,  73 => 42,  70 => 41,  67 => 40,  65 => 39,  56 => 33,  52 => 32,  47 => 30,  43 => 29,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/View/addresses.html.twig", "C:\\laragon\\www\\DesipulosVapeHub\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Customer\\Blocks\\View\\addresses.html.twig");
    }
}
