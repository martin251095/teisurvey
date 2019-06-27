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

/* admin/home.html.twig */
class __TwigTemplate_a31e44f617abba610c8420b50bded3fd21c88083a62dada0cc3cc1fe14359bb1 extends \Twig\Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/home.html.twig", 1);
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

        echo "Dashboard";
        
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
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card bg-info text-white mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-users fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 16, $this->source); })()), "users", [], "any", false, false, false, 16), "html", null, true);
        echo " admins</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card bg-danger text-white mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-question fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 30, $this->source); })()), "surveys", [], "any", false, false, false, 30), "html", null, true);
        echo " surveys</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card text-white bg-dark mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-hotel fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 46, $this->source); })()), "categories", [], "any", false, false, false, 46), "html", null, true);
        echo " categories</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card text-white bg-warning mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-folder fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 60, $this->source); })()), "questions", [], "any", false, false, false, 60), "html", null, true);
        echo " questions</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card text-white bg-primary mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-comments fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 74, $this->source); })()), "answers", [], "any", false, false, false, 74), "html", null, true);
        echo " answers</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 74,  153 => 60,  136 => 46,  117 => 30,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card bg-info text-white mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-users fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">{{ stats.users }} admins</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card bg-danger text-white mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-question fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">{{ stats.surveys }} surveys</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card text-white bg-dark mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-hotel fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">{{ stats.categories }} categories</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card text-white bg-warning mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-folder fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">{{ stats.questions }} questions</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card text-white bg-primary mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-comments fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">{{ stats.answers }} answers</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endblock %}


", "admin/home.html.twig", "/Users/mpo/Documents/TEI/mysurvey/symfony/templates/admin/home.html.twig");
    }
}
