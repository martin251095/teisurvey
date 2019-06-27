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

/* site/quiz/thanks.html.twig */
class __TwigTemplate_34996734634a6c3901236aeb5b3eed1ce02ec2cb282fe78a6a07e404a121a854 extends \Twig\Template
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
        return "site/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/quiz/thanks.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/quiz/thanks.html.twig"));

        $this->parent = $this->loadTemplate("site/base.html.twig", "site/quiz/thanks.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("survey.title"), "html", null, true);
        
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
        echo "    <div class=\"wrapper\">
        <div class=\"container\">
            <h5 class=\"thanks text-center\">
                ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("survey.thanks.text"), "html", null, true);
        echo "
            </h5>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categoryItem"]) {
            // line 15
            echo "            ";
            $context["categoryName"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categoryItem"], "category", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15);
            // line 16
            echo "            ";
            $context["categoryScore"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 16, $this->source); })()), "scoreCategories", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, $context["categoryItem"], "id", [], "any", false, false, false, 16), [], "array", false, false, false, 16);
            // line 17
            echo "            ";
            $context["categoryMax"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 17, $this->source); })()), "maxCategories", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, $context["categoryItem"], "id", [], "any", false, false, false, 17), [], "array", false, false, false, 17);
            // line 18
            echo "
            <h5 class=\"category_title\">";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["categoryName"]) || array_key_exists("categoryName", $context) ? $context["categoryName"] : (function () { throw new RuntimeError('Variable "categoryName" does not exist.', 19, $this->source); })()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, (((isset($context["categoryScore"]) || array_key_exists("categoryScore", $context) ? $context["categoryScore"] : (function () { throw new RuntimeError('Variable "categoryScore" does not exist.', 19, $this->source); })()) . " / ") . (isset($context["categoryMax"]) || array_key_exists("categoryMax", $context) ? $context["categoryMax"] : (function () { throw new RuntimeError('Variable "categoryMax" does not exist.', 19, $this->source); })())), "html", null, true);
            echo ")</h5>
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categoryItem"], "category", [], "any", false, false, false, 20), "questions", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["questionItem"]) {
                // line 21
                echo "                ";
                $context["questionName"] = twig_get_attribute($this->env, $this->source, $context["questionItem"], "question", [], "any", false, false, false, 21);
                // line 22
                echo "                ";
                $context["questionScore"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 22, $this->source); })()), "scoreQuestions", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, $context["questionItem"], "id", [], "any", false, false, false, 22), [], "array", false, false, false, 22);
                // line 23
                echo "                ";
                $context["questionMax"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 23, $this->source); })()), "maxQuestions", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, $context["questionItem"], "id", [], "any", false, false, false, 23), [], "array", false, false, false, 23);
                // line 24
                echo "
                <h6 class=\"question_statement\">";
                // line 25
                echo twig_escape_filter($this->env, (isset($context["questionName"]) || array_key_exists("questionName", $context) ? $context["questionName"] : (function () { throw new RuntimeError('Variable "questionName" does not exist.', 25, $this->source); })()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, (((isset($context["questionScore"]) || array_key_exists("questionScore", $context) ? $context["questionScore"] : (function () { throw new RuntimeError('Variable "questionScore" does not exist.', 25, $this->source); })()) . " / ") . (isset($context["questionMax"]) || array_key_exists("questionMax", $context) ? $context["questionMax"] : (function () { throw new RuntimeError('Variable "questionMax" does not exist.', 25, $this->source); })())), "html", null, true);
                echo "):</h6>
                <div class=\"text_info\">Answers of the user :</div>
                <ul class=\"answer_statement\">
                    ";
                // line 28
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categoryItem"], "category", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28), [], "array", false, true, false, 28), "questions", [], "array", false, true, false, 28), twig_get_attribute($this->env, $this->source, $context["questionItem"], "id", [], "any", false, false, false, 28), [], "array", true, true, false, 28)) {
                    // line 29
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categoryItem"], "category", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), [], "array", false, false, false, 29), "questions", [], "array", false, false, false, 29), twig_get_attribute($this->env, $this->source, $context["questionItem"], "id", [], "any", false, false, false, 29), [], "array", false, false, false, 29), "answers", [], "any", false, false, false, 29));
                    foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                        // line 30
                        echo "                            <li style=\"color:";
                        echo ((twig_get_attribute($this->env, $this->source, $context["answer"], "getIsCorrect", [], "method", false, false, false, 30)) ? ("green") : ("red"));
                        echo "\">
                                ";
                        // line 31
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "answer", [], "any", false, false, false, 31), "html", null, true);
                        echo "
                            </li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "                    ";
                } else {
                    // line 35
                    echo "                        <div style=\"color:red\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The user did not answered this question"), "html", null, true);
                    echo "</div>
                    ";
                }
                // line 37
                echo "                </ul>
                <div class=\"text_info\">Correct answers :</div>
                <ul class=\"answer_statement\">
                    ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["questionItem"], "answers", [], "any", false, false, false, 40));
                foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                    // line 41
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["answer"], "isCorrect", [], "any", false, false, false, 41)) {
                        // line 42
                        echo "                            <li>
                                ";
                        // line 43
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "answer", [], "any", false, false, false, 43), "html", null, true);
                        echo "
                            </li>
                        ";
                    }
                    // line 46
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                </ul>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questionItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/quiz/thanks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 50,  211 => 49,  204 => 47,  198 => 46,  192 => 43,  189 => 42,  186 => 41,  182 => 40,  177 => 37,  171 => 35,  168 => 34,  159 => 31,  154 => 30,  149 => 29,  147 => 28,  139 => 25,  136 => 24,  133 => 23,  130 => 22,  127 => 21,  123 => 20,  117 => 19,  114 => 18,  111 => 17,  108 => 16,  105 => 15,  101 => 14,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'site/base.html.twig' %}

{% block title %}{{ 'survey.title' | trans }}{% endblock %}

{% block body %}
    <div class=\"wrapper\">
        <div class=\"container\">
            <h5 class=\"thanks text-center\">
                {{ 'survey.thanks.text' | trans }}
            </h5>
        </div>
    </div>
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
{% endblock %}
", "site/quiz/thanks.html.twig", "/Users/mpo/Documents/TEIFINAL/symfony/templates/site/quiz/thanks.html.twig");
    }
}
