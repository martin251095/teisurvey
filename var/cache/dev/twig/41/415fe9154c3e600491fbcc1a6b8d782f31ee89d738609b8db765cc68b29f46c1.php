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

/* admin/survey/add.html.twig */
class __TwigTemplate_508f11a1856a7117832845796282a6c2eceba0d1c2a7c4819d72354b5ca127d2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/survey/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/survey/add.html.twig"));

        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), [0 => $this->getTemplateName()], true);
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/survey/add.html.twig", 1);
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
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 14
            echo "            ";
            if (($context["locale"] == "en")) {
                // line 15
                echo "            let a = document.forms[\"survey\"][\"survey[title]\"].value;
            let c = document.forms[\"survey\"][\"survey[sendingEmail]\"].value;
            let d = document.forms[\"survey\"][\"survey[sendingEmailLanguage]\"].value;
            if (a == null || a === \"\" || c == null || c === \"\" || d == null || d === \"\") {
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
            if (b == null || b === \"\") {
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

        jQuery(document).ready(function () {
            var \$wrapper = \$('.js-survey-category-wrapper');
            \$wrapper.on('click', '.js-remove-survey-category', function(e) {
                e.preventDefault();
                \$(this).closest('.js-survey-category-item')
                    .fadeOut()
                    .remove();
            });

            \$wrapper.on('click', '.js-survey-category-add', function(e) {
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
        <h3 class=\"admin-h3\">Add new survey</h3>
        ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_start', ["attr" => ["onsubmit" => "return validateForm()"]]);
        echo "
        <div class=\"nav nav-tabs nav-tab-admin\" id=\"nav-tab\" role=\"tablist\">
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 69, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 70
            echo "                ";
            $context["active"] = ((($context["locale"] == "en")) ? ("active") : (""));
            // line 71
            echo "                ";
            $context["selected"] = ((($context["locale"] == "en")) ? ("true") : ("false"));
            // line 72
            echo "                <a class=\"nav-item nav-link ";
            echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 72, $this->source); })()), "html", null, true);
            echo "\" id=\"nav-";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "-tab\" data-toggle=\"tab\"
                   href=\"#nav-";
            // line 73
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "\" role=\"tab\"
                   aria-controls=\"nav-";
            // line 74
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "\" aria-selected=\"";
            echo twig_escape_filter($this->env, (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 74, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["locale"]), "html", null, true);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        </div>
        <div class=\"tab-content\" id=\"nav-tabContent\">
            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 79
            echo "                ";
            $context["active"] = ((($context["locale"] == "en")) ? ("show active") : (""));
            // line 80
            echo "                <div class=\"tab-pane fade ";
            echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 80, $this->source); })()), "html", null, true);
            echo "\" id=\"nav-";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "\" role=\"tabpanel\"
                     aria-labelledby=\"nav-";
            // line 81
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "-tab\">
                    ";
            // line 82
            if (($context["locale"] == "en")) {
                // line 83
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "title", [], "any", false, false, false, 83), 'row');
                echo "
                        ";
                // line 84
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "description", [], "any", false, false, false, 84), 'row');
                echo "
                        <div class=\"title_survey_admin\">Categories</div>
                        <div class=\"row js-survey-category-wrapper\"
                             data-prototype=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "categories", [], "any", false, false, false, 87), "vars", [], "any", false, false, false, 87), "prototype", [], "any", false, false, false, 87), 'widget'), "html_attr");
                echo "\"
                             data-index=\"";
                // line 88
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "categories", [], "any", false, false, false, 88)), "html", null, true);
                echo "\">
                            ";
                // line 89
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "categories", [], "any", false, false, false, 89));
                foreach ($context['_seq'] as $context["_key"] => $context["surveyCategoryForm"]) {
                    // line 90
                    echo "                                <div class=\"col-xs-4 js-survey-category-item\">
                                    ";
                    // line 91
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["surveyCategoryForm"], 'errors');
                    echo "
                                    ";
                    // line 92
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["surveyCategoryForm"], "category", [], "any", false, false, false, 92), 'row');
                    echo "
                                    ";
                    // line 93
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["surveyCategoryForm"], "weight", [], "any", false, false, false, 93), 'row');
                    echo "
                                    <a href=\"#\" class=\"js-remove-survey-category pull-right\">
                                        <span class=\"fa fa-close\"></span>
                                        Delete
                                    </a>
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['surveyCategoryForm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "                            <a href=\"#\" class=\"js-survey-category-add\">
                                <span class=\"fa fa-plus-circle\"></span>
                                Add Another Category
                            </a>
                        </div>
                        ";
                // line 105
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "sendingEmail", [], "any", false, false, false, 105), 'row');
                echo "
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "sendingEmailLanguage", [], "any", false, false, false, 106), 'row');
                echo "
                    ";
            } else {
                // line 108
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), ("title" . twig_capitalize_string_filter($this->env, $context["locale"])), [], "any", false, false, false, 108), 'row');
                echo "
                        ";
                // line 109
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), ("description" . twig_capitalize_string_filter($this->env, $context["locale"])), [], "any", false, false, false, 109), 'row');
                echo "
                    ";
            }
            // line 111
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "        </div>
        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-check\"></i>Create</button>
        ";
        // line 115
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/survey/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 115,  312 => 113,  305 => 111,  300 => 109,  295 => 108,  290 => 106,  286 => 105,  279 => 100,  266 => 93,  262 => 92,  258 => 91,  255 => 90,  251 => 89,  247 => 88,  243 => 87,  237 => 84,  232 => 83,  230 => 82,  226 => 81,  219 => 80,  216 => 79,  212 => 78,  208 => 76,  196 => 74,  192 => 73,  185 => 72,  182 => 71,  179 => 70,  175 => 69,  170 => 67,  133 => 32,  127 => 31,  115 => 23,  105 => 15,  102 => 14,  98 => 13,  91 => 8,  81 => 7,  62 => 3,  51 => 1,  49 => 5,  36 => 1,);
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
            {% for locale in locales %}
            {% if locale == 'en' %}
            let a = document.forms[\"survey\"][\"survey[title]\"].value;
            let c = document.forms[\"survey\"][\"survey[sendingEmail]\"].value;
            let d = document.forms[\"survey\"][\"survey[sendingEmailLanguage]\"].value;
            if (a == null || a === \"\" || c == null || c === \"\" || d == null || d === \"\") {
                alert(\"Please fill all required field, don't forget the translations into the tabs\");
                return false;
            }
            {% else %}
            locale = '{{ locale }}';
            upperLocale = locale.charAt(0).toUpperCase() + locale.slice(1);
            b = document.forms[\"survey\"][\"survey[title\" + upperLocale + \"]\"].value;
            if (b == null || b === \"\") {
                alert(\"Please fill all required field, don't forget the translations into the tabs\");
                return false;
            }
            {% endif %}
            {% endfor %}
        }

        jQuery(document).ready(function () {
            var \$wrapper = \$('.js-survey-category-wrapper');
            \$wrapper.on('click', '.js-remove-survey-category', function(e) {
                e.preventDefault();
                \$(this).closest('.js-survey-category-item')
                    .fadeOut()
                    .remove();
            });

            \$wrapper.on('click', '.js-survey-category-add', function(e) {
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
                        <div class=\"title_survey_admin\">Categories</div>
                        <div class=\"row js-survey-category-wrapper\"
                             data-prototype=\"{{ form_widget(form.categories.vars.prototype)|e('html_attr') }}\"
                             data-index=\"{{ form.categories|length }}\">
                            {% for surveyCategoryForm in form.categories %}
                                <div class=\"col-xs-4 js-survey-category-item\">
                                    {{ form_errors(surveyCategoryForm) }}
                                    {{ form_row(surveyCategoryForm.category) }}
                                    {{ form_row(surveyCategoryForm.weight) }}
                                    <a href=\"#\" class=\"js-remove-survey-category pull-right\">
                                        <span class=\"fa fa-close\"></span>
                                        Delete
                                    </a>
                                </div>
                            {% endfor %}
                            <a href=\"#\" class=\"js-survey-category-add\">
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
", "admin/survey/add.html.twig", "/Users/mpo/Documents/TEI/mysurvey/symfony/templates/admin/survey/add.html.twig");
    }
}
