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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig */
class __TwigTemplate_7f3938d4d98ba868b8900daa1cf33431 extends Template
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

<div class=\"card customer-personal-informations-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">person</i>
    ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 30), "firstName", [], "any", false, false, false, 30), "html", null, true);
        echo "
    ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 31), "lastName", [], "any", false, false, false, 31), "html", null, true);
        echo "
    ";
        // line 32
        echo twig_escape_filter($this->env, twig_sprintf("[%06d]", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "customerId", [], "any", false, false, false, 32), "value", [], "any", false, false, false, 32)), "html", null, true);
        echo "
    -
    <a href=\"mailto:";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 34), "email", [], "any", false, false, false, 34), "html", null, true);
        echo "\">
      ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 35), "email", [], "any", false, false, false, 35), "html", null, true);
        echo "
    </a>

    <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminCustomers", true, ["id_customer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "customerId", [], "any", false, false, false, 38), "value", [], "any", false, false, false, 38), "updatecustomer" => 1, "back" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 38), "uri", [], "any", false, false, false, 38)]), "html", null, true);
        echo "\"
       class=\"tooltip-link float-right edit-link\"
       data-toggle=\"pstooltip\"
       title=\"\"
       data-placement=\"top\"
       data-original-title=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit", [], "Admin.Actions"), "html", null, true);
        echo "\"
    >
      <i class=\"material-icons\">edit</i>
    </a>
  </h3>
  <div class=\"card-body\">
    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Social Title", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"customer-social-title col-8\">
        ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 54), "socialTitle", [], "any", false, false, false, 54), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Age", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8 customer-birthday\">
        ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 63), "birthday", [], "any", false, false, false, 63), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Registration Date", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8 customer-registration-date\">
        ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 72), "registrationDate", [], "any", false, false, false, 72), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last Visit", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8 customer-last-visit-date\">
        ";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 81), "lastVisitDate", [], "any", false, false, false, 81), "html", null, true);
        echo "
      </div>
    </div>

    ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 85), "rankBySales", [], "any", false, false, false, 85)) {
            // line 86
            echo "      <div class=\"row mb-1\">
        <div class=\"col-4 text-right\">
          ";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Best Customer Rank", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
        </div>
        <div class=\"col-8 customer-sales-rank\">
          ";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 91), "rankBySales", [], "any", false, false, false, 91), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 95
        echo "
    ";
        // line 96
        if (($context["isMultistoreEnabled"] ?? null)) {
            // line 97
            echo "      <div class=\"row mb-1\">
        <div class=\"col-4 text-right\">
          ";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store", [], "Admin.Global"), "html", null, true);
            echo "
        </div>
        <div class=\"customer-shop-name col-8\">
          ";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 102), "shopName", [], "any", false, false, false, 102), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 106
        echo "
    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Language", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8 customer-language-name\">
        ";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 112), "languageName", [], "any", false, false, false, 112), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Registrations", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">
        ";
        // line 121
        $context["isNewsletterSubscribed"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 121), "subscriptions", [], "any", false, false, false, 121), "newsletterSubscribed", [], "any", false, false, false, 121);
        // line 122
        echo "        ";
        $context["isPartnerOffersSubscribed"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 122), "subscriptions", [], "any", false, false, false, 122), "partnerOffersSubscribed", [], "any", false, false, false, 122);
        // line 123
        echo "
        <span class=\"customer-newsletter-subscription-status badge badge-";
        // line 124
        if (($context["isNewsletterSubscribed"] ?? null)) {
            echo "success";
        } else {
            echo "danger";
        }
        echo " rounded\">
          <i class=\"material-icons\">";
        // line 125
        if (($context["isNewsletterSubscribed"] ?? null)) {
            echo "check";
        } else {
            echo "cancel";
        }
        echo "</i>
          ";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Newsletter", [], "Admin.Global"), "html", null, true);
        echo "
        </span>

        <span class=\"customer-partner-offers-status badge badge-";
        // line 129
        if (($context["isPartnerOffersSubscribed"] ?? null)) {
            echo "success";
        } else {
            echo "danger";
        }
        echo " rounded\">
          <i class=\"material-icons\">";
        // line 130
        if (($context["isPartnerOffersSubscribed"] ?? null)) {
            echo "check";
        } else {
            echo "cancel";
        }
        echo "</i>
          ";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Partner offers", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </span>
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Latest Update", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"customer-latest-update col-8\">
        ";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 141), "lastUpdateDate", [], "any", false, false, false, 141), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">
        ";
        // line 150
        $context["isCustomerActive"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 150), "active", [], "any", false, false, false, 150);
        // line 151
        echo "
        <span class=\"customer-status badge badge-";
        // line 152
        if (($context["isCustomerActive"] ?? null)) {
            echo "success";
        } else {
            echo "danger";
        }
        echo " rounded\">
          ";
        // line 153
        if (($context["isCustomerActive"] ?? null)) {
            // line 154
            echo "            <i class=\"material-icons\">check</i>
            ";
            // line 155
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Active", [], "Admin.Global"), "html", null, true);
            echo "
          ";
        } else {
            // line 157
            echo "            <i class=\"material-icons\">cancel</i>
            ";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Inactive", [], "Admin.Global"), "html", null, true);
            echo "
          ";
        }
        // line 160
        echo "        </span>
      </div>
    </div>

    ";
        // line 164
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "personalInformation", [], "any", false, false, false, 164), "guest", [], "any", false, false, false, 164)) {
            // line 165
            echo "      ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["transferGuestAccountForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
            // line 166
            echo "
      <div class=\"customer-guest-status row mb-1\">
        <div class=\"col-4 text-right\">
          ";
            // line 169
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This customer is registered as a Guest.", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
        </div>
        <div class=\"col-8\">
          ";
            // line 172
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "generalInformation", [], "any", false, false, false, 172), "customerBySameEmailExists", [], "any", false, false, false, 172)) {
                // line 173
                echo "            <p>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A registered customer account using the defined email address already exists. ", [], "Admin.Orderscustomers.Notification"), "html", null, true);
                echo "</p>
          ";
            } else {
                // line 175
                echo "            ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["transferGuestAccountForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customers_transform_guest_to_customer", ["customerId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customerInformation"] ?? null), "customerId", [], "any", false, false, false, 175), "value", [], "any", false, false, false, 175)])]);
                echo "
            ";
                // line 176
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["transferGuestAccountForm"] ?? null), "transfer_guest_account", [], "any", false, false, false, 176), 'widget');
                echo "

            <p class=\"small-text\">
              ";
                // line 179
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This feature generates a random password before sending an email to your customer.", [], "Admin.Orderscustomers.Help"), "html", null, true);
                echo "
            </p>
            ";
                // line 181
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["transferGuestAccountForm"] ?? null), 'form_end');
                echo "
          ";
            }
            // line 183
            echo "        </div>
      </div>
    ";
        }
        // line 186
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 186,  370 => 183,  365 => 181,  360 => 179,  354 => 176,  349 => 175,  343 => 173,  341 => 172,  335 => 169,  330 => 166,  327 => 165,  325 => 164,  319 => 160,  314 => 158,  311 => 157,  306 => 155,  303 => 154,  301 => 153,  293 => 152,  290 => 151,  288 => 150,  282 => 147,  273 => 141,  267 => 138,  257 => 131,  249 => 130,  241 => 129,  235 => 126,  227 => 125,  219 => 124,  216 => 123,  213 => 122,  211 => 121,  205 => 118,  196 => 112,  190 => 109,  185 => 106,  178 => 102,  172 => 99,  168 => 97,  166 => 96,  163 => 95,  156 => 91,  150 => 88,  146 => 86,  144 => 85,  137 => 81,  131 => 78,  122 => 72,  116 => 69,  107 => 63,  101 => 60,  92 => 54,  86 => 51,  75 => 43,  67 => 38,  61 => 35,  57 => 34,  52 => 32,  48 => 31,  44 => 30,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig", "C:\\laragon\\www\\DesipulosVapeHub\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Customer\\Blocks\\View\\personal_information.html.twig");
    }
}
