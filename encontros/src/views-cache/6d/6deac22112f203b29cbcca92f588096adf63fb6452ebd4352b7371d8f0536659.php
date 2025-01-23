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

/* front/index.html */
class __TwigTemplate_0adc2f947aa53ad9330ddf0485e58edd8e254505754925d39f3623108c4baba5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front/base/template-base.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("front/base/template-base.html", "front/index.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Inicio";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"container\">
        ";
        // line 5
        if ((isset($context["noticias"]) ? $context["noticias"] : null)) {
            // line 6
            echo "        <div class=\"space-30\"></div>
        <div class=\"row\">
            <div class=\"col-lg-1 hidden-xs hidden-sm hidden-md esp-sup\">
                <button type=\"button\" role=\"presentation\"
                    class=\"glyphicon glyphicon-chevron-left btn go go-left\">
                </button>
            </div>
            <div class=\"col-lg-10\">
                <div class=\"owl-carousel carousel-noticias\">
                    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["noticias"]) ? $context["noticias"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
                // line 16
                echo "                    <div class=\"panel panel-default\">
                        <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
                echo "/noticia/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "id", []), "html", null, true);
                echo "#noticia\">
                        <div class=\"panel-heading\">
                            <img src=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_join_filter([0 => $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), 1 => "/assets/img/NOTICIAS.svg"]), "html", null, true);
                echo "\" alt=\"\" class=\"img-responsive\">
                        </div>
                        <div class=\"panel-body\">
                            <h5 class=\"titulo-noticia center-block text-center\">";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "titulo", []), "html", null, true);
                echo "</h5>
                        </div>
                        </a>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </div>
            </div>
            <div class=\"col-lg-1 hidden-xs hidden-sm hidden-md esp-sup\">
                <button type=\"button\" role=\"presentation\"
                    class=\"glyphicon glyphicon-chevron-right btn btn-default go go-right\">
                </button>
            </div>
        </div>
        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo "/noticias#noticias\">
            <div class=\"text-right mais\">Ver todas as notícias<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>
            </div>
        </a>
        ";
        } else {
            // line 40
            echo "        <div class=\"space\"></div>
        <div class=\"text-center\">
            <h3>Não há Noticias!</h3>
        </div>
        <div class=\"space\"></div>
        ";
        }
        // line 46
        echo "    </div>
    <div class=\"intro\" id=\"encontros\">
        <div class=\"container\">
            <div class=\"space-100\"></div>
            <div class=\"tim-title text-center\">
                <h1>Sobre o evento</h1>
            </div>
            <div class=\"text-justify tim-title text-center .text-nowrap\">
                <p class=\"testantotesto\">Os Encontros Universitários (EU) e a Feira de Profissões (FP) do 
                    Campus da UFC de Russas são anualmente realizados no Campus da UFC na cidade de Russas, 
                    Estado do Ceará.  A cada ano, a organização dos eventos fica a cargo de uma comissão que 
                    é nomeada pela própria direção do Campus.  Em 2019, os dois eventos acontecerão  entre os dias 
                    06 e 08 de novembro e terá como tema  “da Universidade para o mercado de trabalho: ações de inovação
                    e empreendedorismo”.  Os Encontros possuem as seguintes modalidades: Iniciação Científica, Iniciação Acadêmica,
                    Projetos de Extensão, Aprendizagem Cooperativa, Apoio à Projetos de Graduação, Iniciação à Docência e Práticas Docentes no Ensino Superior.
                </p>
            </div>
            <div class=\"space\"></div>
        </div>
    </div>
    <div class=\"objetivos\" id=\"objetivos\">
        <div class=\"container\">
            <div class=\"space\"></div>
            <div class=\"tim-title text-center\">
                <h1>Objetivos</h1>
            </div>
            <div class=\"text-justify tim-title text-center .text-nowrap\">
                <p class=\"testantotesto\">
                        Ao longo dos últimos anos, a tecnologia tem sido uma importante 
                        aliada no desenvolvimento de grandes negócios, tendo possibilitado 
                        a criação e evolução de empresas startups, que são empresas de baixo 
                        custo que buscam encontrar soluções para diversos problemas práticos 
                        em diversas áreas. Assim, os Encontros Universitários tem como objetivo 
                        promover a troca de experiências entre os estudantes, vivenciadas em atividades 
                        de ensino, pesquisa e extensão, favorecendo, assim, a criação de novas ideias e, 
                        ao mesmo tempo, promovendo as ideias já implementadas.
                </p>
            </div>
            <div class=\"space\"></div>
        </div>
    </div>
    <!--coisa nova aqui-->
    <div class=\"missao\" id=\"missao\">
        <div class=\"container\">
            <div class=\"space\"></div>
            <div class=\"tim-title text-center\">
                <h1>Missão</h1>
            </div>
            <div class=\"text-justify tim-title text-center .text-nowrap\">
                <p class=\"testantotesto\">
                    Promover a troca de experiências entre estudantes, principalmente as vivenciadas em atividades de ensino, pesquisa e extensão.
                </p>
            </div>
            <div class=\"space\"></div>
        </div>
    </div>
    <div class=\"visao\" id=\"encontros\">
        <div class=\"container\">
            <div class=\"space-100\"></div>
            <div class=\"tim-title text-center\">
                <h1>Visão</h1>
            </div>
            <div class=\"text-justify tim-title text-center .text-nowrap\">
                <p class=\"testantotesto\">
                    Favorecer o desenvolvimento de novas ideias que resolvam problemas da sociedade e propiciem o desenvolvimento regional e, ao mesmo tempo, divulgar as ações propostas e desenvolvidas pela comunidade acadêmica.
                </p>
            </div>
            <div class=\"space\"></div>
        </div>
    </div>
    <div class=\"valores\" id=\"encontros\">
            <div class=\"container\">
                <div class=\"space\"></div>
                <div class=\"tim-title text-center\">
                    <h1>Valores</h1>
                </div>
                <div class=\"text-justify tim-title text-center .text-nowrap\">
                    <p class=\"testantotesto\">
                        Comprometimento com o desenvolvimento tecnológico e a aprendizagem;
                        Inovação, pois é inovando que se promove soluções que atendam às necessidades da  sociedade atual, a qual está em constante transformação;
                        Sustentabilidade, as soluções propostas para a sociedade atual não podem comprometer o desenvolvimento de soluções para problemas da sociedade no futuro;
                        Acolhimento, inclusão e respeito aos seres vivos e à natureza
                    </p>
                </div>
                <div class=\"space\"></div>
            </div>
    </div>
    <!--coisa nova aqui-->
    <div class=\"cronograma\" id=\"cronograma\">
        <div class=\"space-30\"></div>
        <div class=\"container\">
            <div class=\"tim-title text-center\">
                <h1>Calendário</h1>
            </div>
            <div class=\"timeline\">
                <div class=\"timeline__wrap\">
                    <div class=\"timeline__items\">
                        ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calendario"]) ? $context["calendario"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dia"]) {
            // line 144
            echo "                        <div class=\"timeline__item\">
                            <div class=\"timeline__content\">
                                <h2 class=\"azul-timeline\">";
            // line 146
            echo $this->getAttribute($context["dia"], "data", []);
            echo "</h2>
                                <p>";
            // line 147
            echo $this->getAttribute($context["dia"], "descricao", []);
            echo "</p>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                    </div>
                </div>
            </div>
        </div>
        <div class=\"space-30\"></div>
    </div>
    <div class=\"programacao\" id=\"programacao\">
        <div class=\"container\">
            <div class=\"space\"></div>
            <div class=\"tim-title text-center cor-tit\">
                <h1>Programação</h1>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-12 col-xs-12 col-sm-12\">
                    <div class=\"caixa\">
                        <a href=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/apresentacoes#apresentacoes\">
                        <h2 class=\"corTituloCard\">Apresentações</h2>
                        <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/presentation.png\" alt=\"\" class=\"img-responsive imgCardAti\">
                        <a href=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/apresentacoes#apresentacoes\" class=\"btn btn-secondary active color-but botaoposicao\" role=\"button\" aria-pressed=\"true\">Saiba mais</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-12 col-xs-12 col-sm-12\">
                    <div class=\"caixa\">
                        <a href=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/mini_cursos#mini_cursos\">
                        <h2 class=\"corTituloCard\">Minicursos</h2>
                        <img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/training.png\" alt=\"\" class=\"img-responsive imgCardAti\">
                        <a href=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/mini_cursos#mini_cursos\" class=\"btn btn-secondary active color-but botaoposicao\" role=\"button\" aria-pressed=\"true\">Saiba mais</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-xs-12 col-md-12 col-sm-12\">
                    <div class=\"caixa\">
                        <a href=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/oficinas#oficinas\">
                        <h2 class=\"corTituloCard\">Oficinas</h2>
                        <img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/elearning.png\" alt=\"\" class=\"img-responsive imgCardAti\">
                        <a href=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/oficinas#oficinas\" class=\"btn btn-secondary active color-but botaoposicao\" role=\"button\" aria-pressed=\"true\">Saiba mais</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-xs-12 col-md-12 col-sm-12\">
                    <div class=\"caixa\">
                        <a href=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/palestras#palestras\">
                        <h2 class=\"corTituloCard\">Palestras</h2>
                        <img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/lecture.png\" alt=\"\" class=\"img-responsive imgCardAti\">
                        <a href=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/palestras#palestras\" class=\"btn btn-secondary active color-but botaoposicao\" role=\"button\" aria-pressed=\"true\">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class=\"space\"></div>
        </div>
    </div>
    <div class=\"artistica\" id=\"artistica\">
        <div class=\"container\">
            <div class=\"space\"></div>
            <div class=\"tim-title text-center cor-tit\">
                <h1>Mostra Artística</h1>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-12 col-xs-12 col-sm-12\">
                    <div class=\"caixa\">
                        <a href=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/palco_mix#palco_mix\">
                        <h2 class=\"corTituloCard\">Shows</h2>
                        <img src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/palcoMix.png\" alt=\"\" class=\"img-responsive imgCardAti\">
                        <a href=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/palco_mix#palco_mix\" class=\"btn btn-secondary active color-but botaoposicao\" role=\"button\" aria-pressed=\"true\">Saiba mais</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-12 col-xs-12 col-sm-12\">
                    <div class=\"caixa\">
                        <a href=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/mostra_audiovisual#mostra_audiovisual\">
                        <h2 class=\"corTituloCard\">Sessão Pipoca</h2>
                        <img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/mostraVisual.png\" alt=\"\" class=\"img-responsive imgCardMostra\">
                        <a href=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/mostra_audiovisual#mostra_audiovisual\" class=\"btn btn-secondary active color-but esp-but-mostra\" role=\"button\" aria-pressed=\"true\">Saiba mais</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-xs-12 col-md-12 col-sm-12\">
                    <div class=\"caixa\">
                        <a href=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/feira_de_artesanato#feira_de_artesanato\">
                        <h2 class=\"corTituloCard\">Espaço Pet</h2>
                        <img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/pet.png\" alt=\"\" class=\"img-responsive imgCardMostra\">
                        <a href=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/feira_de_artesanato#feira_de_artesanato\" class=\"btn btn-secondary active color-but esp-but-mostra\" role=\"button\" aria-pressed=\"true\">Saiba mais</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-xs-12 col-md-12 col-sm-12\">
                    <div class=\"caixa\">
                        <a href=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/espaco_gastronomico#espaco_gastronomico\">
                        <h2 class=\"corTituloCard\">Feira Mix</h2>
                        <img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/feiraArtesanato.png\" alt=\"\" class=\"img-responsive imgCardMostra\">
                        <a href=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/espaco_gastronomico#espaco_gastronomico\" class=\"btn btn-secondary active color-but esp-but-mostra\" role=\"button\" aria-pressed=\"true\">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class=\"space\"></div>
        </div>
    </div>
    <div id=\"carousel\">
        <div id=\"carousel-example-generic\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"3\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"4\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"5\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"6\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"7\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"8\"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class=\"carousel-inner inteiro\">
                <div class=\"item active\">
                    <img src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/img1.jpg\" class=\"img-fluid my-responsive\" alt=\"Awesome Image\">
                </div>
                <div class=\"item\">
                    <img src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/img2.jpg\" class=\"img-fluid my-responsive\" alt=\"Awesome Image\">
                </div>
                <div class=\"item\">
                    <img src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/img3.jpg\" class=\"img-fluid my-responsive\" alt=\"Awesome Image\">
                </div>
                <div class=\"item\">
                    <img src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/img4.jpg\" class=\"img-fluid my-responsive\" alt=\"Awesome Image\">
                </div>
                <div class=\"item\">
                    <img src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/img5.jpg\" class=\"img-fluid my-responsive\" alt=\"Awesome Image\">
                </div>
                <div class=\"item\">
                    <img src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/img6.jpg\" class=\"img-fluid my-responsive\" alt=\"Awesome Image\">
                </div>
                <div class=\"item\">
                    <img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/img7.jpg\" class=\"img-fluid my-responsive\" alt=\"Awesome Image\">
                </div>
                <div class=\"item\">
                    <img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/img8.jpg\" class=\"img-fluid my-responsive\" alt=\"Awesome Image\">
                </div>
            </div>
            <!-- Controls -->
            <a class=\"left carousel-control\" data-target=\"#carousel-example-generic\" data-slide=\"prev\">
                <span class=\"fa fa-angle-left fa-4x\"></span>
            </a>
            <a class=\"right carousel-control\" data-target=\"#carousel-example-generic\" data-slide=\"next\">
                <span class=\"fa fa-angle-right fa-4x\"></span>
            </a>
        </div>
    </div> <!-- end carousel -->
    ";
    }

    // line 294
    public function block_js($context, array $blocks = [])
    {
        // line 295
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/js/inicio.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "front/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 295,  486 => 294,  469 => 281,  463 => 278,  457 => 275,  451 => 272,  445 => 269,  439 => 266,  433 => 263,  427 => 260,  400 => 236,  396 => 235,  391 => 233,  383 => 228,  379 => 227,  374 => 225,  366 => 220,  362 => 219,  357 => 217,  349 => 212,  345 => 211,  340 => 209,  321 => 193,  317 => 192,  312 => 190,  304 => 185,  300 => 184,  295 => 182,  287 => 177,  283 => 176,  278 => 174,  270 => 169,  266 => 168,  261 => 166,  244 => 151,  234 => 147,  230 => 146,  226 => 144,  222 => 143,  123 => 46,  115 => 40,  107 => 35,  97 => 27,  86 => 22,  80 => 19,  73 => 17,  70 => 16,  66 => 15,  55 => 6,  53 => 5,  50 => 4,  47 => 3,  41 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "front/index.html", "/var/www/encontros/src/views/front/index.html");
    }
}
