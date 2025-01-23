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

/* admin/noticias-modificacoes.html */
class __TwigTemplate_77f4a9302ec41bc5103ee397ef49c043165fa1ce62c5ae38eb9b932c30982d6b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'page' => [$this, 'block_page'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base/template-base-dashboard.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("admin/base/template-base-dashboard.html", "admin/noticias-modificacoes.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : null), "html", null, true);
        echo " Noticias";
    }

    // line 3
    public function block_page($context, array $blocks = [])
    {
        // line 4
        echo "            <!-- MAIN CONTENT-->
            <div class=\"main-content\">
                <div class=\"section__content section__content--p30\">
                    <div class=\"col-lg-12\">
                        <form method=\"POST\" enctype=\"multipart/form-data\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <strong>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : null), "html", null, true);
        echo " Noticias</strong>
                            </div>
                            <div class=\"card-body card-block\">
                                ";
        // line 14
        if ((isset($context["mensagens"]) ? $context["mensagens"] : null)) {
            // line 15
            echo "                                <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                                    <ul>
                                        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mensagens"]) ? $context["mensagens"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 18
                echo "                                        <li>";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                                    </ul>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                </div>
                                ";
        }
        // line 26
        echo "                                <div class=\"form-group\">
                                    <label for=\"titulo\" class=\" form-control-label\">Titulo</label>
                                    <input type=\"text\" id=\"titulo\" name='titulo' placeholder=\"Digite o Titulo da Noticia\" class=\"form-control\" value='";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "titulo", []), "html", null, true);
        echo "'>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"subtitulo\" class=\" form-control-label\">Sub Titulo</label>
                                    <input type=\"text\" id=\"subtitulo\" name='subtitulo' placeholder=\"Digite o Sub Titulo da Noticia\" class=\"form-control\" value='";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "subtitulo", []), "html", null, true);
        echo "'>
                                </div>
                                ";
        // line 34
        if ($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "imagem", [])) {
            // line 35
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo "/uploads/noticias/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "imagem", []), "html", null, true);
            echo "\" style=\"width: 50%\">
                                ";
        }
        // line 37
        echo "                                <div class=\"form-group\">
                                    <label for=\"imagem\" class=\" form-control-label\">Imagem</label>
                                    <input type=\"file\" id=\"imagem\" name=\"imagem\" class=\"form-control-file\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"conteudo\" class=\" form-control-label\">Conteúdo</label>
                                    <textarea name=\"conteudo\" id=\"conteudo\" rows=\"5\" placeholder=\"Digite o Conteúdo da Noticia...\" class=\"form-control\">";
        // line 43
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "conteudo", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "conteudo", []), "")) : ("")), "html", null, true);
        echo "</textarea>
                                </div>

                            </div>
                            <div class=\"card-footer\">
                                <button type=\"submit\" name='enviar' value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "id", []), "html", null, true);
        echo "\" class=\"btn btn-success btn-sm\">
                                    <i class=\"fa fa-dot-circle-o\"></i> ";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : null), "html", null, true);
        echo "
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
";
    }

    // line 56
    public function block_js($context, array $blocks = [])
    {
        // line 57
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/ckeditor/ckeditor.js\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/ckeditor/translations/pt-br.js\"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#conteudo'), {
                language: 'pt-br'
            })
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
";
    }

    public function getTemplateName()
    {
        return "admin/noticias-modificacoes.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 58,  153 => 57,  150 => 56,  139 => 49,  135 => 48,  127 => 43,  119 => 37,  111 => 35,  109 => 34,  104 => 32,  97 => 28,  93 => 26,  85 => 20,  76 => 18,  72 => 17,  68 => 15,  66 => 14,  60 => 11,  51 => 4,  48 => 3,  41 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin/noticias-modificacoes.html", "/var/www/encontros/src/views/admin/noticias-modificacoes.html");
    }
}
