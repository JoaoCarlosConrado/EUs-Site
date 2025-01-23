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

/* front/manual.html */
class __TwigTemplate_d4fe9e29f9d21003726350990b7ff5f1da2fabd2e40b03cfc2ec8326cf1cfdee extends \Twig\Template
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
        $this->parent = $this->loadTemplate("front/base/template-base.html", "front/manual.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Manual";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"pag-emBreve\">
        <div class=\"container\" id=\"manual\">
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
                                        <h2 class=\"box-title\">Links</h2>
                                        <div class=\"card-left\">
                                            <p class=\"card-block textoPalestra\"><h3 class=\"textoPalestra\">Cronograma das Apresentações</h3></p>
                                            <p class=\"card-block textoPalestra\"><a href=\"http://200.129.62.41/encontros/uploads/editais/Aloca%C3%A7%C3%A3o_Alunos.pdf\">Cronograma por Autor Principal</a></p>
                                            <p class=\"card-block textoPalestra\"><a href=\"http://200.129.62.41/encontros/uploads/editais/Aloca%C3%A7%C3%A3o_Avaliadores.pdf\">Cronograma por Avaliador</a></p>
                                            <br>
                                            <p class=\"card-block textoPalestra\"><h3 class=\"textoPalestra\">Submeta seu Resumo</h3></p>
                                            <p class=\"card-block textoPalestra\"><a href=\"https://drive.google.com/open?id=1utAqvfUjrP8l_VdzyCHeIYo_4DkyzMzj\">Manual para Uso do Guardião</a></p>
                                            <p class=\"card-block textoPalestra\"><a href=\"https://drive.google.com/open?id=1Ali5MAcGIknhsSTxXezyWEWHUw5f1tyk\">Manual para Submissão do Resumo Final</a></p>
                                            <p class=\"card-block textoPalestra\"><a href=\"http://n2s.russas.ufc.br/guardiao/\">Link para o Guardião</a></p>
                                            <p class=\"card-block textoPalestra\"><b>Observações:</b>
                                            <p class=\"card-block textoPalestra\">1. os participantes devem estar atentos aos critérios de avaliação dos resumos, pois estes, para serem aceitos para
                                            apresentação, deverão obter nota igual ou superior a 6,0 pela comissão científica;</p>
                                            <p class=\"card-block textoPalestra\">ou seja, os resumos que forem avaliados com nota abaixo de 6,0 não serão aceitos para apresentação;</p>
                                            <p class=\"card-block textoPalestra\">2. o participante (bolsista ou não) poderá escolher seu tipo de envio, Resumo Simples ou Expandido;</p>
                                            <p class=\"card-block textoPalestra\">3. caso o participante decida reenviar o seu resumo já com aval do orientador, fazendo uma substituição no
                                            sistema, este deverá solicitar novo aval.</p>   
                                        </div>
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
        return "front/manual.html";
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
        return new Source("", "front/manual.html", "/var/www/encontros/src/views/front/manual.html");
    }
}
