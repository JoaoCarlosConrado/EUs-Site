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

/* front/noticia.html */
class __TwigTemplate_83933804e13ca874b342c02126e35382b3f512eb2dd30ebe16b6d6a61b9f7266 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front/base/template-base.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("front/base/template-base.html", "front/noticia.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Noticia";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"pag-noticias\">
        <div class=\"container\" id=\"noticia\">
            <div class=\"space-30\"></div>
            <div class=\"text-justify tim-title text-center .text-nowrap\">
                <div class=\"row\">
                    <div class=\"col-lg-9 col-md-9 col-xs-12 col-sm-12 text-left\">
                        <h1 class=\"fonttitulo\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "titulo", []), "html", null, true);
        echo "</h1>
                        <h3 class=\"fontsubtitulo\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "subtitulo", []), "html", null, true);
        echo "</h3>
                        <h5 class=\"esp fontesp\">";
        // line 12
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFilter('data')->getCallable(), [$this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "data", []), "l"])), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('data')->getCallable(), [$this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "data", []), "d"]), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFilter('data')->getCallable(), [$this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "data", []), "F"])), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('data')->getCallable(), [$this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "data", []), "Y"]), "html", null, true);
        echo ", às ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('data')->getCallable(), [$this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "hora", []), "H:i"]), "html", null, true);
        echo "</h5>
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, (((null === $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "imagem", []))) ? (twig_join_filter([0 => $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), 1 => "/assets/img/tesimg.png"])) : (twig_join_filter([0 => $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), 1 => "/uploads/noticias/", 2 => $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "imagem", [])]))), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
                        <h5 class=\"esp fontesp\">
                            ";
        // line 15
        echo $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "conteudo", []);
        echo "
                        </h5>
                    </div>
                    <div class=\"col-lg-3 col-md-3 col-xs-12 col-sm-12 text-left\">
                        <p class=\"row titNot\">Últimas notícias</p>
                        <hr/>
                        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["noticias"]) ? $context["noticias"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["noti"]) {
            // line 22
            echo "                        <!--noticia-->
                        <div class=\"panel panel-default\">
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo "/noticia/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["noti"], "id", []), "html", null, true);
            echo "\">
                            <div class=\"panel-body\"><img src=\"";
            // line 25
            echo twig_escape_filter($this->env, (((null === $this->getAttribute($context["noti"], "imagem", []))) ? (twig_join_filter([0 => $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), 1 => "/assets/img/tesimg.png"])) : (twig_join_filter([0 => $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), 1 => "/uploads/noticias/", 2 => $this->getAttribute($context["noti"], "imagem", [])]))), "html", null, true);
            echo "\" alt=\"\" class=\"img-responsive\"></div>
                            <div class=\"panel-body\"><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo "/noticia/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["noti"], "id", []), "html", null, true);
            echo "#noticia\"><h4 class=\"titulo-noticia center-block text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["noti"], "titulo", []), "html", null, true);
            echo "</h4></a></div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noti'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </div>
                </div>
            </div>
            <div class=\"space\"></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "front/noticia.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 29,  109 => 26,  105 => 25,  99 => 24,  95 => 22,  91 => 21,  82 => 15,  77 => 13,  65 => 12,  61 => 11,  57 => 10,  49 => 4,  46 => 3,  40 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "front/noticia.html", "/var/www/encontros/src/views/front/noticia.html");
    }
}
