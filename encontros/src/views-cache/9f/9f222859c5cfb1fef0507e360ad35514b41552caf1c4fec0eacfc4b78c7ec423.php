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

/* admin/usuarios-modificacoes.html */
class __TwigTemplate_e1dba1840ae2a0de8a8fd045de4345ab412c3eb65d45707dbe245c97232b906e extends \Twig\Template
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
        $this->parent = $this->loadTemplate("admin/base/template-base-dashboard.html", "admin/usuarios-modificacoes.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : null), "html", null, true);
        echo " Usuarios";
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
                                <strong>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : null), "html", null, true);
        echo " Usuário</strong>
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
                                    <input type=\"text\" id=\"nome\" name='nome' placeholder=\"Digite o Nome do Usuario\" class=\"form-control\" value='";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nome", []), "html", null, true);
        echo "'>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"email\" class=\" form-control-label\">Email</label>
                                    <input type=\"email\" id=\"email\" name='email' placeholder=\"Digite o Email do Usuario\" class=\"form-control\" value='";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "email", []), "html", null, true);
        echo "'>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"pass\" class=\" form-control-label\">Senha ";
        // line 35
        echo (((isset($context["usuario"]) ? $context["usuario"] : null)) ? ("<span style='color:red;font-size: 10px'>Caso deixe em branco a senha permanecera a mesma</span>") : (""));
        echo "</label>
                                    <input type=\"password\" id=\"pass\" name='pass' placeholder=\"Digite sua Senha\" class=\"form-control\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"confirm-pass\" class=\" form-control-label\">Confirme sua Nova Senha ";
        // line 39
        echo (((isset($context["usuario"]) ? $context["usuario"] : null)) ? ("<span style='color:red;font-size: 10px'>Caso deixe em branco sua senha permanecera a mesma</span>") : (""));
        echo "</label>
                                    <input type=\"password\" id=\"confirm-pass\" name='confirm-pass' placeholder=\"Digite sua Nova Senha Novamente\" class=\"form-control\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"pass\" class=\" form-control-label\">Tipo do Usuario</label>
                                    <div class=\"container row form-group\">
                                        <div class=\"form-check col-lg-4\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"tipoU\" id=\"adm\" value=\"1\" ";
        // line 46
        echo ((((($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "tipo", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "tipo", []), "1")) : ("1")) == "1")) ? ("checked") : (""));
        echo "  ";
        echo ((($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "id", []) != (isset($context["idlogado"]) ? $context["idlogado"] : null))) ? ("") : ("readonly"));
        echo " >
                                            <label class=\"form-check-label\" for=\"adm\">
                                                Administrador
                                            </label>
                                        </div>
                                        <div class=\"form-check col-lg-4\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"tipoU\" id=\"org\" value=\"2\" ";
        // line 52
        echo ((($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "tipo", []) == "2")) ? ("checked") : (""));
        echo " ";
        echo ((($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "id", []) != (isset($context["idlogado"]) ? $context["idlogado"] : null))) ? ("") : ("readonly"));
        echo ">
                                            <label class=\"form-check-label\" for=\"org\">
                                                Organizador
                                            </label>
                                        </div>
                                        <div class=\"form-check col-lg-4\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"tipoU\" id=\"editor\" value=\"3\" ";
        // line 58
        echo ((($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "tipo", []) == "3")) ? ("checked") : (""));
        echo " ";
        echo ((($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "id", []) != (isset($context["idlogado"]) ? $context["idlogado"] : null))) ? ("") : ("readonly"));
        echo ">
                                            <label class=\"form-check-label\" for=\"editor\">
                                                Editor
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-footer\">
                                <button type=\"submit\" name='enviar' value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "id", []), "html", null, true);
        echo "\" class=\"btn btn-success btn-sm\">
                                    <i class=\"fa fa-dot-circle-o\"></i> ";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : null), "html", null, true);
        echo "
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
";
    }

    public function getTemplateName()
    {
        return "admin/usuarios-modificacoes.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 68,  162 => 67,  148 => 58,  137 => 52,  126 => 46,  116 => 39,  109 => 35,  103 => 32,  96 => 28,  92 => 26,  84 => 20,  75 => 18,  71 => 17,  67 => 15,  65 => 14,  59 => 11,  50 => 4,  47 => 3,  40 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin/usuarios-modificacoes.html", "/var/www/encontros/src/views/admin/usuarios-modificacoes.html");
    }
}
