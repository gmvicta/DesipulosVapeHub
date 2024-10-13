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

/* @PrestaShop/Admin/Sell/Customer/Blocks/Index/required_fields.html.twig */
class __TwigTemplate_b8148c14df7bcb8227152d1014d01165 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'customer_required_fields_form' => [$this, 'block_customer_required_fields_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["customerRequiredFieldsForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 26
        echo "
<div class=\"collapse\" id=\"customerRequiredFieldsContainer\">
  ";
        // line 28
        $this->displayBlock('customer_required_fields_form', $context, $blocks);
        // line 62
        echo "</div>
";
    }

    // line 28
    public function block_customer_required_fields_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["customerRequiredFieldsForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customers_set_required_fields")]);
        echo "
    <div class=\"card\" >
      <h3 class=\"card-header\">
        ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Required fields", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"alert alert-info\" role=\"alert\">
          <div class=\"alert-text\">
            <p>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select the fields you would like to be required for this section.", [], "Admin.Orderscustomers.Help"), "html", null, true);
        echo "</p>
            <p>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please make sure you are complying with the opt-in legislation applicable in your country.", [], "Admin.Orderscustomers.Help"), "html", null, true);
        echo "</p>
          </div>
        </div>
        <div class=\"alert alert-danger d-none\" role=\"alert\" id=\"customerRequiredFieldsAlertMessageOptin\">
          <div class=\"alert-text\">
            <p>";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1]Make[/1] sure you enable partner offers in the [2]Shop Parameters > Customer Settings[/2] section of the back office before requiring them. Otherwise, new customers won't be able to create an account and [1]proceed[/1] to checkout.", ["[1]" => "<strong>", "[/1]" => "</strong>", "[2]" => (("<a href=\"" . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customer_preferences")) . "\">"), "[/2]" => "</a>"], "Admin.Orderscustomers.Help");
        // line 48
        echo "</p>
          </div>
        </div>

        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["customerRequiredFieldsForm"] ?? null), "required_fields", [], "any", false, false, false, 52), 'widget');
        echo "
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
    ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["customerRequiredFieldsForm"] ?? null), 'form_end');
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/Index/required_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 60,  97 => 56,  90 => 52,  84 => 48,  82 => 43,  74 => 38,  70 => 37,  62 => 32,  55 => 29,  51 => 28,  46 => 62,  44 => 28,  40 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/Index/required_fields.html.twig", "C:\\laragon\\www\\DesipulosVapeHub\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Customer\\Blocks\\Index\\required_fields.html.twig");
    }
}
