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

/* front/palestras.html */
class __TwigTemplate_571899ffe65fcc835be5f901e82e740ef5ddaac565d933f99d8819483dfff763 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("front/base/template-base.html", "front/palestras.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Palestras";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"pag-palestra\">
        <div class=\"container\" id=\"palestras\">
            <div class=\"space-100\"></div>
            <div class=\"tim-title text-center\">
                <h1>Palestras</h1>
            </div>
            <div class=\"space-30\"></div>
                <div class=\"container\">
                    ";
        // line 12
        if ((isset($context["palestras"]) ? $context["palestras"] : null)) {
            // line 13
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["palestras"]) ? $context["palestras"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["palestra"]) {
                // line 14
                echo "                    <div class=\"row\">
                        <div class = \"col-md-12\">
                            <div class=\"card-base animated bounceInLeft\">
                                <div class=\"card-icon\"><img src=\"";
                // line 17
                echo twig_escape_filter($this->env, (((null === $this->getAttribute($context["palestra"], "imagem", []))) ? (twig_join_filter([0 => $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), 1 => "/assets/img/pess1.png"])) : (twig_join_filter([0 => $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), 1 => "/uploads/palestras/", 2 => $this->getAttribute($context["palestra"], "imagem", [])]))), "html", null, true);
                echo "\" id=\"widgetCardIcon\" class=\"imagecard\">
                                    <div class=\"card-data widgetCardData\">
                                        <h3>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["palestra"], "titulo", []), "html", null, true);
                echo "</h3>
                                        <div class=\"card-left\">
                                            <p class=\"card-block textoPalestra\"><b>Autor</b>: ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["palestra"], "nome", []), "html", null, true);
                echo "</p>
                                            <p class=\"card-block textoPalestra\"><b>Área de atuação</b>: ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["palestra"], "area", []), "html", null, true);
                echo "</p>
                                            <p class=\"card-block textoPalestra\"><b>Horário</b>: ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["palestra"], "data", []), "html", null, true);
                echo "</p>
                                            <p class=\"card-block textoPalestra\"><b>Sala</b>: ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["palestra"], "sala", []), "html", null, true);
                echo "</p>
                                            <p class=\"card-block textoPalestra\">
                                                <b>Resumo da palestra:</b>
                                                <div class=\"card-resumo\">
                                                    ";
                // line 28
                echo $this->getAttribute($context["palestra"], "resumo", []);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['palestra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                    ";
        } else {
            // line 40
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
        // line 52
        echo "                </div>
            <div class=\"space-30\"></div>
            
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "front/palestras.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 52,  120 => 40,  117 => 39,  100 => 28,  93 => 24,  89 => 23,  85 => 22,  81 => 21,  76 => 19,  71 => 17,  66 => 14,  61 => 13,  59 => 12,  49 => 4,  46 => 3,  40 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "front/palestras.html", "/var/www/encontros/src/views/front/palestras.html");
    }
}
