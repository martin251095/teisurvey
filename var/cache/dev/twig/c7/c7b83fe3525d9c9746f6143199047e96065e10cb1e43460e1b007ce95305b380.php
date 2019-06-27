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

/* admin/answer/add.html.twig */
class __TwigTemplate_bf1e281e0f8daab78af10452b61f1285e5d122e1fff134d2ba18a5d9e248e8c5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/answer/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/answer/add.html.twig"));

        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), [0 => $this->getTemplateName()], true);
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/answer/add.html.twig", 1);
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

        echo "Answers";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <script>
        function validateForm() {
            let locale = null;
            let upperLocale = null;
            let b = null;
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 14
            echo "            ";
            if (($context["locale"] == "en")) {
                // line 15
                echo "            let a = document.forms[\"answer\"][\"answer[answer]\"].value;
            let c = document.forms[\"answer\"][\"answer[point]\"].value;
            let d = document.forms[\"answer\"][\"answer[question]\"].value;
            if (a == null || a===\"\" || c == null || c===\"\" || d == null || d===\"\") {
                alert(\"Please fill all required field, don't forget the translations into the tabs\");
                return false;
            }
            ";
            } else {
                // line 23
                echo "            locale = '";
                echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                echo "';
            upperLocale = locale.charAt(0).toUpperCase() + locale.slice(1);
            b = document.forms[\"answer\"][\"answer[answer\" + upperLocale + \"]\"].value;
            if (b==null || b===\"\") {
                alert(\"Please fill all required field, don't forget the translations into the tabs\");
                return false;
            }
            ";
            }
            // line 31
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        }
    </script>
    <div class=\"container\">
        <h3 class=\"admin-h3\">Add new answer</h3>
        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["onsubmit" => "return validateForm()"]]);
        echo "
        <div class=\"nav nav-tabs nav-tab-admin\" id=\"nav-tab\" role=\"tablist\">
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 39
            echo "            ";
            $context["active"] = ((($context["locale"] == "en")) ? ("active") : (""));
            // line 40
            echo "            ";
            $context["selected"] = ((($context["locale"] == "en")) ? ("true") : ("false"));
            // line 41
            echo "            <a class=\"nav-item nav-link ";
            echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "\" id=\"nav-";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "-tab\" data-toggle=\"tab\" href=\"#nav-";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "\" role=\"tab\"
               aria-controls=\"nav-";
            // line 42
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "\" aria-selected=\"";
            echo twig_escape_filter($this->env, (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["locale"]), "html", null, true);
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </div>
        <div class=\"tab-content\" id=\"nav-tabContent\">
            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 47
            echo "                ";
            $context["active"] = ((($context["locale"] == "en")) ? ("show active") : (""));
            // line 48
            echo "                <div class=\"tab-pane fade ";
            echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "\" id=\"nav-";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"nav-";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "-tab\">
                ";
            // line 49
            if (($context["locale"] == "en")) {
                // line 50
                echo "                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "answer", [], "any", false, false, false, 50), 'row');
                echo "
                    ";
                // line 51
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "isCorrect", [], "any", false, false, false, 51), 'row');
                echo "
                    ";
                // line 52
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "point", [], "any", false, false, false, 52), 'row');
                echo "
                    ";
                // line 53
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "weight", [], "any", false, false, false, 53), 'row');
                echo "
                    ";
                // line 54
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "question", [], "any", false, false, false, 54), 'row');
                echo "
                ";
            } else {
                // line 56
                echo "                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), ("answer" . twig_capitalize_string_filter($this->env, $context["locale"])), [], "any", false, false, false, 56), 'row');
                echo "
                ";
            }
            // line 58
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </div>
        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-check\"></i>Create</button>
        ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/answer/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 62,  232 => 60,  225 => 58,  219 => 56,  214 => 54,  210 => 53,  206 => 52,  202 => 51,  197 => 50,  195 => 49,  186 => 48,  183 => 47,  179 => 46,  175 => 44,  163 => 42,  154 => 41,  151 => 40,  148 => 39,  144 => 38,  139 => 36,  133 => 32,  127 => 31,  115 => 23,  105 => 15,  102 => 14,  98 => 13,  91 => 8,  81 => 7,  62 => 3,  51 => 1,  49 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Answers{% endblock %}

{% form_theme form _self %}

{% block body %}
    <script>
        function validateForm() {
            let locale = null;
            let upperLocale = null;
            let b = null;
            {% for locale in locales %}
            {% if locale == 'en' %}
            let a = document.forms[\"answer\"][\"answer[answer]\"].value;
            let c = document.forms[\"answer\"][\"answer[point]\"].value;
            let d = document.forms[\"answer\"][\"answer[question]\"].value;
            if (a == null || a===\"\" || c == null || c===\"\" || d == null || d===\"\") {
                alert(\"Please fill all required field, don't forget the translations into the tabs\");
                return false;
            }
            {% else %}
            locale = '{{ locale }}';
            upperLocale = locale.charAt(0).toUpperCase() + locale.slice(1);
            b = document.forms[\"answer\"][\"answer[answer\" + upperLocale + \"]\"].value;
            if (b==null || b===\"\") {
                alert(\"Please fill all required field, don't forget the translations into the tabs\");
                return false;
            }
            {% endif %}
            {% endfor %}
        }
    </script>
    <div class=\"container\">
        <h3 class=\"admin-h3\">Add new answer</h3>
        {{ form_start(form, {'attr': { 'onsubmit' : 'return validateForm()'}}) }}
        <div class=\"nav nav-tabs nav-tab-admin\" id=\"nav-tab\" role=\"tablist\">
        {% for locale in locales %}
            {% set active = locale == 'en' ? 'active' : '' %}
            {% set selected = locale == 'en' ? 'true' : 'false' %}
            <a class=\"nav-item nav-link {{ active }}\" id=\"nav-{{ locale }}-tab\" data-toggle=\"tab\" href=\"#nav-{{ locale }}\" role=\"tab\"
               aria-controls=\"nav-{{ locale }}\" aria-selected=\"{{ selected }}\">{{ locale|upper }}</a>
        {% endfor %}
        </div>
        <div class=\"tab-content\" id=\"nav-tabContent\">
            {% for locale in locales %}
                {% set active = locale == 'en' ? 'show active' : '' %}
                <div class=\"tab-pane fade {{ active }}\" id=\"nav-{{ locale }}\" role=\"tabpanel\" aria-labelledby=\"nav-{{ locale }}-tab\">
                {% if locale == 'en' %}
                    {{ form_row(form.answer) }}
                    {{ form_row(form.isCorrect) }}
                    {{ form_row(form.point) }}
                    {{ form_row(form.weight) }}
                    {{ form_row(form.question) }}
                {% else %}
                    {{ form_row(attribute(form, 'answer' ~ locale|capitalize)) }}
                {% endif %}
                </div>
            {% endfor %}
        </div>
        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-check\"></i>Create</button>
        {{ form_end(form) }}
    </div>
{% endblock %}", "admin/answer/add.html.twig", "/Users/mpo/Documents/TEI/mysurvey/symfony/templates/admin/answer/add.html.twig");
    }
}
