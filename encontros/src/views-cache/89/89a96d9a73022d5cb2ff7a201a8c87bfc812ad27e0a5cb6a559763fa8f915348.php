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

/* front/editais.html */
class __TwigTemplate_4db0c1435770840aec15dfd6b6e75ad13b1b9f6af75ac47719d74f8f699122d8 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("front/base/template-base.html", "front/editais.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Editais";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"pag-noticias\">
        <div class=\"container\" id=\"editais\">
            <div class=\"space-30\"></div>
            <div class=\"tim-title text-center\">
                <h1>Editais</h1>
            </div>
            <div class=\"space-30\"></div>
            <div class=\"text-justify tim-title text-center .text-nowrap\">
                <ol>
                    ";
        // line 13
        if ((isset($context["editais"]) ? $context["editais"] : null)) {
            // line 14
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["editais"]) ? $context["editais"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["edital"]) {
                // line 15
                echo "                    <li class=\"link-list__item\">
                        <article>
                            <header class=\"text-left\">
                                <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
                echo "/edital/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["edital"], "id", []), "html", null, true);
                echo "#edital\">
                                <h1 class=\"link-list__title\">";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["edital"], "nome", []), "html", null, true);
                echo "</h1>
                                <h2 class=\"link-list__subtitle\">";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["edital"], "tipo", []), "html", null, true);
                echo "</h2>
                                <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
                echo "/edital/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["edital"], "id", []), "html", null, true);
                echo "#edital\">
                                    <div class=\"text-right color-black\">Ver Edital<i class=\"fa fa-chevron-right\"></i>
                                    </div>
                                </a>
                            </header>
                        </article>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['edital'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                    ";
        } else {
            // line 30
            echo "                    <div class=\"space-30\"></div>
                    <li class=\"link-list__item\">
                        <article>
                            <header class=\"text-left\">
                                <h1 class=\"link-list__title\">Editais em breve!</h1>
                                
                            </header>
                        </article>
                    </li>
                    ";
        }
        // line 40
        echo "                </ol>
            </div>
        </div>
        <nav class=\"paginate\">
            <ul class=\"pagination\">
                ";
        // line 45
        if ((isset($context["paginas"]) ? $context["paginas"] : null)) {
            // line 46
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["paginas"]) ? $context["paginas"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["pag"]) {
                // line 47
                echo "                <li class=\"";
                echo ((($context["pag"] == (isset($context["pagina_atual"]) ? $context["pagina_atual"] : null))) ? ("active") : (""));
                echo "\">
                    <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
                echo "/editais/";
                echo twig_escape_filter($this->env, $context["pag"], "html", null, true);
                echo "#editais\">";
                echo twig_escape_filter($this->env, $context["pag"], "html", null, true);
                echo "</a>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                ";
        }
        // line 52
        echo "            </ul>
        </nav>
        <div class=\"space-30\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "front/editais.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 52,  149 => 51,  136 => 48,  131 => 47,  126 => 46,  124 => 45,  117 => 40,  105 => 30,  102 => 29,  86 => 21,  82 => 20,  78 => 19,  72 => 18,  67 => 15,  62 => 14,  60 => 13,  49 => 4,  46 => 3,  40 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "front/editais.html", "/var/www/encontros/src/views/front/editais.html");
    }
}
