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

/* admin/menu/index.html.twig */
class __TwigTemplate_9ffb2ef18b989e716294720ecff77a78dc98dbcc3f2329faf91ea7ec2784d2a8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/menu/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/menu/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/home.html.twig", "admin/menu/index.html.twig", 1);
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

        echo "Menus";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div class=\"content\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "                <div class=\"message_success\">
                    <p>";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "                <div class=\"message_error\">
                    <p>";
            // line 14
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
        <h1>Liste des Menus</h1>

        <a class=\"connect\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_menu_new");
        echo "\">Créer un nouveau menu</a>

        <table class=\"table\">
            <thead>
                <tr class=\"tableau\">
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Prix</th>
                    <th>Description</th>
                    <th>Publié</th>
                    <th>Image</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 36
            echo "                <tr class=\"tableau\">
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "titre", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "prix", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "description", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                    ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "isPublished", [], "any", false, false, false, 41)) {
                // line 42
                echo "                        <td> Publié </td>
                    ";
            } else {
                // line 44
                echo "                        <td> Non Publié </td>
                    ";
            }
            // line 46
            echo "                        <td>
                        ";
            // line 47
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "image", [], "any", false, false, false, 47)) {
                // line 48
                echo "                            <img class=\"mini\" src=\"";
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/") . twig_get_attribute($this->env, $this->source, $context["menu"], "image", [], "any", false, false, false, 48)), "html", null, true);
                echo "\" alt=\"Image du menu\">
                        ";
            }
            // line 50
            echo "                        </td>
                    <td class=\"bouton-tableau\">
                        <a class=\"connect\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_menu_show", ["id" => twig_get_attribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">Voir</a>
                        <a class=\"connect\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_menu_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\">Editer</a>
                        <a class=\"connect\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_menu_pdf", ["id" => twig_get_attribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\">Imprimer</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "                <tr>
                    <td colspan=\"6\">Aucun menu disponible</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/menu/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 62,  213 => 58,  204 => 54,  200 => 53,  196 => 52,  192 => 50,  186 => 48,  184 => 47,  181 => 46,  177 => 44,  173 => 42,  171 => 41,  167 => 40,  163 => 39,  159 => 38,  155 => 37,  152 => 36,  147 => 35,  129 => 20,  124 => 17,  115 => 14,  112 => 13,  107 => 12,  98 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/home.html.twig' %}

{% block title %}Menus{% endblock %}

{% block main %}
    <div class=\"content\">
            {% for message in app.flashes('success') %}
                <div class=\"message_success\">
                    <p>{{ message }}</p>
                </div>
            {% endfor %}
            {% for message in app.flashes('error') %}
                <div class=\"message_error\">
                    <p>{{ message }}</p>
                </div>
            {% endfor %}

        <h1>Liste des Menus</h1>

        <a class=\"connect\" href=\"{{ path('admin_app_menu_new') }}\">Créer un nouveau menu</a>

        <table class=\"table\">
            <thead>
                <tr class=\"tableau\">
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Prix</th>
                    <th>Description</th>
                    <th>Publié</th>
                    <th>Image</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
            {% for menu in menus %}
                <tr class=\"tableau\">
                    <td>{{ menu.id }}</td>
                    <td>{{ menu.titre }}</td>
                    <td>{{ menu.prix }}</td>
                    <td>{{ menu.description }}</td>
                    {% if menu.isPublished %}
                        <td> Publié </td>
                    {% else %}
                        <td> Non Publié </td>
                    {% endif %}
                        <td>
                        {% if menu.image %}
                            <img class=\"mini\" src=\"{{ asset('uploads/images/') ~ menu.image }}\" alt=\"Image du menu\">
                        {% endif %}
                        </td>
                    <td class=\"bouton-tableau\">
                        <a class=\"connect\" href=\"{{ path('admin_app_menu_show', {'id': menu.id}) }}\">Voir</a>
                        <a class=\"connect\" href=\"{{ path('admin_app_menu_edit', {'id': menu.id}) }}\">Editer</a>
                        <a class=\"connect\" href=\"{{ path('admin_menu_pdf', {'id': menu.id}) }}\">Imprimer</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"6\">Aucun menu disponible</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "admin/menu/index.html.twig", "/Applications/MAMP/htdocs/petitGascon/templates/admin/menu/index.html.twig");
    }
}
