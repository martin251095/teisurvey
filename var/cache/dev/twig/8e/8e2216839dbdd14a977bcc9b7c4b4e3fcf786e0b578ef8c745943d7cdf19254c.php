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

/* admin/survey/edit.html.twig */
class __TwigTemplate_0ba43c8fe603c6ed750604113e20b5d72dd3af733df5d39702996f0805e7ee74 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/survey/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/survey/edit.html.twig"));

        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), [0 => $this->getTemplateName()], true);
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/survey/edit.html.twig", 1);
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

        echo "Surveys";
        
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
            let f = null;
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 15
            echo "            ";
            if (($context["locale"] == "en")) {
                // line 16
                echo "            let a = document.forms[\"survey\"][\"survey[title]\"].value;
            let e = document.forms[\"survey\"][\"survey[description]\"].value;
            if (a == null || a === \"\" || e == null || e === \"\") {
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
            b = document.forms[\"survey\"][\"survey[title\" + upperLocale + \"]\"].value;
            f = document.forms[\"survey\"][\"survey[description\" + upperLocale + \"]\"].value;
            if (b == null || b === \"\" || f == null || f === \"\") {
                alert(\"Please fill all required field, don't forget the translations into the tabs\");
                return false;
            }
            ";
            }
            // line 32
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        }

    </script>

    <div class=\"container\">
        <h3 class=\"admin-h3\">Add new survey</h3>
        ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_start', ["attr" => ["onsubmit" => "return validateForm()"]]);
        echo "
        <div class=\"nav nav-tabs nav-tab-admin\" id=\"nav-tab\" role=\"tablist\">
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 42
            echo "                ";
            $context["active"] = ((($context["locale"] == "en")) ? ("active") : (""));
            // line 43
            echo "                ";
            $context["selected"] = ((($context["locale"] == "en")) ? ("true") : ("false"));
            // line 44
            echo "                <a class=\"nav-item nav-link ";
            echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 44, $this->source); })()), "html", null, true);
            echo "\" id=\"nav-";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "-tab\" data-toggle=\"tab\"
                   href=\"#nav-";
            // line 45
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "\" role=\"tab\"
                   aria-controls=\"nav-";
            // line 46
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "\" aria-selected=\"";
            echo twig_escape_filter($this->env, (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 46, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["locale"]), "html", null, true);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </div>
        <div class=\"tab-content\" id=\"nav-tabContent\">
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 51
            echo "                ";
            $context["active"] = ((($context["locale"] == "en")) ? ("show active") : (""));
            // line 52
            echo "                <div class=\"tab-pane fade ";
            echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "\" id=\"nav-";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "\" role=\"tabpanel\"
                     aria-labelledby=\"nav-";
            // line 53
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "-tab\">
                    ";
            // line 54
            if (($context["locale"] == "en")) {
                // line 55
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "title", [], "any", false, false, false, 55), 'row');
                echo "
                        ";
                // line 56
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "description", [], "any", false, false, false, 56), 'row');
                echo "
                    ";
            } else {
                // line 58
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), ("title" . twig_capitalize_string_filter($this->env, $context["locale"])), [], "any", false, false, false, 58), 'row');
                echo "
                        ";
                // line 59
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), ("description" . twig_capitalize_string_filter($this->env, $context["locale"])), [], "any", false, false, false, 59), 'row');
                echo "
                    ";
            }
            // line 61
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </div>
        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-check\"></i>Create</button>
        ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/survey/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 65,  231 => 63,  224 => 61,  219 => 59,  214 => 58,  209 => 56,  204 => 55,  202 => 54,  198 => 53,  191 => 52,  188 => 51,  184 => 50,  180 => 48,  168 => 46,  164 => 45,  157 => 44,  154 => 43,  151 => 42,  147 => 41,  142 => 39,  134 => 33,  128 => 32,  115 => 23,  106 => 16,  103 => 15,  99 => 14,  91 => 8,  81 => 7,  62 => 3,  51 => 1,  49 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Surveys{% endblock %}

{% form_theme form _self %}

{% block body %}
    <script>
        function validateForm() {
            let locale = null;
            let upperLocale = null;
            let b = null;
            let f = null;
            {% for locale in locales %}
            {% if locale == 'en' %}
            let a = document.forms[\"survey\"][\"survey[title]\"].value;
            let e = document.forms[\"survey\"][\"survey[description]\"].value;
            if (a == null || a === \"\" || e == null || e === \"\") {
                alert(\"Please fill all required field, don't forget the translations into the tabs\");
                return false;
            }
            {% else %}
            locale = '{{ locale }}';
            upperLocale = locale.charAt(0).toUpperCase() + locale.slice(1);
            b = document.forms[\"survey\"][\"survey[title\" + upperLocale + \"]\"].value;
            f = document.forms[\"survey\"][\"survey[description\" + upperLocale + \"]\"].value;
            if (b == null || b === \"\" || f == null || f === \"\") {
                alert(\"Please fill all required field, don't forget the translations into the tabs\");
                return false;
            }
            {% endif %}
            {% endfor %}
        }

    </script>

    <div class=\"container\">
        <h3 class=\"admin-h3\">Add new survey</h3>
        {{ form_start(form, {'attr': { 'onsubmit' : 'return validateForm()'}}) }}
        <div class=\"nav nav-tabs nav-tab-admin\" id=\"nav-tab\" role=\"tablist\">
            {% for locale in locales %}
                {% set active = locale == 'en' ? 'active' : '' %}
                {% set selected = locale == 'en' ? 'true' : 'false' %}
                <a class=\"nav-item nav-link {{ active }}\" id=\"nav-{{ locale }}-tab\" data-toggle=\"tab\"
                   href=\"#nav-{{ locale }}\" role=\"tab\"
                   aria-controls=\"nav-{{ locale }}\" aria-selected=\"{{ selected }}\">{{ locale|upper }}</a>
            {% endfor %}
        </div>
        <div class=\"tab-content\" id=\"nav-tabContent\">
            {% for locale in locales %}
                {% set active = locale == 'en' ? 'show active' : '' %}
                <div class=\"tab-pane fade {{ active }}\" id=\"nav-{{ locale }}\" role=\"tabpanel\"
                     aria-labelledby=\"nav-{{ locale }}-tab\">
                    {% if locale == 'en' %}
                        {{ form_row(form.title) }}
                        {{ form_row(form.description) }}
                    {% else %}
                        {{ form_row(attribute(form, 'title' ~ locale|capitalize)) }}
                        {{ form_row(attribute(form, 'description' ~ locale|capitalize)) }}
                    {% endif %}
                </div>
            {% endfor %}
        </div>
        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-check\"></i>Create</button>
        {{ form_end(form) }}
    </div>
{% endblock %}
", "admin/survey/edit.html.twig", "/Users/mpo/Documents/TEI/mysurvey/symfony/templates/admin/survey/edit.html.twig");
    }
}
