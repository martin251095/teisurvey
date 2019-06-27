<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_f57a549460d7859709b9e6563d69445bf4bf647eb8b078606dcea889e9c0cfb9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3\">&nbsp;</div>
            <div class=\"col-md-6\">
                <div class=\"bg-light py-3 px-3 connectionbox\">
                    ";
        // line 11
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
            // line 12
            echo "                        <h1 class=\"text-center\">You are already logged !</h1>
                    ";
        } else {
            // line 14
            echo "                        <h2>Login to the administration</h2><br/>
                        ";
            // line 15
            if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })())) {
                // line 16
                echo "                            <div class=\"alert alert-warning\"><p>The information provided are not correct!</p></div>
                        ";
            }
            // line 18
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "session", [], "any", false, false, false, 18), "flashbag", [], "any", false, false, false, 18), "get", [0 => "success"], "method", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 19
                echo "                            <div class=\"alert alert-success\">";
                echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                echo "</div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                        <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
            echo "\" method=\"POST\">
                            ";
            // line 22
            if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 22, $this->source); })())) {
                // line 23
                echo "                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 23, $this->source); })()), "html", null, true);
                echo "\"/>
                            ";
            }
            // line 25
            echo "                            <div class=\"form-group\">
                                <label for=\"_username\">Admin Name</label>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Admin name\" name=\"_username\"
                                       id=\"_username\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "\" required>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"_password\">Password</label>
                                <input type=\"password\" name=\"_password\" id=\"_password\" placeholder=\"Password...\"
                                       class=\"form-control\" required>
                            </div>
                            <br/>
                            <div class=\"row\">
                                <div class=\"form-group col-md-5\">
                                    <button type=\"submit\" class=\"btn btn-success\">Login!</button>
                                </div>
                                <div class=\"form-group col-md-5 text-right\">
                                    <a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_request");
            echo "\">Forgot password ?</a>
                                </div>
                            </div>
                        </form>
                    ";
        }
        // line 46
        echo "                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 46,  158 => 41,  142 => 28,  137 => 25,  131 => 23,  129 => 22,  124 => 21,  115 => 19,  110 => 18,  106 => 16,  104 => 15,  101 => 14,  97 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Login{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3\">&nbsp;</div>
            <div class=\"col-md-6\">
                <div class=\"bg-light py-3 px-3 connectionbox\">
                    {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_USER') %}
                        <h1 class=\"text-center\">You are already logged !</h1>
                    {% else %}
                        <h2>Login to the administration</h2><br/>
                        {% if error %}
                            <div class=\"alert alert-warning\"><p>The information provided are not correct!</p></div>
                        {% endif %}
                        {% for flash in app.session.flashbag.get('success') %}
                            <div class=\"alert alert-success\">{{ flash }}</div>
                        {% endfor %}
                        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"POST\">
                            {% if csrf_token %}
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
                            {% endif %}
                            <div class=\"form-group\">
                                <label for=\"_username\">Admin Name</label>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Admin name\" name=\"_username\"
                                       id=\"_username\" value=\"{{ last_username }}\" required>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"_password\">Password</label>
                                <input type=\"password\" name=\"_password\" id=\"_password\" placeholder=\"Password...\"
                                       class=\"form-control\" required>
                            </div>
                            <br/>
                            <div class=\"row\">
                                <div class=\"form-group col-md-5\">
                                    <button type=\"submit\" class=\"btn btn-success\">Login!</button>
                                </div>
                                <div class=\"form-group col-md-5 text-right\">
                                    <a href=\"{{ path('fos_user_resetting_request') }}\">Forgot password ?</a>
                                </div>
                            </div>
                        </form>
                    {% endif %}
                </div>
            </div>
        </div>

    </div>
{% endblock %}
", "@FOSUser/Security/login.html.twig", "/Users/mpo/Documents/TEI/mysurvey/symfony/templates/bundles/FOSUserBundle/Security/login.html.twig");
    }
}
