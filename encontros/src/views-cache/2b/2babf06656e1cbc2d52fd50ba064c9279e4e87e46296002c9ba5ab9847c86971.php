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

/* admin/login.html */
class __TwigTemplate_96edc9f96e4b0f19240cddf1e759680c1669a2a6cfc0197de5e0b51698e83234 extends \Twig\Template
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
        return "admin/base/template-base.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("admin/base/template-base.html", "admin/login.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Login";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "<body class=\"animsition page-content--bge5\">
    <div class=\"page-wrapper\">
        <div class=\"container\">
            <div class=\"login-wrap\">
                <div class=\"login-content\">
                    <div class=\"login-logo\">
                        <a href=\"#\">
                            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/logo_EU_azul.png\" class='img-fluid' alt=\"CoolAdmin\">
                        </a>
                    </div>
                    <div class=\"login-form\">
                        <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/admin\" method=\"post\">
                            <div class=\"form-group\">
                                <label>Email</label>
                                <input class=\"au-input au-input--full\" type=\"email\" name=\"email\" placeholder=\"Email\">
                            </div>
                            <div class=\"form-group\">
                                <label>Senha</label>
                                <input class=\"au-input au-input--full\" type=\"password\" name=\"password\" placeholder=\"Senha\">
                            </div>
                            <button class=\"au-btn au-btn--block au-btn--green m-b-20\" type=\"submit\">Entrar</button>
                        </form>
                        <!-- <div class=\"register-link\">
                            <p>
                                <a href=\"#\">Esqueceu a Senha?</a>
                            </p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  58 => 11,  49 => 4,  46 => 3,  40 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin/login.html", "/var/www/encontros/src/views/admin/login.html");
    }
}
