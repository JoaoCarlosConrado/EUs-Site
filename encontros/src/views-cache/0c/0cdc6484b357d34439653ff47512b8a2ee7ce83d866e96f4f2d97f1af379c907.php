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

/* admin/base/sidebar.html */
class __TwigTemplate_b80ebe75f9694e35749b99059f90039ec94893d19e578955962b93c5f3b13f38 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "                        <li class=\"\">
                            <a class=\"js-arrow\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/admin/dashboard\">
                                <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>
                        </li>
                        ";
        // line 5
        if ((call_user_func_array($this->env->getFilter('session')->getCallable(), ["tipo"]) == 1)) {
            // line 6
            echo "                        <li>
                            <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo "/admin/usuarios\">
                                <i class=\"fas fa-users\"></i>Usuários
                            </a>
                        </li>
                        ";
        }
        // line 12
        echo "                        <li>
                            <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/admin/areas\">
                                <i class=\"fas fa-tags \"></i>Áreas
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/admin/noticias\">
                                <i class=\"fas fa-envelope\"></i>Noticias
                            </a>
                        </li>
                        ";
        // line 22
        if ((call_user_func_array($this->env->getFilter('session')->getCallable(), ["tipo"]) <= 2)) {
            // line 23
            echo "                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo "/admin/editais\">
                                <i class=\"fas fa-file-alt\"></i>Editais
                            </a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo "/admin/cronogramas\">
                                <i class=\"fas fa-calendar-alt\"></i>Cronogramas
                            </a>
                        </li>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo "/admin/calendario\">
                                <i class=\"fas fa-calendar-alt\"></i>Calendario
                            </a>
                        </li>
                        ";
        }
        // line 39
        echo "                        <li>
                            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/admin/apresentacoes\">
                                <i class=\"fas fa-book\"></i>Apresentações
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/admin/cursos_oficinas\">
                                <i class=\"fas fa-calendar\"></i>Mini Cursos e Oficinas
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/admin/palestras\">
                                <i class=\"fas fa-bookmark\"></i>Palestras
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/admin/artistico\">
                                <i class=\"fas fa-archive\"></i>Mostra Artística
                            </a>
                        </li>
                        ";
        // line 59
        if ((call_user_func_array($this->env->getFilter('session')->getCallable(), ["tipo"]) == 1)) {
            // line 60
            echo "                        <li>
                            <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo "/admin/anos\">
                                <i class=\"fas fa-calendar-check-o \"></i>Anos
                            </a>
                        </li>
                        ";
        }
    }

    public function getTemplateName()
    {
        return "admin/base/sidebar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 61,  135 => 60,  133 => 59,  126 => 55,  118 => 50,  110 => 45,  102 => 40,  99 => 39,  91 => 34,  83 => 29,  75 => 24,  72 => 23,  70 => 22,  63 => 18,  55 => 13,  52 => 12,  44 => 7,  41 => 6,  39 => 5,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin/base/sidebar.html", "/var/www/encontros/src/views/admin/base/sidebar.html");
    }
}
