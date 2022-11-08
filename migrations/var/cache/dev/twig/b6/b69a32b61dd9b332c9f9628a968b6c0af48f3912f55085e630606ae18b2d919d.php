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

/* admin/pdf/pdf.html.twig */
class __TwigTemplate_0f6d4c9adede0abaa19ef1239513f27cab5c5eefcf63dc46264099aab38c1bfb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/pdf.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"UTF-8\">
    <title> ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 6, $this->source); })()), "titre", [], "any", false, false, false, 6), "html", null, true);
        echo " Pdf </title>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/stylePdf.css")), "html", null, true);
        echo "\">
</head>

";
        // line 10
        $this->displayBlock('main', $context, $blocks);
        // line 73
        $this->displayBlock('footer', $context, $blocks);
        // line 79
        echo "</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 11
        echo "    <div class=\"menu\">
        <img class=\"logo_resto\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_petit_gascon.png")), "html", null, true);
        echo "\" alt=\"\">
            ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 13, $this->source); })()), "image", [], "any", false, false, false, 13)) {
            // line 14
            echo "                <img class=\"image_menu_pdf\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 14, $this->source); })()), "image", [], "any", false, false, false, 14)))), "html", null, true);
            echo "\" alt=\"\">
            ";
        }
        // line 16
        echo "        <div class=\"titre\">
            ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 17, $this->source); })()), "prix", [], "any", false, false, false, 17)) {
            // line 18
            echo "               <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 18, $this->source); })()), "titre", [], "any", false, false, false, 18), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 18, $this->source); })()), "prix", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
            ";
        } else {
            // line 20
            echo "                <p> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 20, $this->source); })()), "titre", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
            ";
        }
        // line 22
        echo "        </div>
        <div class=\"description\">
            ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24)) {
            // line 25
            echo "                <p> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
            ";
        }
        // line 27
        echo "        </div>
        <div class=\"entree\">
            ";
        // line 29
        if ((isset($context["entree"]) || array_key_exists("entree", $context) ? $context["entree"] : (function () { throw new RuntimeError('Variable "entree" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "                <p class=\"titre_categorie\"><span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entree"]) || array_key_exists("entree", $context) ? $context["entree"] : (function () { throw new RuntimeError('Variable "entree" does not exist.', 30, $this->source); })()), "titre", [], "any", false, false, false, 30), "html", null, true);
            echo " au choix</span></p>
                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 31, $this->source); })()), "idMet", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["met"]) {
                // line 32
                echo "                    ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["met"], "categoryId", [], "any", false, false, false, 32), "1"))) {
                    // line 33
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["met"], "prix", [], "any", false, false, false, 33)) {
                        // line 34
                        echo "                            <p class=\"met\"> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["met"], "titre", [], "any", false, false, false, 34), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["met"], "prix", [], "any", false, false, false, 34), "html", null, true);
                        echo " </p>
                        ";
                    } else {
                        // line 36
                        echo "                            <p class=\"met\"> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["met"], "titre", [], "any", false, false, false, 36), "html", null, true);
                        echo " </p>
                        ";
                    }
                    // line 38
                    echo "                    ";
                }
                // line 39
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['met'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "            ";
        }
        // line 41
        echo "        </div>
        <div class=\"plat\">
            ";
        // line 43
        if ((isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "                <p class=\"titre_categorie\"><span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 44, $this->source); })()), "titre", [], "any", false, false, false, 44), "html", null, true);
            echo " au choix</span> </p>
                ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 45, $this->source); })()), "idMet", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["met"]) {
                // line 46
                echo "                    ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["met"], "categoryId", [], "any", false, false, false, 46), "2"))) {
                    // line 47
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["met"], "prix", [], "any", false, false, false, 47)) {
                        // line 48
                        echo "                            <p class=\"met\"> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["met"], "titre", [], "any", false, false, false, 48), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["met"], "prix", [], "any", false, false, false, 48), "html", null, true);
                        echo " </p>
                        ";
                    } else {
                        // line 50
                        echo "                            <p class=\"met\"> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["met"], "titre", [], "any", false, false, false, 50), "html", null, true);
                        echo " </p>
                        ";
                    }
                    // line 52
                    echo "                    ";
                }
                // line 53
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['met'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "            ";
        }
        // line 55
        echo "        </div>
        <div class=\"dessert\">
            ";
        // line 57
        if ((isset($context["dessert"]) || array_key_exists("dessert", $context) ? $context["dessert"] : (function () { throw new RuntimeError('Variable "dessert" does not exist.', 57, $this->source); })())) {
            // line 58
            echo "                <p class=\"titre_categorie\"><span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dessert"]) || array_key_exists("dessert", $context) ? $context["dessert"] : (function () { throw new RuntimeError('Variable "dessert" does not exist.', 58, $this->source); })()), "titre", [], "any", false, false, false, 58), "html", null, true);
            echo " au choix</span>  </p>
                ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 59, $this->source); })()), "idMet", [], "any", false, false, false, 59));
            foreach ($context['_seq'] as $context["_key"] => $context["met"]) {
                // line 60
                echo "                    ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["met"], "categoryId", [], "any", false, false, false, 60), "3"))) {
                    // line 61
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["met"], "prix", [], "any", false, false, false, 61)) {
                        // line 62
                        echo "                            <p class=\"met\"> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["met"], "titre", [], "any", false, false, false, 62), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["met"], "prix", [], "any", false, false, false, 62), "html", null, true);
                        echo " </p>
                        ";
                    } else {
                        // line 64
                        echo "                            <p class=\"met\"> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["met"], "titre", [], "any", false, false, false, 64), "html", null, true);
                        echo " </p>
                        ";
                    }
                    // line 66
                    echo "                    ";
                }
                // line 67
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['met'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "            ";
        }
        // line 69
        echo "        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 74
        echo "    <div class=\"mention menu\">
        <img width=\"150px\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/fait_maison_nb.png")), "html", null, true);
        echo "\">
        <p>Tous nos plats sont faits maison, à partir de produits bruts et cuisinés sur place. </p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/pdf/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 75,  296 => 74,  286 => 73,  273 => 69,  270 => 68,  264 => 67,  261 => 66,  255 => 64,  247 => 62,  244 => 61,  241 => 60,  237 => 59,  232 => 58,  230 => 57,  226 => 55,  223 => 54,  217 => 53,  214 => 52,  208 => 50,  200 => 48,  197 => 47,  194 => 46,  190 => 45,  185 => 44,  183 => 43,  179 => 41,  176 => 40,  170 => 39,  167 => 38,  161 => 36,  153 => 34,  150 => 33,  147 => 32,  143 => 31,  138 => 30,  136 => 29,  132 => 27,  126 => 25,  124 => 24,  120 => 22,  114 => 20,  106 => 18,  104 => 17,  101 => 16,  95 => 14,  93 => 13,  89 => 12,  86 => 11,  76 => 10,  66 => 79,  64 => 73,  62 => 10,  56 => 7,  52 => 6,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"UTF-8\">
    <title> {{ menu.titre }} Pdf </title>
    <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/css/stylePdf.css')) }}\">
</head>

{% block main %}
    <div class=\"menu\">
        <img class=\"logo_resto\" src=\"{{ absolute_url(asset('assets/img/logo_petit_gascon.png')) }}\" alt=\"\">
            {% if menu.image %}
                <img class=\"image_menu_pdf\" src=\"{{ absolute_url(asset('uploads/images/' ~ menu.image))}}\" alt=\"\">
            {% endif %}
        <div class=\"titre\">
            {% if menu.prix %}
               <p>{{ menu.titre }} {{ menu.prix }}</p>
            {% else %}
                <p> {{ menu.titre }}</p>
            {% endif %}
        </div>
        <div class=\"description\">
            {% if menu.description %}
                <p> {{ menu.description }}</p>
            {% endif %}
        </div>
        <div class=\"entree\">
            {% if entree %}
                <p class=\"titre_categorie\"><span>{{ entree.titre }} au choix</span></p>
                {% for met in menu.idMet %}
                    {% if met.categoryId == '1' %}
                        {% if met.prix %}
                            <p class=\"met\"> {{ met.titre }} {{ met.prix }} </p>
                        {% else %}
                            <p class=\"met\"> {{ met.titre }} </p>
                        {% endif %}
                    {% endif %}
                {% endfor %}
            {% endif %}
        </div>
        <div class=\"plat\">
            {% if plat %}
                <p class=\"titre_categorie\"><span>{{ plat.titre }} au choix</span> </p>
                {% for met in menu.idMet %}
                    {% if met.categoryId == '2' %}
                        {% if met.prix %}
                            <p class=\"met\"> {{ met.titre }} {{ met.prix }} </p>
                        {% else %}
                            <p class=\"met\"> {{ met.titre }} </p>
                        {% endif %}
                    {% endif %}
                {% endfor %}
            {% endif %}
        </div>
        <div class=\"dessert\">
            {% if dessert %}
                <p class=\"titre_categorie\"><span>{{ dessert.titre }} au choix</span>  </p>
                {% for met in menu.idMet %}
                    {% if met.categoryId == '3' %}
                        {% if met.prix %}
                            <p class=\"met\"> {{ met.titre }} {{ met.prix }} </p>
                        {% else %}
                            <p class=\"met\"> {{ met.titre }} </p>
                        {% endif %}
                    {% endif %}
                {% endfor %}
            {% endif %}
        </div>

    </div>
{% endblock %}
{% block footer %}
    <div class=\"mention menu\">
        <img width=\"150px\" src=\"{{ absolute_url(asset('assets/img/fait_maison_nb.png')) }}\">
        <p>Tous nos plats sont faits maison, à partir de produits bruts et cuisinés sur place. </p>
    </div>
{% endblock %}
</html>", "admin/pdf/pdf.html.twig", "/Applications/MAMP/htdocs/petitGascon/templates/admin/pdf/pdf.html.twig");
    }
}
