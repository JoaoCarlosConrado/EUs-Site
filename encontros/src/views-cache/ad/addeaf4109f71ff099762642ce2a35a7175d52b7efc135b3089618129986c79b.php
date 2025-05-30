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

/* front/emBreve.html */
class __TwigTemplate_666d022c1f0801289db70d6c6d2983977e87fddda5dc0fe9c404bba7845650ca extends \Twig\Template
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
        $this->parent = $this->loadTemplate("front/base/template-base.html", "front/emBreve.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Em Breve";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"pag-emBreve\">
        <div class=\"container\" id=\"embreve\">
            <div class=\"space\"></div>
            <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"card-base animated bounceInLeft\">
                                <div class=\"card-icon\">
                                    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/imgconstrucao.png\"  id=\"widgetCardIcon\" class=\"imagecard\">
                                    <div class=\"card-data widgetCardData\">
                                        <h2 class=\"box-title\">Em breve</h2>
                                    </div>
                                </div>
                            </div>
                        </div>      
                    </div>
                </div>
            <div class=\"space\"></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "front/emBreve.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  49 => 4,  46 => 3,  40 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "front/emBreve.html", "/var/www/encontros/src/views/front/emBreve.html");
    }
}
