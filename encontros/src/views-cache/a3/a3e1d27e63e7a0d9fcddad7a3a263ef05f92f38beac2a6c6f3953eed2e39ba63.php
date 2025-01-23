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

/* front/oficinas.html */
class __TwigTemplate_ed8867f5dad7acba1ed24a3615a45654b23ab19ee3a18f87cb4f3f53f8ccc44a extends \Twig\Template
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
        $this->parent = $this->loadTemplate("front/base/template-base.html", "front/oficinas.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Oficinas";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"pag-minicurso\">
        <div class=\"container\" id=\"oficinas\">
            <div class=\"space-100\"></div>
            <div class=\"tim-title text-center\">
                <h1>Oficinas</h1>
            </div>
            <div class=\"space-30\"></div>
            <div class=\"container\">
                    ";
        // line 12
        if ((isset($context["oficinas"]) ? $context["oficinas"] : null)) {
            // line 13
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["oficinas"]) ? $context["oficinas"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["oficina"]) {
                // line 14
                echo "                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"card-base animated bounceInLeft\">
                                <div class=\"card-icon\"><img
                                        src=\"";
                // line 18
                echo twig_escape_filter($this->env, (((null === $this->getAttribute($context["oficina"], "imagem", []))) ? (twig_join_filter([0 => $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), 1 => "/assets/img/pess1.png"])) : (twig_join_filter([0 => $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), 1 => "/uploads/cursos_oficinas/", 2 => $this->getAttribute($context["oficina"], "imagem", [])]))), "html", null, true);
                echo "\"
                                        id=\"widgetCardIcon\" class=\"imagecard\">
                                    <div class=\"card-data widgetCardData\">
                                        <h3>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["oficina"], "titulo", []), "html", null, true);
                echo "</h3>
                                        <div class=\"card-left\">
                                            <p class=\"card-block textoPalestra\"><b>Autor</b>: ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["oficina"], "nome", []), "html", null, true);
                echo "</p>
                                            <p class=\"card-block textoPalestra\"><b>Área de atuação</b>: ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["oficina"], "area", []), "html", null, true);
                echo "</p>
                                            <p class=\"card-block textoPalestra\"><b>Horário</b>: ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["oficina"], "data", []), "html", null, true);
                echo "</p>
                                            <p class=\"card-block textoPalestra\"><b>Sala</b>: ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["oficina"], "sala", []), "html", null, true);
                echo "</p>
                                            <p class=\"card-block textoPalestra\">
                                                <b>Resumo da Oficina:</b>
                                                <div class=\"card-resumo\">
                                                    ";
                // line 30
                echo $this->getAttribute($context["oficina"], "resumo", []);
                echo "
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                    <div class=\"space-30\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oficina'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                    ";
        } else {
            // line 42
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
        // line 54
        echo "                </div>
            <div class=\"space-30\"></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "front/oficinas.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 54,  122 => 42,  119 => 41,  102 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  78 => 21,  72 => 18,  66 => 14,  61 => 13,  59 => 12,  49 => 4,  46 => 3,  40 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "front/oficinas.html", "/var/www/encontros/src/views/front/oficinas.html");
    }
}
