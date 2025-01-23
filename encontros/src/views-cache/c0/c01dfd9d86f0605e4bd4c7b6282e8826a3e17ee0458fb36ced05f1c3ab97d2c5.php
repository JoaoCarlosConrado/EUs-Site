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

/* front/base/template-base.html */
class __TwigTemplate_ce13814e54ffd8346d5f2c55b794ff16f7f5ed0b00fc5a72fadc58bb3a22c731 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!doctype html>
<html lang=\"pt-BR\">
<head>
    <meta charset=\"utf-8\" />
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/apple-icon.png\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/favicon.png\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " | Encontros Universitários e Feira das profissões</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name=\"viewport\" content=\"width=device-width\" />
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/bootstrap3/css/bootstrap.css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/css/gsdk.css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/css/demo.css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/css/stilo.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/owlcarousel/assets/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/owlcarousel/assets/owl.theme.default.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/timeline/css/timeline.min.css\">
    <!--Font Awesome-->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/bootstrap3/css/font-awesome.css\" rel=\"stylesheet\">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id=\"navbar-full\">
        <div class=\"container\" id='top'>
            <nav class=\"navbar navbar-ct-blue navbar-transparent navbar-fixed-top\" role=\"navigation\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                            data-target=\"#bs-example-navbar-collapse-1\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <div class=\"logo-container\">
                            <div class=\"logo\">
                                <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/logologobranca.png\"></a> 
                            </div>
                        </div>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav navbar-right justify-content-center\">
                            <li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/\">Início</a></li>
                            <!-- <li class=\"dropdown\">
                                <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Início <b class=\"caret\"></b></a>                            
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/\">Início</a></li>
                                    <li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/#cronograma\">Calendario</a></li>
                                    <li><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/#programacao\">Programação</a></li>
                                    <li><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/#artistica\">Mostra Artística</a></li>
                                </ul>
                            </li> -->
                            <li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/certificados#certificados\">Certificados</a></li>
                            <li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/noticias#noticias\">Notícias</a></li>
                            <li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/editais#editais\">Editais</a></li>
                            <!-- <li><a href=\"/cronogramas\">Cronogramas</a></li> -->
                            <!-- <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Eventos Anteriores <b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">2019</a></li>
                                    <li><a href=\"#\">2018</a></li>
                                    <li><a href=\"#\">2017</a></li>
                                </ul>
                            </li> -->
                            <!-- <li><a href=\"/palestras\">Palestras</a></li>
                            <li><a href=\"/mini_cursos\">Minicursos</a></li>
                            <li><a href=\"/oficinas\">Oficinas</a></li>
                            <li><a href=\"/apresentacoes\">Apresentações</a></li> -->
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div><!--  end container-->
        <div class=\"blurred-container img-src\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"topo\">
                        <div class=\"col-lg-6\">
                            <div class=\"text-center\">
                                <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/logo_EU.png\" alt=\"\" class=\"img-responsive\">
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"text-center\">
                                <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/logo_feira.png\" alt=\"\" class=\"img-responsive\">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 text-center\">
                        <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/manual#manual\" class=\"btn btn-secondary active colorir\" role=\"button\" aria-pressed=\"true\">
                            Cronograma de Apresentações
                        </a>
                    </div>
                    <div class=\"col-lg-6 text-center\">
                        <a href=\"https://forms.gle/fTNSw2qrBvBWyU5x7\" class=\"btn btn-secondary active colorir\" role=\"button\"
                            aria-pressed=\"true\">Inscreva-se</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 106
        $this->displayBlock('content', $context, $blocks);
        // line 108
        echo "    <div class=\"row rodape\">
        <div class=\"container\">
            <div class=\"col-lg-12 col-md-12 col-xs-12 col-sm-12\">
                    <div class=\"col-lg-12 col-md-12 col-xs-12 col-sm-12\">    
                            <div class=\"space-30\"></div>
                            <div class=\"patrocinadores\">
                                <p class=\"texto-patrocinadoes\">
                                    Apoio
                                </p>
                                <div class=\"owl-carousel carousel-rodape\">
                                    <div class=\"panel panel-default\">
                                        <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/CAPES.svg\" alt=\"\" class=\"img-responsive\">
                                    </div>
                                    <div class=\"panel panel-default\">
                                        <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/cnpq.svg\" alt=\"\" class=\"img-responsive\">
                                    </div>
                                    <div class=\"panel panel-default\">
                                        <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/FUNCAP.svg\" alt=\"\" class=\"img-responsive\">
                                    </div>
                                    <div class=\"panel panel-default\">
                                        <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/logoufc.svg\" alt=\"\" class=\"img-responsive\">
                                    </div>
                                    <div class=\"panel panel-default\">
                                        <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/n2s.svg\" alt=\"\" class=\"img-responsive\">
                                    </div>
                                    <div class=\"panel panel-default\">
                                        <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/Ativo 1.svg\" alt=\"\" class=\"img-responsive\">
                                    </div>
                                    <div class=\"panel panel-default\">
                                        <img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/Ativo 2.svg\" alt=\"\" class=\"img-responsive\">
                                    </div>
                                    <div class=\"panel panel-default\">
                                        <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/Ativo 3.svg\" alt=\"\" class=\"img-responsive\">
                                    </div>
                                    <div class=\"panel panel-default\">
                                        <img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/Ativo 4.svg\" alt=\"\" class=\"img-responsive\">
                                    </div>
                                    <div class=\"panel panel-default\">
                                        <img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/Ativo 5.svg\" alt=\"\" class=\"img-responsive\">
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            <div class=\"col-lg-12 col-md-12 col-xs-12 col-sm-12\">
                <div class=\"col-lg-12 col-xs-12 col-md-12 col-sm-12 inf-rodape\">
                    <h5>Universidade Federal do Ceará - Campus de Russas<br/>
                    Rua Felipe Santiago - N° 411, Russas - CE, CEP 62900-000<br/>
                    Telefone: (88) 3411 - 9223 / 9224<br/>
                    Email: encontros.ufcrussas@gmail.com</h5>
                </div>
            </div>
        </div>
        <div class=\"col-md-12 text-center\">
            <div class=\"credits\">
                &copy;
                <span id='ano'></span> Template by <a href=\"http://creative-tim.com\">
                    Creative Tim</a>, feito com <i class=\"fa fa-heart fa-coffee\" alt=\"café\"></i> no N2S.
            </div>
        </div>
    </div>
    <a href=\"#top\" class=\"glyphicon glyphicon-chevron-up cor-seta\"></a>
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/jquery/jquery-1.10.2.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/js/jquery-ui-1.10.4.custom.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/bootstrap3/js/bootstrap.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/js/gsdk-checkbox.js\"></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/js/gsdk-radio.js\"></script>
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/js/gsdk-bootstrapswitch.js\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/js/get-shit-done.js\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/owlcarousel/owl.carousel.min.js\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/timeline/js/timeline.min.js\"></script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/js/myjs.js\"></script>
    ";
        // line 180
        $this->displayBlock('js', $context, $blocks);
        // line 182
        echo "</html>";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
    }

    // line 106
    public function block_content($context, array $blocks = [])
    {
        // line 107
        echo "    ";
    }

    // line 180
    public function block_js($context, array $blocks = [])
    {
        // line 181
        echo "    ";
    }

    public function getTemplateName()
    {
        return "front/base/template-base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 181,  368 => 180,  364 => 107,  361 => 106,  356 => 8,  352 => 182,  350 => 180,  346 => 179,  342 => 178,  338 => 177,  334 => 176,  330 => 175,  326 => 174,  322 => 173,  318 => 172,  314 => 171,  310 => 170,  283 => 146,  277 => 143,  271 => 140,  265 => 137,  259 => 134,  253 => 131,  247 => 128,  241 => 125,  235 => 122,  229 => 119,  216 => 108,  214 => 106,  199 => 94,  189 => 87,  181 => 82,  153 => 57,  149 => 56,  145 => 55,  139 => 52,  135 => 51,  131 => 50,  127 => 49,  122 => 47,  117 => 45,  105 => 38,  83 => 19,  78 => 17,  74 => 16,  70 => 15,  66 => 14,  62 => 13,  58 => 12,  54 => 11,  48 => 8,  43 => 6,  39 => 5,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "front/base/template-base.html", "/var/www/encontros/src/views/front/base/template-base.html");
    }
}
