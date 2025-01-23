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

/* admin/areas.html */
class __TwigTemplate_3717ba3130038ee8eb0f0b3c0113a96520b6377f97b33c3445fc8e819d15102f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("admin/base/template-base-dashboard.html", "admin/areas.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Áreas";
    }

    // line 3
    public function block_page($context, array $blocks = [])
    {
        // line 4
        echo "            <!-- MAIN CONTENT-->
            <div class=\"main-content\">
                <div class=\"section__content section__content--p30\">
                    <div class=\"col-lg-12\">
                        <div class=\"au-card recent-report\">
                            <div class=\"au-card-inner\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <h3 class=\"title-2 m-b-30\">Áreas</h3>
                                    </div>
                                    <div class=\"col-lg-6 text-right\">
                                        <a class=\"au-btn au-btn-icon au-btn--blue m-b-30\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/admin/areas_modificacoes\">
                                            <i class=\"zmdi zmdi-plus\"></i>adicionar Área</a>
                                    </div>
                                </div>
                                <div class=\"table-responsive table--no-card m-b-30\">
                                    <table class=\"table table-borderless table-striped table-earning\">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nome</th>
                                                <th>Descrição</th>
                                                <th class=\"text-center\">Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 30
        if ((isset($context["areas"]) ? $context["areas"] : null)) {
            // line 31
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
                // line 32
                echo "                                            <tr>
                                                <td>
                                                    ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "
                                                </td>
                                                <td>
                                                    ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "nome", []), "html", null, true);
                echo "
                                                </td>
                                                <td>
                                                    ";
                // line 40
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["area"], "descricao", []), 0, 20), "html", null, true);
                echo "...
                                                </td>
                                                <td class=\"text-center\">
                                                    <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
                echo "/admin/areas_modificacoes/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "id", []), "html", null, true);
                echo "\" class=\"btn btn-warning\">Atualizar</a>
                                                    <button type=\"button\" id='area-";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "id", []), "html", null, true);
                echo "' class=\"btn btn-danger swldel\">Deletar</button>
                                                </td>
                                            </tr>
                                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                            
                                            ";
        } else {
            // line 49
            echo "                                            <tr>
                                                <td colspan=\"4\" class=\"text-center\">Não há Registros!</td>
                                            </tr>
                                            ";
        }
        // line 52
        echo "                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
";
    }

    // line 60
    public function block_js($context, array $blocks = [])
    {
        // line 61
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/vendor/sweetalert/sweetalert.min.js\"></script>
<script>
    \$('.swldel').click(function (btn) {
        swal({
            title: \"Deseja Deletar a Área?\",
            icon: 'warning',
            dangerMode: true,
            buttons: {
                cancel: 'Cancelar',
                delete: 'Confirmar'
            }
        }).then(function (willDelete) {
            if (willDelete) {
                swal(\" \", {
                    title: \"Área Deletada com Sucesso!\",
                    icon: \"success\",
                    timer: 1500,
                    buttons: false
                });
                location.href = BASE + \"/admin/areas/del/\" + btn.currentTarget.id.split(\"-\")[1];
            } else {
                swal(\" \", {
                    title: \"Cancelado!\",
                    icon: \"error\",
                    timer: 1500,
                    buttons: false
                });
            }
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "admin/areas.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 61,  168 => 60,  157 => 52,  151 => 49,  147 => 47,  129 => 44,  123 => 43,  117 => 40,  111 => 37,  105 => 34,  101 => 32,  83 => 31,  81 => 30,  63 => 15,  50 => 4,  47 => 3,  41 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin/areas.html", "/var/www/encontros/src/views/admin/areas.html");
    }
}
