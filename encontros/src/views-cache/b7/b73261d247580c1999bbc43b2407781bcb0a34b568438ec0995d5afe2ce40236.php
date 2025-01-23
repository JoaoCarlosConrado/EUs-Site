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

/* admin/conta.html */
class __TwigTemplate_4b64db1b801ff739921551ff7c07e425a86c16dd405a1c93aa385237ffc126ae extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'page' => [$this, 'block_page'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base/template-base-dashboard.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("admin/base/template-base-dashboard.html", "admin/conta.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Conta";
    }

    // line 3
    public function block_page($context, array $blocks = [])
    {
        // line 4
        echo "            <!-- MAIN CONTENT-->
            <div class=\"main-content\">
                <div class=\"section__content section__content--p30\">
                    <div class=\"col-lg-12\">
                        <form method=\"POST\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <strong>Conta</strong>
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
                                    <label for=\"nome\" class=\" form-control-label\">Nome</label>
                                    <input type=\"text\" id=\"nome\" name=\"nome\" placeholder=\"Digite o Nome do Usuario\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nome", []), "html", null, true);
        echo "\" class=\"form-control\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"email\" class=\" form-control-label\">Email</label>
                                    <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Digite o Email do Usuario\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "email", []), "html", null, true);
        echo "\" class=\"form-control\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"pass\" class=\" form-control-label\">Senha <span style='color:red;font-size: 10px'>Digite sua Senha para Alterar os Dados</span></label>
                                    <input type=\"password\" id=\"pass\" name='pass' placeholder=\"Digite sua Senha\" class=\"form-control\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"new-pass\" class=\" form-control-label\">Nova Senha <span style='color:red;font-size: 10px'>Caso deixe em branco a senha permanecera a mesma</span></label>
                                    <input type=\"password\" id=\"new-pass\" name=\"new-pass\" placeholder=\"Digite sua Nova Senha\" class=\"form-control\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"confirm-pass\" class=\" form-control-label\">Confirme sua Nova Senha <span style='color:red;font-size: 10px'>Caso deixe em branco sua senha permanecera a mesma</span></label>
                                    <input type=\"password\" id=\"confirm-pass\" name='confirm-pass' placeholder=\"Digite sua Nova Senha Novamente\"
                                        class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"card-footer\">
                                <button type=\"submit\" name='enviar' value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "id", []), "html", null, true);
        echo "\" class=\"btn btn-success btn-sm\">
                                    <i class=\"fa fa-dot-circle-o\"></i> Atualizar
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
";
    }

    public function getTemplateName()
    {
        return "admin/conta.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 49,  99 => 32,  92 => 28,  88 => 26,  80 => 20,  71 => 18,  67 => 17,  63 => 15,  61 => 14,  49 => 4,  46 => 3,  40 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin/conta.html", "/var/www/encontros/src/views/admin/conta.html");
    }
}
