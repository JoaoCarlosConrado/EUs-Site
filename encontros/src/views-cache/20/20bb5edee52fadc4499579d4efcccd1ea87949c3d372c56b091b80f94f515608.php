<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/base/template-base-dashboard.html */
class __TwigTemplate_c75fdd6e9698b3d471656fb5575f9f695385129cb1c0457e9dbe0fdc90603d02 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'page' => [$this, 'block_page'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base/template-base.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("admin/base/template-base.html", "admin/base/template-base-dashboard.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Dashboard";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "<body class=\"animsition\">
    <div class=\"page-wrapper\">
        <!-- HEADER MOBILE-->
        <header class=\"header-mobile d-block d-lg-none\">
            <div class=\"header-mobile__bar\">
                <div class=\"container-fluid\">
                    <div class=\"header-mobile-inner\">
                        <a class=\"logo\" href=\"dashboard\">
                            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/logo_EU_azul.png\" class=\"img-logo-mobile\" alt=\"CoolAdmin\" />
                        </a>
                        <button class=\"hamburger hamburger--slider\" type=\"button\">
                            <span class=\"hamburger-box\">
                                <span class=\"hamburger-inner\"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class=\"navbar-mobile\">
                <div class=\"container-fluid\">
                    <ul class=\"navbar-mobile__list list-unstyled\">
                        ";
        // line 25
        $this->loadTemplate("admin/base/sidebar.html", "admin/base/template-base-dashboard.html", 25)->display($context);
        // line 26
        echo "                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class=\"menu-sidebar d-none d-lg-block\">
            <div class=\"logo\">
                <a href=\"dashboard\">
                    <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/logo_EU_azul.png\" alt=\"Cool Admin\" />
                </a>
            </div>
            <div class=\"menu-sidebar__content js-scrollbar1\">
                <nav class=\"navbar-sidebar\">
                    <ul class=\"list-unstyled navbar__list\">
                        ";
        // line 42
        $this->loadTemplate("admin/base/sidebar.html", "admin/base/template-base-dashboard.html", 42)->display($context);
        // line 43
        echo "                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class=\"page-container\">
            <!-- HEADER DESKTOP-->
            <header class=\"header-desktop\">
                <div class=\"section__content section__content--p30\">
                    <div class=\"container-fluid\">
                        <div class=\"header-wrap justify-content-end\">
                            <div class=\"header-button justify-content-end\">
                                <div class=\"account-wrap\">
                                    <div class=\"account-item clearfix js-item-menu\">
                                        <div class=\"content\">
                                            <a class=\"js-acc-btn\" href=\"#\"><i class=\"fas fa-user\"></i></a>
                                        </div>
                                        <div class=\"account-dropdown js-dropdown\">
                                            <div class=\"account-dropdown__body\">
                                                <div class=\"account-dropdown__item\">
                                                    <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/admin/conta\">
                                                        <i class=\"zmdi zmdi-account\"></i>Conta</a>
                                                </div>
                                            </div>
                                            <div class=\"account-dropdown__footer\">
                                                <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/admin/sair\">
                                                    <i class=\"zmdi zmdi-power\"></i>Sair</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            ";
        // line 81
        $this->displayBlock('page', $context, $blocks);
        // line 83
        echo "
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"copyright\">
                                    <p>Copyright © 2018 Colorlib., feito com <i class=\"fa fa-coffee\" alt=\"café\"></i> no N2S.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>
";
    }

    // line 81
    public function block_page($context, array $blocks = [])
    {
        // line 82
        echo "            ";
    }

    public function getTemplateName()
    {
        return "admin/base/template-base-dashboard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 82,  168 => 81,  149 => 83,  147 => 81,  132 => 69,  124 => 64,  101 => 43,  99 => 42,  90 => 36,  78 => 26,  76 => 25,  60 => 12,  50 => 4,  47 => 3,  41 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin/base/template-base-dashboard.html", "/var/www/encontros/src/views/admin/base/template-base-dashboard.html");
    }
}
