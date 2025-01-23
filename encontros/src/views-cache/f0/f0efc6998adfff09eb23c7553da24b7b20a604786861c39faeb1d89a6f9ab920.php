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

/* front/noticias.html */
class __TwigTemplate_fb06bc1c08e7b2de0630ca0657af21d7c4691ab092fd27f92ca3c1e3c2706503 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("front/base/template-base.html", "front/noticias.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Noticias";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"pag-noticias\">
        <div class=\"container\" id=\"noticias\">
            <div class=\"space-30\"></div>
            <div class=\"tim-title text-center\">
                <h1>Notícias</h1>
            </div>
            <div class=\"text-justify tim-title text-center .text-nowrap\">
                <ol>
                    ";
        // line 12
        if ((isset($context["noticias"]) ? $context["noticias"] : null)) {
            // line 13
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["noticias"]) ? $context["noticias"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
                // line 14
                echo "                    <li class=\"link-list__item\">
                        <article>
                            <header class=\"text-left\">
                                <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
                echo "/noticia/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "id", []), "html", null, true);
                echo "\">
                                <h1 class=\"link-list__title\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "titulo", []), "html", null, true);
                echo "</h1>
                                <h2 class=\"link-list__subtitle\">";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "subtitulo", []), "html", null, true);
                echo "</h2>
                                <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
                echo "/noticia/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "id", []), "html", null, true);
                echo "\">
                                    <div class=\"text-right color-black\">leia mais<i class=\"fa fa-chevron-right\"></i>
                                    </div>
                                </a>
                            </header>
                        </article>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                    ";
        } else {
            // line 29
            echo "                    <div class=\"space-30\"></div>
                    <li class=\"link-list__item\">
                        <article>
                            <header class=\"text-left\">
                                <h1 class=\"link-list__title\">Noticias em breve!</h1>
                            </header>
                        </article>
                    </li>
                    ";
        }
        // line 38
        echo "                </ol>
            </div>
        </div>
        <nav class=\"paginate\">
            <ul class=\"pagination\">
                ";
        // line 43
        if ((isset($context["paginas"]) ? $context["paginas"] : null)) {
            // line 44
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["paginas"]) ? $context["paginas"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["pag"]) {
                // line 45
                echo "                <li class=\"";
                echo ((($context["pag"] == (isset($context["pagina_atual"]) ? $context["pagina_atual"] : null))) ? ("active") : (""));
                echo "\">
                    <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
                echo "/noticias/";
                echo twig_escape_filter($this->env, $context["pag"], "html", null, true);
                echo "#noticias\">";
                echo twig_escape_filter($this->env, $context["pag"], "html", null, true);
                echo "</a>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                ";
        }
        // line 50
        echo "            </ul>
        </nav>
        <div class=\"space-30\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "front/noticias.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 50,  147 => 49,  134 => 46,  129 => 45,  124 => 44,  122 => 43,  115 => 38,  104 => 29,  101 => 28,  85 => 20,  81 => 19,  77 => 18,  71 => 17,  66 => 14,  61 => 13,  59 => 12,  49 => 4,  46 => 3,  40 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "front/noticias.html", "/var/www/encontros/src/views/front/noticias.html");
    }
}
