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

/* admin/quiz/add.html.twig */
class __TwigTemplate_4a901b8acb14a0b4d243696899f9ce857c52e35e30064cb0f27e99de25b8cd00 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/quiz/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/quiz/add.html.twig"));

        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), [0 => $this->getTemplateName()], true);
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/quiz/add.html.twig", 1);
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
                echo "            let a = document.forms[\"quiz\"][\"quiz[title]\"].value;
            let c = document.forms[\"quiz\"][\"quiz[sendingEmail]\"].value;
            let d = document.forms[\"quiz\"][\"quiz[sendingEmailLanguage]\"].value;
            let e = document.forms[\"quiz\"][\"quiz[description]\"].value;
            if (a == null || a === \"\" || c == null || c === \"\" || d == null || d === \"\" || e == null || e === \"\") {
                alert(\"Please fill all required field, don't forget the translations into the tabs\");
                return false;
            }
            ";
            } else {
                // line 25
                echo "            locale = '";
                echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                echo "';
            upperLocale = locale.charAt(0).toUpperCase() + locale.slice(1);
            b = document.forms[\"quiz\"][\"quiz[title\" + upperLocale + \"]\"].value;
            f = document.forms[\"quiz\"][\"quiz[description\" + upperLocale + \"]\"].value;
            if (b == null || b === \"\" || f == null || f === \"\") {
                alert(\"Please fill all required field, don't forget the translations into the tabs\");
                return false;
            }
            ";
            }
            // line 34
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        }

        jQuery(document).ready(function () {
            var \$wrapper = \$('.js-quiz-category-wrapper');
            \$wrapper.on('click', '.js-remove-quiz-category', function(e) {
                e.preventDefault();
                \$(this).closest('.js-quiz-category-item')
                    .fadeOut()
                    .remove();
            });

            \$wrapper.on('click', '.js-quiz-category-add', function(e) {
                e.preventDefault();

                // Get the data-prototype
                var prototype = \$wrapper.data('prototype');

                // Get the new index
                var index = \$wrapper.data('index');

                // Replace '__name__' in the prototype's HTML to
                // instead be a number based on how many items we have
                var newForm = prototype.replace(/__name__/g, index);

                // Increase the index with one for the next item
                \$wrapper.data('index', index + 1);

                // Display the form in the page before the \"new\" link
                \$(this).before(newForm);
            });
        });
    </script>

    <div class=\"container\">
        <h3 class=\"admin-h3\">Add new quiz</h3>
        ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_start', ["attr" => ["onsubmit" => "return validateForm()"]]);
        echo "
        <div class=\"nav nav-tabs nav-tab-admin\" id=\"nav-tab\" role=\"tablist\">
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 73
            echo "                ";
            $context["active"] = ((($context["locale"] == "en")) ? ("active") : (""));
            // line 74
            echo "                ";
            $context["selected"] = ((($context["locale"] == "en")) ? ("true") : ("false"));
            // line 75
            echo "                <a class=\"nav-item nav-link ";
            echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 75, $this->source); })()), "html", null, true);
            echo "\" id=\"nav-";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "-tab\" data-toggle=\"tab\"
                   href=\"#nav-";
            // line 76
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "\" role=\"tab\"
                   aria-controls=\"nav-";
            // line 77
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "\" aria-selected=\"";
            echo twig_escape_filter($this->env, (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 77, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["locale"]), "html", null, true);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "        </div>
        <div class=\"tab-content\" id=\"nav-tabContent\">
            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 82
            echo "                ";
            $context["active"] = ((($context["locale"] == "en")) ? ("show active") : (""));
            // line 83
            echo "                <div class=\"tab-pane fade ";
            echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 83, $this->source); })()), "html", null, true);
            echo "\" id=\"nav-";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "\" role=\"tabpanel\"
                     aria-labelledby=\"nav-";
            // line 84
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "-tab\">
                    ";
            // line 85
            if (($context["locale"] == "en")) {
                // line 86
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "title", [], "any", false, false, false, 86), 'row');
                echo "
                        ";
                // line 87
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "description", [], "any", false, false, false, 87), 'row');
                echo "
                        <div class=\"title_survey_admin\">Categories</div>
                        <div class=\"row js-quiz-category-wrapper\"
                             data-prototype=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "categories", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "prototype", [], "any", false, false, false, 90), 'widget'), "html_attr");
                echo "\"
                             data-index=\"";
                // line 91
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "categories", [], "any", false, false, false, 91)), "html", null, true);
                echo "\">
                            ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "categories", [], "any", false, false, false, 92));
                foreach ($context['_seq'] as $context["_key"] => $context["quizCategoryForm"]) {
                    // line 93
                    echo "                                <div class=\"col-xs-4 js-quiz-category-item\">
                                    ";
                    // line 94
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["quizCategoryForm"], 'errors');
                    echo "
                                    ";
                    // line 95
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["quizCategoryForm"], "category", [], "any", false, false, false, 95), 'row');
                    echo "
                                    ";
                    // line 96
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["quizCategoryForm"], "weight", [], "any", false, false, false, 96), 'row');
                    echo "
                                    <a href=\"#\" class=\"js-remove-quiz-category pull-right\">
                                        <span class=\"fa fa-close\"></span>
                                        Delete
                                    </a>
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quizCategoryForm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "                            <a href=\"#\" class=\"js-quiz-category-add\">
                                <span class=\"fa fa-plus-circle\"></span>
                                Add Another Category
                            </a>
                        </div>
                        ";
                // line 108
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "sendingEmail", [], "any", false, false, false, 108), 'row');
                echo "
                        ";
                // line 109
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "sendingEmailLanguage", [], "any", false, false, false, 109), 'row');
                echo "
                    ";
            } else {
                // line 111
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), ("title" . twig_capitalize_string_filter($this->env, $context["locale"])), [], "any", false, false, false, 111), 'row');
                echo "
                        ";
                // line 112
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), ("description" . twig_capitalize_string_filter($this->env, $context["locale"])), [], "any", false, false, false, 112), 'row');
                echo "
                    ";
            }
            // line 114
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "        </div>
        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-check\"></i>Create</button>
        ";
        // line 118
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/quiz/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 118,  315 => 116,  308 => 114,  303 => 112,  298 => 111,  293 => 109,  289 => 108,  282 => 103,  269 => 96,  265 => 95,  261 => 94,  258 => 93,  254 => 92,  250 => 91,  246 => 90,  240 => 87,  235 => 86,  233 => 85,  229 => 84,  222 => 83,  219 => 82,  215 => 81,  211 => 79,  199 => 77,  195 => 76,  188 => 75,  185 => 74,  182 => 73,  178 => 72,  173 => 70,  136 => 35,  130 => 34,  117 => 25,  106 => 16,  103 => 15,  99 => 14,  91 => 8,  81 => 7,  62 => 3,  51 => 1,  49 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Quiz{% endblock %}

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
            let a = document.forms[\"quiz\"][\"quiz[title]\"].value;
            let c = document.forms[\"quiz\"][\"quiz[sendingEmail]\"].value;
            let d = document.forms[\"quiz\"][\"quiz[sendingEmailLanguage]\"].value;
            let e = document.forms[\"quiz\"][\"quiz[description]\"].value;
            if (a == null || a === \"\" || c == null || c === \"\" || d == null || d === \"\" || e == null || e === \"\") {
                alert(\"Please fill all required field, don't forget the translations into the tabs\");
                return false;
            }
            {% else %}
            locale = '{{ locale }}';
            upperLocale = locale.charAt(0).toUpperCase() + locale.slice(1);
            b = document.forms[\"quiz\"][\"quiz[title\" + upperLocale + \"]\"].value;
            f = document.forms[\"quiz\"][\"quiz[description\" + upperLocale + \"]\"].value;
            if (b == null || b === \"\" || f == null || f === \"\") {
                alert(\"Please fill all required field, don't forget the translations into the tabs\");
                return false;
            }
            {% endif %}
            {% endfor %}
        }

        jQuery(document).ready(function () {
            var \$wrapper = \$('.js-quiz-category-wrapper');
            \$wrapper.on('click', '.js-remove-quiz-category', function(e) {
                e.preventDefault();
                \$(this).closest('.js-quiz-category-item')
                    .fadeOut()
                    .remove();
            });

            \$wrapper.on('click', '.js-quiz-category-add', function(e) {
                e.preventDefault();

                // Get the data-prototype
                var prototype = \$wrapper.data('prototype');

                // Get the new index
                var index = \$wrapper.data('index');

                // Replace '__name__' in the prototype's HTML to
                // instead be a number based on how many items we have
                var newForm = prototype.replace(/__name__/g, index);

                // Increase the index with one for the next item
                \$wrapper.data('index', index + 1);

                // Display the form in the page before the \"new\" link
                \$(this).before(newForm);
            });
        });
    </script>

    <div class=\"container\">
        <h3 class=\"admin-h3\">Add new quiz</h3>
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
                        <div class=\"title_survey_admin\">Categories</div>
                        <div class=\"row js-quiz-category-wrapper\"
                             data-prototype=\"{{ form_widget(form.categories.vars.prototype)|e('html_attr') }}\"
                             data-index=\"{{ form.categories|length }}\">
                            {% for quizCategoryForm in form.categories %}
                                <div class=\"col-xs-4 js-quiz-category-item\">
                                    {{ form_errors(quizCategoryForm) }}
                                    {{ form_row(quizCategoryForm.category) }}
                                    {{ form_row(quizCategoryForm.weight) }}
                                    <a href=\"#\" class=\"js-remove-quiz-category pull-right\">
                                        <span class=\"fa fa-close\"></span>
                                        Delete
                                    </a>
                                </div>
                            {% endfor %}
                            <a href=\"#\" class=\"js-quiz-category-add\">
                                <span class=\"fa fa-plus-circle\"></span>
                                Add Another Category
                            </a>
                        </div>
                        {{ form_row(form.sendingEmail) }}
                        {{ form_row(form.sendingEmailLanguage) }}
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
", "admin/quiz/add.html.twig", "/Users/mpo/Documents/TEI/mysurvey/symfony/templates/admin/quiz/add.html.twig");
    }
}
