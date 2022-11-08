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

/* menu_front/index.html.twig */
class __TwigTemplate_910fe3d494119f075ca286f30f62cb202e4ecd8ccf86fc4989feff8cca363983 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'main' => [$this, 'block_main'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu_front/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu_front/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "menu_front/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"fb-root\"></div>
    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v15.0\" nonce=\"8wCLBRwp\"></script>
    ";
        // line 6
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "        <div class=\"container_menu\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 9
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "isPublished", [], "any", false, false, false, 9)) {
                // line 10
                echo "            <div class=\"menu\">
                ";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "image", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "                    <img class=\"image_menu\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["menu"], "image", [], "any", false, false, false, 12))), "html", null, true);
                    echo "\" alt=\"Image du menu\">
                ";
                }
                // line 14
                echo "                <div class=\"fb-share-button\" data-href=\"https://127.0.0.1:8000/menu/menu\" data-layout=\"button\" data-size=\"small\"><a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2F127.0.0.1%3A8000%2Fmenu%2Fmenu&amp;src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\">Partager</a></div>
                ";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "prix", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "                    <h1> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "titre", [], "any", false, false, false, 16), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "prix", [], "any", false, false, false, 16), "html", null, true);
                    echo " </h1>
                    ";
                    // line 17
                    if (twig_get_attribute($this->env, $this->source, $context["menu"], "description", [], "any", false, false, false, 17)) {
                        // line 18
                        echo "                        <p> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "description", [], "any", false, false, false, 18), "html", null, true);
                        echo "</p>
                    ";
                    }
                    // line 20
                    echo "                ";
                } else {
                    // line 21
                    echo "                    <h1> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "titre", [], "any", false, false, false, 21), "html", null, true);
                    echo "</h1>
                    ";
                    // line 22
                    if (twig_get_attribute($this->env, $this->source, $context["menu"], "description", [], "any", false, false, false, 22)) {
                        // line 23
                        echo "                        <p> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "description", [], "any", false, false, false, 23), "html", null, true);
                        echo "</p>
                    ";
                    }
                    // line 25
                    echo "                ";
                }
                // line 26
                echo "                ";
                if ((isset($context["entree"]) || array_key_exists("entree", $context) ? $context["entree"] : (function () { throw new RuntimeError('Variable "entree" does not exist.', 26, $this->source); })())) {
                    // line 27
                    echo "                    <h3>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entree"]) || array_key_exists("entree", $context) ? $context["entree"] : (function () { throw new RuntimeError('Variable "entree" does not exist.', 27, $this->source); })()), "titre", [], "any", false, false, false, 27), "html", null, true);
                    echo "</h3>
                    ";
                    // line 28
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "idMet", [], "any", false, false, false, 28));
                    foreach ($context['_seq'] as $context["_key"] => $context["met"]) {
                        // line 29
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["met"], "categoryId", [], "any", false, false, false, 29) == "1")) {
                            // line 30
                            echo "                            ";
                            if (twig_get_attribute($this->env, $this->source, $context["met"], "prix", [], "any", false, false, false, 30)) {
                                // line 31
                                echo "                                <p> ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["met"], "titre", [], "any", false, false, false, 31), "html", null, true);
                                echo " ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["met"], "prix", [], "any", false, false, false, 31), "html", null, true);
                                echo " </p>
                            ";
                            } else {
                                // line 33
                                echo "                                <p> ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["met"], "titre", [], "any", false, false, false, 33), "html", null, true);
                                echo " </p>
                            ";
                            }
                            // line 35
                            echo "                        ";
                        }
                        // line 36
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['met'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "                ";
                }
                // line 38
                echo "                ";
                if ((isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 38, $this->source); })())) {
                    // line 39
                    echo "                    <h3>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 39, $this->source); })()), "titre", [], "any", false, false, false, 39), "html", null, true);
                    echo "</h3>
                    ";
                    // line 40
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "idMet", [], "any", false, false, false, 40));
                    foreach ($context['_seq'] as $context["_key"] => $context["met"]) {
                        // line 41
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["met"], "categoryId", [], "any", false, false, false, 41) == "2")) {
                            // line 42
                            echo "                            ";
                            if (twig_get_attribute($this->env, $this->source, $context["met"], "prix", [], "any", false, false, false, 42)) {
                                // line 43
                                echo "                                <p> ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["met"], "titre", [], "any", false, false, false, 43), "html", null, true);
                                echo " ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["met"], "prix", [], "any", false, false, false, 43), "html", null, true);
                                echo " </p>
                            ";
                            } else {
                                // line 45
                                echo "                                <p> ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["met"], "titre", [], "any", false, false, false, 45), "html", null, true);
                                echo " </p>
                            ";
                            }
                            // line 47
                            echo "                        ";
                        }
                        // line 48
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['met'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 49
                    echo "                ";
                }
                // line 50
                echo "                ";
                if ((isset($context["dessert"]) || array_key_exists("dessert", $context) ? $context["dessert"] : (function () { throw new RuntimeError('Variable "dessert" does not exist.', 50, $this->source); })())) {
                    // line 51
                    echo "                    <h3>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dessert"]) || array_key_exists("dessert", $context) ? $context["dessert"] : (function () { throw new RuntimeError('Variable "dessert" does not exist.', 51, $this->source); })()), "titre", [], "any", false, false, false, 51), "html", null, true);
                    echo "</h3>
                    ";
                    // line 52
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "idMet", [], "any", false, false, false, 52));
                    foreach ($context['_seq'] as $context["_key"] => $context["met"]) {
                        // line 53
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["met"], "categoryId", [], "any", false, false, false, 53) == "3")) {
                            // line 54
                            echo "                            ";
                            if (twig_get_attribute($this->env, $this->source, $context["met"], "prix", [], "any", false, false, false, 54)) {
                                // line 55
                                echo "                                <p> ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["met"], "titre", [], "any", false, false, false, 55), "html", null, true);
                                echo " ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["met"], "prix", [], "any", false, false, false, 55), "html", null, true);
                                echo " </p>
                            ";
                            } else {
                                // line 57
                                echo "                                <p> ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["met"], "titre", [], "any", false, false, false, 57), "html", null, true);
                                echo " </p>
                            ";
                            }
                            // line 59
                            echo "                        ";
                        }
                        // line 60
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['met'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo "                ";
                }
                // line 62
                echo "            </div>
            ";
            }
            // line 64
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "menu_front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 65,  288 => 64,  284 => 62,  281 => 61,  275 => 60,  272 => 59,  266 => 57,  258 => 55,  255 => 54,  252 => 53,  248 => 52,  243 => 51,  240 => 50,  237 => 49,  231 => 48,  228 => 47,  222 => 45,  214 => 43,  211 => 42,  208 => 41,  204 => 40,  199 => 39,  196 => 38,  193 => 37,  187 => 36,  184 => 35,  178 => 33,  170 => 31,  167 => 30,  164 => 29,  160 => 28,  155 => 27,  152 => 26,  149 => 25,  143 => 23,  141 => 22,  136 => 21,  133 => 20,  127 => 18,  125 => 17,  118 => 16,  116 => 15,  113 => 14,  107 => 12,  105 => 11,  102 => 10,  99 => 9,  95 => 8,  92 => 7,  73 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'%}

{% block body %}
    <div id=\"fb-root\"></div>
    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v15.0\" nonce=\"8wCLBRwp\"></script>
    {% block main %}
        <div class=\"container_menu\">
        {% for menu in menus %}
            {% if menu.isPublished %}
            <div class=\"menu\">
                {% if menu.image %}
                    <img class=\"image_menu\" src=\"{{ asset('uploads/images/' ~ menu.image)}}\" alt=\"Image du menu\">
                {% endif %}
                <div class=\"fb-share-button\" data-href=\"https://127.0.0.1:8000/menu/menu\" data-layout=\"button\" data-size=\"small\"><a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2F127.0.0.1%3A8000%2Fmenu%2Fmenu&amp;src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\">Partager</a></div>
                {% if menu.prix %}
                    <h1> {{ menu.titre }} {{ menu.prix }} </h1>
                    {% if menu.description %}
                        <p> {{ menu.description }}</p>
                    {% endif %}
                {% else %}
                    <h1> {{ menu.titre }}</h1>
                    {% if menu.description %}
                        <p> {{ menu.description }}</p>
                    {% endif %}
                {% endif %}
                {% if entree %}
                    <h3>{{ entree.titre }}</h3>
                    {% for met in menu.idMet %}
                        {% if met.categoryId == '1' %}
                            {% if met.prix %}
                                <p> {{ met.titre }} {{ met.prix }} </p>
                            {% else %}
                                <p> {{ met.titre }} </p>
                            {% endif %}
                        {% endif %}
                    {% endfor %}
                {% endif %}
                {% if plat %}
                    <h3>{{ plat.titre }}</h3>
                    {% for met in menu.idMet %}
                        {% if met.categoryId == '2' %}
                            {% if met.prix %}
                                <p> {{ met.titre }} {{ met.prix }} </p>
                            {% else %}
                                <p> {{ met.titre }} </p>
                            {% endif %}
                        {% endif %}
                    {% endfor %}
                {% endif %}
                {% if dessert %}
                    <h3>{{ dessert.titre }}</h3>
                    {% for met in menu.idMet %}
                        {% if met.categoryId == '3' %}
                            {% if met.prix %}
                                <p> {{ met.titre }} {{ met.prix }} </p>
                            {% else %}
                                <p> {{ met.titre }} </p>
                            {% endif %}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            </div>
            {% endif %}
        {% endfor %}
        </div>
    {% endblock %}
{% endblock %}
", "menu_front/index.html.twig", "/Applications/MAMP/htdocs/petitGascon/templates/menu_front/index.html.twig");
    }
}
