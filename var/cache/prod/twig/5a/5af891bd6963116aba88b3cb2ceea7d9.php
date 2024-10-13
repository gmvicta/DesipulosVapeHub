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

/* @PrestaShop/Admin/Sell/Customer/view.html.twig */
class __TwigTemplate_47d7b61b3b4d764464e4740edd5c53f5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 28
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $context["layoutTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Information about customer %name%", ["%name%" => ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 26), "firstName", [], "any", false, false, false, 26), 0, 1) . ". ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 26), "lastName", [], "any", false, false, false, 26))], "Admin.Orderscustomers.Feature");
        // line 28
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 28);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "  <div class=\"row\">
    <div class=\"col\">
      ";
        // line 33
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 33)->display($context);
        // line 34
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 34)->display($context);
        // line 35
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/carts.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 35)->display($context);
        // line 36
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/bought_products.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 36)->display($context);
        // line 37
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/viewed_products.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 37)->display($context);
        // line 38
        echo "    </div>

    <div class=\"col\">
      ";
        // line 41
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/private_note.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 41)->display($context);
        // line 42
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/messages.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 42)->display($context);
        // line 43
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 43)->display($context);
        // line 44
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/sent_emails.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 44)->display($context);
        // line 45
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/last_connections.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 45)->display($context);
        // line 46
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/groups.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 46)->display($context);
        // line 47
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/addresses.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 47)->display($context);
        // line 48
        echo "    </div>
  </div>

  <div class=\"row\">
    ";
        // line 52
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminCustomers", ["id_customer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "customerId", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52)]);
        echo "
  </div>
";
    }

    // line 56
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  ";
        // line 59
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/javascript.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 59)->display($context);
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 59,  114 => 57,  110 => 56,  103 => 52,  97 => 48,  94 => 47,  91 => 46,  88 => 45,  85 => 44,  82 => 43,  79 => 42,  77 => 41,  72 => 38,  69 => 37,  66 => 36,  63 => 35,  60 => 34,  58 => 33,  54 => 31,  50 => 30,  45 => 28,  43 => 26,  36 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/view.html.twig", "C:\\laragon\\www\\DesipulosVapeHub\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Customer\\view.html.twig");
    }
}
