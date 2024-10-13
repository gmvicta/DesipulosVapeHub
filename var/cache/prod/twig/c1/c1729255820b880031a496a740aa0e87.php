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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/messages.html.twig */
class __TwigTemplate_e7237f84447dcbef2d9bce6663107e5f extends Template
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
<div class=\"card customer-messages-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">message</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Messages", [], "Admin.Global"), "html", null, true);
        echo "
    <span class=\"badge badge-primary rounded\">";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "messagesInformation", [], "any", false, false, false, 30)), "html", null, true);
        echo "</span>
  </h3>
  <div class=\"card-body\">
    ";
        // line 33
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "messagesInformation", [], "any", false, false, false, 33))) {
            // line 34
            echo "    <table class=\"table\">
      <thead>
        <tr>
          <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status", [], "Admin.Global"), "html", null, true);
            echo "</th>
          <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Message", [], "Admin.Global"), "html", null, true);
            echo "</th>
          <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sent on", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</th>
        </tr>
      </thead>
      <tbody>
      ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "messagesInformation", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 44
                echo "        <tr class=\"customer-message\">
          <td class=\"customer-message-status\">";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "status", [], "any", false, false, false, 45), "html", null, true);
                echo "</td>
          <td class=\"customer-message-message\">
            <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminCustomerThreads", true, ["id_customer_thread" => twig_get_attribute($this->env, $this->source, $context["message"], "customerThreadId", [], "any", false, false, false, 47), "viewcustomer_thread" => 1]), "html", null, true);
                echo "\">
              ";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 48), "html", null, true);
                echo "...
            </a>
          </td>
          <td class=\"customer-message-sent-on\">";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "date", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "      </tbody>
    </table>
    ";
        } else {
            // line 57
            echo "      <p class=\"text-muted text-center mb-0\">
        ";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%firstname% %lastname% has never contacted you", ["%firstname%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 58), "firstName", [], "any", false, false, false, 58), "%lastname%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 58), "lastName", [], "any", false, false, false, 58)], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      </p>
    ";
        }
        // line 61
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 61,  114 => 58,  111 => 57,  106 => 54,  97 => 51,  91 => 48,  87 => 47,  82 => 45,  79 => 44,  75 => 43,  68 => 39,  64 => 38,  60 => 37,  55 => 34,  53 => 33,  47 => 30,  43 => 29,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/View/messages.html.twig", "C:\\laragon\\www\\DesipulosVapeHub\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Customer\\Blocks\\View\\messages.html.twig");
    }
}
