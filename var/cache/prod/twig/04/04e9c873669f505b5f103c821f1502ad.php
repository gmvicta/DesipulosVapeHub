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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/msg_list_item.html.twig */
class __TwigTemplate_42599a6c0cab3b13b490445e6fb0a18d extends Template
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
 <li class=\"mb-2 ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "employeeId", [], "any", false, false, false, 26)) {
            echo "messages-block-employee";
        } else {
            echo "messages-block-customer";
        }
        echo "\">
  <div class=\"row no-gutters\">
    ";
        // line 28
        if ( !twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "employeeId", [], "any", false, false, false, 28)) {
            // line 29
            echo "      <div class=\"messages-block-icon\">
        <i class=\"material-icons\">account_circle</i>
      </div>

      <div class=\"messages-block-content\">
        <p class=\"mb-0 message customer-message\">
          ";
            // line 35
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "message", [], "any", false, false, false, 35), "html", null, true));
            echo "
        </p>
        <p class=\"text-muted mb-0\">
          ";
            // line 38
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "customerFirstName", [], "any", false, false, false, 38) . " ") . twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "customerLastName", [], "any", false, false, false, 38)), "html", null, true);
            echo "
          ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "messageDate", [], "any", false, false, false, 39), "format", [], "any", false, false, false, 39), "html", null, true);
            echo "
        </p>
      </div>
    ";
        }
        // line 43
        echo "
    ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "employeeId", [], "any", false, false, false, 44)) {
            // line 45
            echo "      <div class=\"messages-block-content\">
        <p class=\"mb-0 message employee-message";
            // line 46
            echo ((twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "isPrivate", [], "any", false, false, false, 46)) ? ("--private") : (""));
            echo "\">
          ";
            // line 47
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "message", [], "any", false, false, false, 47), "html", null, true));
            echo "
        </p>
        <p class=\"text-muted mb-0 text-right\">
          ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "isCurrentEmployeesMessage", [], "any", false, false, false, 50)) {
                // line 51
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Me", [], "Admin.Global"), "html", null, true);
                echo "
          ";
            } else {
                // line 53
                echo "            ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "employeeFirstName", [], "any", false, false, false, 53) . " ") . twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "employeeLastName", [], "any", false, false, false, 53)), "html", null, true);
                echo "
          ";
            }
            // line 55
            echo "
          ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "messageDate", [], "any", false, false, false, 56), "format", [], "any", false, false, false, 56), "html", null, true);
            echo "
        </p>
      </div>

      <div class=\"messages-block-icon\">
        <i class=\"material-icons employee-icon";
            // line 61
            echo ((twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "isPrivate", [], "any", false, false, false, 61)) ? ("--private") : (""));
            echo "\"></i>
      </div>
    ";
        }
        // line 64
        echo "  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/msg_list_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 64,  119 => 61,  111 => 56,  108 => 55,  102 => 53,  96 => 51,  94 => 50,  88 => 47,  84 => 46,  81 => 45,  79 => 44,  76 => 43,  69 => 39,  65 => 38,  59 => 35,  51 => 29,  49 => 28,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/msg_list_item.html.twig", "C:\\laragon\\www\\DesipulosVapeHub\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\View\\msg_list_item.html.twig");
    }
}
