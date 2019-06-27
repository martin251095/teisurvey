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

/* admin/surveyanswer/details.html.twig */
class __TwigTemplate_6ba2d34bf891c386a0de8d4e7120bd4492f3825b805d311c2c71e97633eeb286 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/surveyanswer/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/surveyanswer/details.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/surveyanswer/details.html.twig", 1);
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

        echo "Details of answers";
        
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
        echo "    <h3 class=\"details_title\">Answers of ";
        echo twig_escape_filter($this->env, (isset($context["firstname"]) || array_key_exists("firstname", $context) ? $context["firstname"] : (function () { throw new RuntimeError('Variable "firstname" does not exist.', 6, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastname"]) || array_key_exists("lastname", $context) ? $context["lastname"] : (function () { throw new RuntimeError('Variable "lastname" does not exist.', 6, $this->source); })()), "html", null, true);
        echo " </h3>
    <div class=\"container-fluid\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categoryItem"]) {
            // line 9
            echo "            ";
            $context["categoryName"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categoryItem"], "category", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9);
            // line 10
            echo "            ";
            $context["categoryScore"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 10, $this->source); })()), "scoreCategories", [], "any", false, false, false, 10), twig_get_attribute($this->env, $this->source, $context["categoryItem"], "id", [], "any", false, false, false, 10), [], "array", false, false, false, 10);
            // line 11
            echo "            ";
            $context["categoryMax"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 11, $this->source); })()), "maxCategories", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, $context["categoryItem"], "id", [], "any", false, false, false, 11), [], "array", false, false, false, 11);
            // line 12
            echo "
            <h5 class=\"category_title\">";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["categoryName"]) || array_key_exists("categoryName", $context) ? $context["categoryName"] : (function () { throw new RuntimeError('Variable "categoryName" does not exist.', 13, $this->source); })()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, (((isset($context["categoryScore"]) || array_key_exists("categoryScore", $context) ? $context["categoryScore"] : (function () { throw new RuntimeError('Variable "categoryScore" does not exist.', 13, $this->source); })()) . " / ") . (isset($context["categoryMax"]) || array_key_exists("categoryMax", $context) ? $context["categoryMax"] : (function () { throw new RuntimeError('Variable "categoryMax" does not exist.', 13, $this->source); })())), "html", null, true);
            echo ")</h5>
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categoryItem"], "category", [], "any", false, false, false, 14), "questions", [], "any", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["questionItem"]) {
                // line 15
                echo "                ";
                $context["questionName"] = twig_get_attribute($this->env, $this->source, $context["questionItem"], "question", [], "any", false, false, false, 15);
                // line 16
                echo "                ";
                $context["questionScore"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 16, $this->source); })()), "scoreQuestions", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, $context["questionItem"], "id", [], "any", false, false, false, 16), [], "array", false, false, false, 16);
                // line 17
                echo "                ";
                $context["questionMax"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 17, $this->source); })()), "maxQuestions", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, $context["questionItem"], "id", [], "any", false, false, false, 17), [], "array", false, false, false, 17);
                // line 18
                echo "
                <h6 class=\"question_statement\">";
                // line 19
                echo twig_escape_filter($this->env, (isset($context["questionName"]) || array_key_exists("questionName", $context) ? $context["questionName"] : (function () { throw new RuntimeError('Variable "questionName" does not exist.', 19, $this->source); })()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, (((isset($context["questionScore"]) || array_key_exists("questionScore", $context) ? $context["questionScore"] : (function () { throw new RuntimeError('Variable "questionScore" does not exist.', 19, $this->source); })()) . " / ") . (isset($context["questionMax"]) || array_key_exists("questionMax", $context) ? $context["questionMax"] : (function () { throw new RuntimeError('Variable "questionMax" does not exist.', 19, $this->source); })())), "html", null, true);
                echo "):</h6>
                <div class=\"text_info\">Answers of the user :</div>
                <ul class=\"answer_statement\">
                    ";
                // line 22
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categoryItem"], "category", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22), [], "array", false, true, false, 22), "questions", [], "array", false, true, false, 22), twig_get_attribute($this->env, $this->source, $context["questionItem"], "id", [], "any", false, false, false, 22), [], "array", true, true, false, 22)) {
                    // line 23
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categoryItem"], "category", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23), [], "array", false, false, false, 23), "questions", [], "array", false, false, false, 23), twig_get_attribute($this->env, $this->source, $context["questionItem"], "id", [], "any", false, false, false, 23), [], "array", false, false, false, 23), "answers", [], "any", false, false, false, 23));
                    foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                        // line 24
                        echo "                            <li style=\"color:";
                        echo ((twig_get_attribute($this->env, $this->source, $context["answer"], "getIsCorrect", [], "method", false, false, false, 24)) ? ("green") : ("red"));
                        echo "\">
                                ";
                        // line 25
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "answer", [], "any", false, false, false, 25), "html", null, true);
                        echo "
                            </li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 28
                    echo "                    ";
                } else {
                    // line 29
                    echo "                        <div style=\"color:red\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The user did not answered this question"), "html", null, true);
                    echo "</div>
                    ";
                }
                // line 31
                echo "                </ul>
                <div class=\"text_info\">Correct answers :</div>
                <ul class=\"answer_statement\">
                    ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["questionItem"], "answers", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                    // line 35
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["answer"], "isCorrect", [], "any", false, false, false, 35)) {
                        // line 36
                        echo "                            <li>
                                ";
                        // line 37
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "answer", [], "any", false, false, false, 37), "html", null, true);
                        echo "
                            </li>
                        ";
                    }
                    // line 40
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "                </ul>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questionItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </div>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/surveyanswer/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 44,  206 => 43,  199 => 41,  193 => 40,  187 => 37,  184 => 36,  181 => 35,  177 => 34,  172 => 31,  166 => 29,  163 => 28,  154 => 25,  149 => 24,  144 => 23,  142 => 22,  134 => 19,  131 => 18,  128 => 17,  125 => 16,  122 => 15,  118 => 14,  112 => 13,  109 => 12,  106 => 11,  103 => 10,  100 => 9,  96 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Details of answers{% endblock %}

{% block body %}
    <h3 class=\"details_title\">Answers of {{ firstname }} {{ lastname }} </h3>
    <div class=\"container-fluid\">
        {% for categoryItem in categories %}
            {% set categoryName = categoryItem.category.name %}
            {% set categoryScore = score.scoreCategories[categoryItem.id] %}
            {% set categoryMax = score.maxCategories[categoryItem.id] %}

            <h5 class=\"category_title\">{{ categoryName }} ({{ categoryScore ~ ' / ' ~ categoryMax }})</h5>
            {% for questionItem in categoryItem.category.questions %}
                {% set questionName = questionItem.question %}
                {% set questionScore =  score.scoreQuestions[questionItem.id] %}
                {% set questionMax = score.maxQuestions[questionItem.id] %}

                <h6 class=\"question_statement\">{{ questionName }} ({{ questionScore ~ ' / ' ~ questionMax }}):</h6>
                <div class=\"text_info\">Answers of the user :</div>
                <ul class=\"answer_statement\">
                    {% if data[categoryItem.category.id]['questions'][questionItem.id] is defined %}
                        {% for answer in data[categoryItem.category.id]['questions'][questionItem.id].answers %}
                            <li style=\"color:{{ answer.getIsCorrect() ? 'green' : 'red' }}\">
                                {{ answer.answer }}
                            </li>
                        {% endfor %}
                    {% else %}
                        <div style=\"color:red\">{{ 'The user did not answered this question'|trans }}</div>
                    {% endif %}
                </ul>
                <div class=\"text_info\">Correct answers :</div>
                <ul class=\"answer_statement\">
                    {% for answer in questionItem.answers %}
                        {% if answer.isCorrect %}
                            <li>
                                {{ answer.answer }}
                            </li>
                        {% endif %}
                    {% endfor %}
                </ul>
            {% endfor %}
        {% endfor %}
    </div>
    </div>
    </div>
{% endblock %}", "admin/surveyanswer/details.html.twig", "/Users/mpo/Documents/TEI/mysurvey/symfony/templates/admin/surveyanswer/details.html.twig");
    }
}
