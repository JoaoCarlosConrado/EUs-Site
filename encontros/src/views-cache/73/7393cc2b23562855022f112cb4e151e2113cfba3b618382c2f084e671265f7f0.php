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

/* front/apresentacoes.html */
class __TwigTemplate_fba7ddd8b37114621affa0481e78f41a344ed5eff615d06101177ea94b9dee7c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("front/base/template-base.html", "front/apresentacoes.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Apresentações";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"pag-minicurso\">
        <div class=\"container\" id=\"apresentacoes\">
            <div class=\"space-100\"></div>
            <div class=\"tim-title text-center\">
                <h1>Apresentações</h1>
            </div>
            <div class=\"space-30\"></div>
            <div class=\"container\">
                    ";
        // line 12
        if ((isset($context["apresentacoes"]) ? $context["apresentacoes"] : null)) {
            // line 13
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["apresentacoes"]) ? $context["apresentacoes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["apresentacao"]) {
                // line 14
                echo "                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"card-base animated bounceInLeft\">
                                <div class=\"card-icon\"><img
                                        src=\"";
                // line 18
                echo twig_escape_filter($this->env, (((null === $this->getAttribute($context["apresentacao"], "imagem", []))) ? (twig_join_filter([0 => $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), 1 => "/assets/img/pess1.png"])) : (twig_join_filter([0 => $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), 1 => "/uploads/cursos_oficinas/", 2 => $this->getAttribute($context["apresentacao"], "imagem", [])]))), "html", null, true);
                echo "\"
                                        id=\"widgetCardIcon\" class=\"imagecard\">
                                    <div class=\"card-data widgetCardData\">
                                        <h3>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["apresentacao"], "titulo", []), "html", null, true);
                echo "</h1>
                                            <h2 class=\"box-title\" style=\"color: #2973d4;\"></h2>
                                            <p class=\"card-block textoPalestra\">Autor: ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["apresentacao"], "nome", []), "html", null, true);
                echo "<br \\>
                                                Área de atuação: ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["apresentacao"], "area", []), "html", null, true);
                echo "<br \\>
                                                Resumo da palestra: ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["apresentacao"], "resumo", []), "html", null, true);
                echo "<br \\>
                                                Horário: ";
                // line 26
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["apresentacao"], "data", []), "d/m/Y"), "html", null, true);
                echo " as ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["apresentacao"], "hora", []), "H:i"), "html", null, true);
                echo "<br>
                                                Sala: ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["apresentacao"], "sala", []), "html", null, true);
                echo "</p>
                                    </div>
                                    <div class=\"space-30\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['apresentacao'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                    ";
        } else {
            // line 36
            echo "                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"card-base animated bounceInLeft\">
                                <div class=\"card-icon\">
                                    <div class=\"card-data widgetCardData\">
                                        <h2 class=\"box-title\">Em breve!</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 48
        echo "                </div>
            <div class=\"space-30\"></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "front/apresentacoes.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 48,  118 => 36,  115 => 35,  101 => 27,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  78 => 21,  72 => 18,  66 => 14,  61 => 13,  59 => 12,  49 => 4,  46 => 3,  40 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "front/apresentacoes.html", "/var/www/encontros/src/views/front/apresentacoes.html");
    }
}
