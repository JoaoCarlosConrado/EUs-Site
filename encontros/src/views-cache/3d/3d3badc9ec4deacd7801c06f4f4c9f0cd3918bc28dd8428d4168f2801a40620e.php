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

/* admin/base/template-base.html */
class __TwigTemplate_21e881feffd9738d1e1cbdbc75c1fd41ad22d8697b00570acbf774d37dcac78d extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags-->
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"au theme template\">
    <meta name=\"author\" content=\"Hau Nguyen\">
    <meta name=\"keywords\" content=\"au theme template\">

    <!-- Title Page-->
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo " | Encontros Universitarios</title>

    <!-- Fontfaces CSS-->
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/img/favicon.png\">

    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/css/font-face.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/font-awesome-4.7/css/font-awesome.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/font-awesome-5/css/fontawesome-all.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/mdi-font/css/material-design-iconic-font.min.css\" rel=\"stylesheet\"
        media=\"all\">

    <!-- Bootstrap CSS-->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/bootstrap-4.1/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Vendor CSS-->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/animsition/animsition.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css\" rel=\"stylesheet\"
        media=\"all\">
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/wow/animate.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/css-hamburgers/hamburgers.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/slick/slick.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/select2/select2.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/perfect-scrollbar/perfect-scrollbar.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Main CSS-->
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/css/theme.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/css/admin.css\" rel=\"stylesheet\" media=\"all\">
    <script>BASE = \"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "\";</script>
</head>

    ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "
    <!-- Jquery JS-->
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/jquery-3.2.1.min.js\"></script>
    <!-- Bootstrap JS-->
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/bootstrap-4.1/popper.min.js\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/bootstrap-4.1/bootstrap.min.js\"></script>
    <!-- Vendor JS       -->
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/slick/slick.min.js\">
    </script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/wow/wow.min.js\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/animsition/animsition.min.js\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js\">
    </script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/counter-up/jquery.waypoints.min.js\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/counter-up/jquery.counterup.min.js\">
    </script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/circle-progress/circle-progress.min.js\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/perfect-scrollbar/perfect-scrollbar.js\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/chartjs/Chart.bundle.min.js\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/select2/select2.min.js\"></script>

    <!-- Main JS-->
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/js/main.js\"></script>

    ";
        // line 69
        $this->displayBlock('js', $context, $blocks);
        // line 71
        echo "</body>

</html>
<!-- end document-->";
    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
    }

    // line 43
    public function block_content($context, array $blocks = [])
    {
        // line 44
        echo "    ";
    }

    // line 69
    public function block_js($context, array $blocks = [])
    {
        // line 70
        echo "    ";
    }

    public function getTemplateName()
    {
        return "admin/base/template-base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 70,  219 => 69,  215 => 44,  212 => 43,  207 => 13,  200 => 71,  198 => 69,  193 => 67,  187 => 64,  183 => 63,  179 => 62,  175 => 61,  170 => 59,  166 => 58,  161 => 56,  157 => 55,  153 => 54,  148 => 52,  143 => 50,  139 => 49,  134 => 47,  130 => 45,  128 => 43,  122 => 40,  118 => 39,  114 => 38,  108 => 35,  104 => 34,  100 => 33,  96 => 32,  92 => 31,  87 => 29,  83 => 28,  77 => 25,  70 => 21,  66 => 20,  62 => 19,  58 => 18,  53 => 16,  47 => 13,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin/base/template-base.html", "/var/www/encontros/src/views/admin/base/template-base.html");
    }
}
