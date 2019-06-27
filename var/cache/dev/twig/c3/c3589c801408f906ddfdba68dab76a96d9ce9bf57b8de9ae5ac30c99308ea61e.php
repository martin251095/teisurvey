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

/* admin/quiz/list.html.twig */
class __TwigTemplate_13f05233c8bd674061fab4d2822a22934da4bce3533b62a687be6feec7f10252 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/quiz/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/quiz/list.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/quiz/list.html.twig", 1);
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

        echo "Quiz";
        
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
        echo "    <div class=\"container-fluid\">
        <table class=\"table table-hover\">
            <thead>
            <tr class=\"text-center\">
                <th>Id</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Categories</th>
                <th>Sending Email</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 21, $this->source); })()), "data", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 22
            echo "                ";
            $context["confirm"] = "return confirm(\"Are you sure you want to delete the quiz ?\");";
            // line 23
            echo "
                <tr class=\"text-center\">
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "slug", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["quiz"], "categoriesName", [], "any", false, false, false, 28), ", "), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "sendingEmail", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "createdAt", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "updatedAt", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_quiz_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                                    class=\"fas fa-edit\"></i></a>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_quiz_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" onclick=\"";
            echo twig_escape_filter($this->env, (isset($context["confirm"]) || array_key_exists("confirm", $context) ? $context["confirm"] : (function () { throw new RuntimeError('Variable "confirm" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-danger\"><i
                                    class=\"fas fa-trash\"></i></a>
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["quiz"], "slug", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\"
                            class=\"btn btn-warning\"><i class=\"fas fa-arrow-circle-right\"></i></a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </tbody>
        </table>
        ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 44, $this->source); })()), "display", [], "method", false, false, false, 44), "html", null, true);
        echo "
        ";
        // line 46
        echo "        <div class=\"button\">
            <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_quiz_add");
        echo "\" class=\"btn btn-primary btn-admin\">Add quiz</a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/quiz/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 47,  176 => 46,  172 => 44,  168 => 42,  157 => 37,  150 => 35,  145 => 33,  140 => 31,  136 => 30,  132 => 29,  128 => 28,  124 => 27,  120 => 26,  116 => 25,  112 => 23,  109 => 22,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Quiz{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <table class=\"table table-hover\">
            <thead>
            <tr class=\"text-center\">
                <th>Id</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Categories</th>
                <th>Sending Email</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            {% for quiz in pagination.data %}
                {% set confirm = 'return confirm(\"Are you sure you want to delete the quiz ?\");' %}

                <tr class=\"text-center\">
                    <td>{{ quiz.id }}</td>
                    <td>{{ quiz.title }}</td>
                    <td>{{ quiz.slug }}</td>
                    <td>{{ quiz.categoriesName|join(', ') }}</td>
                    <td>{{ quiz.sendingEmail }}</td>
                    <td>{{ quiz.createdAt|date('Y-m-d') }}</td>
                    <td>{{ quiz.updatedAt|date('Y-m-d') }}</td>
                    <td>
                        <a href=\"{{ path('admin_quiz_edit', {'id':quiz.id}) }}\" class=\"btn btn-primary\"><i
                                    class=\"fas fa-edit\"></i></a>
                        <a href=\"{{ path('admin_quiz_delete', {'id':quiz.id}) }}\" onclick=\"{{ confirm }}\" class=\"btn btn-danger\"><i
                                    class=\"fas fa-trash\"></i></a>
                        <a href=\"{{ path('quiz_show', {'slug':quiz.slug}) }}\"
                            class=\"btn btn-warning\"><i class=\"fas fa-arrow-circle-right\"></i></a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        {{ pagination.display() }}
        {# include 'admin/partials/pagination.html.twig' with {'route':'admin_quiz_list'} #}
        <div class=\"button\">
            <a href=\"{{ path('admin_quiz_add') }}\" class=\"btn btn-primary btn-admin\">Add quiz</a>
        </div>
    </div>
{% endblock %}
", "admin/quiz/list.html.twig", "/Users/mpo/Documents/TEI/mysurvey/symfony/templates/admin/quiz/list.html.twig");
    }
}
