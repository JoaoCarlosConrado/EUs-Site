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

/* front/edital.html */
class __TwigTemplate_03f067beae8285bc0ba3f9a346dc3ab805c6c81e36d6ea2697f517228cec30ba extends \Twig\Template
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
        $this->parent = $this->loadTemplate("front/base/template-base.html", "front/edital.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Edital";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"pag-noticia\">
        <div class=\"container\" id=\"edital\">
            <div class=\"space-100\"></div>
            <div class=\"text-justify tim-title text-center .text-nowrap\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-xs-12 col-sm-12 text-left\">
                        <h1 class=\"fonttitulo\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edital"]) ? $context["edital"] : null), "nome", []), "html", null, true);
        echo "</h1>
                        <h3 class=\"fontsubtitulo\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edital"]) ? $context["edital"] : null), "tipo", []), "html", null, true);
        echo "</h3>
                        <h5 class=\"esp fontesp\">
                            ";
        // line 13
        echo $this->getAttribute((isset($context["edital"]) ? $context["edital"] : null), "descricao", []);
        echo "
                        </h5>
                        ";
        // line 15
        if ($this->getAttribute((isset($context["edital"]) ? $context["edital"] : null), "arquivo", [])) {
            // line 16
            echo "                        <p><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo "/uploads/editais/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edital"]) ? $context["edital"] : null), "arquivo", []), "html", null, true);
            echo "\">Visualize o edital</a></p>
                        ";
        }
        // line 18
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
        return "front/edital.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 18,  73 => 16,  71 => 15,  66 => 13,  61 => 11,  57 => 10,  49 => 4,  46 => 3,  40 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "front/edital.html", "/var/www/encontros/src/views/front/edital.html");
    }
}
