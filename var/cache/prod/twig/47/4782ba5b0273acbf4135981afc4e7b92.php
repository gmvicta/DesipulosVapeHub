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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/last_connections.html.twig */
class __TwigTemplate_356d712a1086d670fbaa2296ef9d18fa extends Template
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "lastConnectionsInformation", [], "any", false, false, false, 26))) {
            // line 27
            echo "  <div class=\"card customer-last-connections-card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">access_time</i>
      ";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last connections", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      <span class=\"badge badge-primary rounded\">";
            // line 31
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "lastConnectionsInformation", [], "any", false, false, false, 31)), "html", null, true);
            echo "</span>
    </h3>
    <div class=\"card-body\">
      <table class=\"table\">
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pages viewed", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</th>
          <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total time", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</th>
          <th>";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Origin", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</th>
          <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("IP Address", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "lastConnectionsInformation", [], "any", false, false, false, 46));
            foreach ($context['_seq'] as $context["_key"] => $context["connection"]) {
                // line 47
                echo "          <tr class=\"customer-last-connection\">
            <td class=\"customer-last-connection-id\">";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["connection"], "connectionId", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
            <td class=\"customer-last-connection-date\">";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["connection"], "connectionDate", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
            <td class=\"customer-last-connection-pages-viewed\">";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["connection"], "pagesViewed", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
            <td class=\"customer-last-connection-total-time\">";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["connection"], "totalTime", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
            <td class=\"customer-last-connection-origin\">";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["connection"], "httpReferer", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
            <td class=\"customer-last-connection-ip-address\">";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["connection"], "ipAddress", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['connection'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        </tbody>
      </table>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/last_connections.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 56,  114 => 53,  110 => 52,  106 => 51,  102 => 50,  98 => 49,  94 => 48,  91 => 47,  87 => 46,  80 => 42,  76 => 41,  72 => 40,  68 => 39,  64 => 38,  60 => 37,  51 => 31,  47 => 30,  42 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/View/last_connections.html.twig", "C:\\laragon\\www\\DesipulosVapeHub\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Customer\\Blocks\\View\\last_connections.html.twig");
    }
}
