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

/* admin/index.html */
class __TwigTemplate_9e0e5adae995e781bfe9c5ee34124ca83922280f7f605cc7ff07afbf361df89d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'page' => [$this, 'block_page'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base/template-base-dashboard.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("admin/base/template-base-dashboard.html", "admin/index.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Dashboard";
    }

    // line 3
    public function block_page($context, array $blocks = [])
    {
        // line 4
        echo "            <!-- MAIN CONTENT-->
            <div class=\"main-content\">
                <div class=\"section__content section__content--p30\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"overview-wrap\">
                                    <h2 class=\"title-1\">Visão Geral</h2>
                                </div>
                            </div>
                        </div>
                        <div class=\"row m-t-25\">
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"overview-item overview-item--c1\">
                                    <div class=\"overview__inner\">
                                        <div class=\"overview-box clearfix\">
                                            <div class=\"icon\">
                                                <i class=\"zmdi zmdi-account-o\"></i>
                                            </div>
                                            <div class=\"text\">
                                                <h2>";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["usuarios"]) ? $context["usuarios"] : null), "html", null, true);
        echo "</h2>
                                                <span>Usuários</span>
                                            </div>
                                        </div>
                                        <div class=\"overview-chart\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"overview-item overview-item--c2\">
                                    <div class=\"overview__inner\">
                                        <div class=\"overview-box clearfix\">
                                            <div class=\"icon\">
                                                <i class=\"zmdi zmdi-library\"></i>
                                            </div>
                                            <div class=\"text\">
                                                <h2>";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["apresentacoes"]) ? $context["apresentacoes"] : null), "html", null, true);
        echo "</h2>
                                                <span>Apresentações</span>
                                            </div>
                                        </div>
                                        <div class=\"overview-chart\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"overview-item overview-item--c3\">
                                    <div class=\"overview__inner\">
                                        <div class=\"overview-box clearfix\">
                                            <div class=\"icon\">
                                                <i class=\"zmdi zmdi-calendar-note\"></i>
                                            </div>
                                            <div class=\"text\">
                                                <h2>";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["cursos_oficinas"]) ? $context["cursos_oficinas"] : null), "html", null, true);
        echo "</h2>
                                                <span>Mini Cursos e Oficinas</span>
                                            </div>
                                        </div>
                                        <div class=\"overview-chart\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"overview-item overview-item--c4\">
                                    <div class=\"overview__inner\">
                                        <div class=\"overview-box clearfix\">
                                            <div class=\"icon\">
                                                <i class=\"zmdi zmdi-bookmark-outline\"></i>
                                            </div>
                                            <div class=\"text\">
                                                <h2>";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["palestras"]) ? $context["palestras"] : null), "html", null, true);
        echo "</h2>
                                                <span>Palestras</span>
                                            </div>
                                        </div>
                                        <div class=\"overview-chart\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-12\" style=\"height: 200px\">
                        </div>
                    
";
    }

    public function getTemplateName()
    {
        return "admin/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 75,  111 => 58,  91 => 41,  71 => 24,  49 => 4,  46 => 3,  40 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin/index.html", "/var/www/encontros/src/views/admin/index.html");
    }
}
