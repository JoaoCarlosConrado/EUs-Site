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

/* front/certificados.html */
class __TwigTemplate_64be2a2c5f8159e5e8628b67d7d2805dea0fe98cb6cd54945b22c34237441aad extends \Twig\Template
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
        $this->parent = $this->loadTemplate("front/base/template-base.html", "front/certificados.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Certificados";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"pag-conheca\">
        <div class=\"container\" id=\"certificados\">
            <div class=\"space-100\"></div>
            <div class=\"tim-title text-center\">
                <h1>Certificados</h1>
            </div>
            <div class=\"space-30\"></div>
            <div class=\"text-justify tim-title .text-nowrap\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"card-base animated bounceInLeft\">
                            <div class=\"card-icon\">
                                <div class=\"card-data widgetCardData\">
                                    <!-- <h2 class=\"box-title\">Em breve!</h2> -->
                                    <p class=\"card-block textoPalestra\">
                                        <h3>
                                            Aviso: Certificados de apresentação serão disponibilizados no site dos <a href=\"http://sysprppg.ufc.br/eu/2019/\">Encontros Universitarios de Fortaleza</a>.
                                        </h3>
                                    </p>
                                    <p class=\"card-block textoPalestra\">
                                        <h3 class=\"card-left textoPalestra\"><a href=\"https://drive.google.com/open?id=1D3z1Hga01KRhPSUU99zL9yzmqY369cxk\">Certificados de Participação nos EU 2019</a></h3>
                                        <h3 class=\"card-left textoPalestra\"><a href=\"https://drive.google.com/open?id=1Il8xN1O4qFV8px02HOF-D4pLNsDzwfzi\">Certificados de Premiação nos EU 2019</a></h3>
                                        <h3 class=\"card-left textoPalestra\"><a href=\"https://drive.google.com/open?id=1_tUw5cWdYgSQbHGQpQ-cJPHmj1oaVYv1\">Certificados dos Minicursos e Oficinas</a></h3>
                                        <h3 class=\"card-left textoPalestra\"><a href=\"https://drive.google.com/open?id=1tMqIZ4CsDDZXlFd-2t7y5O0pzR18wxXC\">Certificados dos Minicursos e Oficinas (Facilitadores)</a></h3>
                                        <h3 class=\"card-left textoPalestra\"><a href=\"https://drive.google.com/open?id=1pnzx_4tOtLKYcJrRh5Gk66_u2dbe_USb\">Certificados da Feira Mix</a></h3>
                                        <h3 class=\"card-left textoPalestra\"><a href=\"https://drive.google.com/open?id=1eTY1pOJeheMww8sYb6MdbzTbEdTpwIAZ\">Certificados da Mostra Artística</a></h3>
                                        <h3 class=\"card-left textoPalestra\"><a href=\"https://drive.google.com/open?id=1yBcVAUIFimxKsApkw0W4rSsPiU91bGal\">Certificados da Feira das Profissões</a></h3>
                                        <h3 class=\"card-left textoPalestra\"><a href=\"https://drive.google.com/open?id=12DJJzjXSxcBPeMVzLghcVR6WwJelkY23\">Certificados da Equipe de Apoio </a></h3>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class=\"space-30\"></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "front/certificados.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  46 => 3,  40 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "front/certificados.html", "/var/www/encontros/src/views/front/certificados.html");
    }
}
