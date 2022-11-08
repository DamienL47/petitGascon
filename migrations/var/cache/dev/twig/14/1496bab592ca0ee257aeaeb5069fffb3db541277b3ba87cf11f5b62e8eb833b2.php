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

/* admin/home.html.twig */
class __TwigTemplate_963633e01d7af6a3e11b3c5fb2a5d2e9c330e2c7c1be480c7239d7a792df831a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/home.html.twig", 1);
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

        echo " Tableau de bord ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <div class=\"bandeau\">
        <h1>Bienvenue ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "prenom", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Déconnexion</a>
    </div>
    <div class=\"dashboard\">
        <nav class=\"navBarAdmin\">
            <a class=\"onglet\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">🚪  Accueil du site</a>
            <a class=\"onglet\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\">🏠  Tableau de bord </a>
            <a class=\"onglet\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_menu_new");
        echo "\"> 📝  Créer un menu</a>
            <a class=\"onglet\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_list");
        echo "\">📖  Liste des admins</a>
            <a class=\"onglet\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_menu_index");
        echo "\">📖  Liste des menus</a>
            <a class=\"onglet\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_met_index");
        echo "\">📖  Liste des plats</a>
            <a class=\"onglet\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_category_index");
        echo "\">📖  Liste des catégories</a>
            <a class=\"onglet\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_create_admin");
        echo "\">👔  Nouvel Admin</a>
            <a class=\"onglet\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_met_new");
        echo "\">🍽  Ajouter un plat</a>
            <a class=\"onglet\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_category_new");
        echo "\">+  Ajouter une catégorie</a>
            <a class=\"onglet\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_demande_contact");
        echo "\">Voir toutes les demandes de contact</a>
            <a class=\"onglet\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservation_edit_index");
        echo "\">Voir toutes les demandes de réservation</a>
        </nav>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 29
        echo "

    <section class=\"workZone\">
        <div class=\"content\">
            <h2>Tableau de bord️</h2>
            ";
        // line 34
        $this->loadTemplate("modal_message_flash/_modal.html.twig", "admin/home.html.twig", 34)->display($context);
        // line 35
        echo "
            <h3>Vos demandes de réservations à traiter</h3>
            <a class=\"connect\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservation_edit_new");
        echo "\">Créer une réservation</a>
            <div class=\"listContact\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Tel</th>
                        <th>NbPersonnes</th>
                        <th>DateReservation</th>
                        <th>Contraintes</th>
                        <th>Statut</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 55, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 56
            echo "                        <tr>
                            <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                            <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "nom", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                            <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "prenom", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                            <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "email", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                            <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "tel", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "nbPersonnes", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                            <td>";
            // line 63
            ((twig_get_attribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 63)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 63), "d-m-Y H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                            <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "contraintes", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                            ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, $context["reservation"], "statusId", [], "any", false, false, false, 65) == "1")) {
                // line 66
                echo "                                <td><p style=\"color: green\">Validé</p></td>
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 67
$context["reservation"], "statusId", [], "any", false, false, false, 67) == "2")) {
                // line 68
                echo "                                <td><p style=\"color: orange\">En attente</p></td>
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 69
$context["reservation"], "statusId", [], "any", false, false, false, 69) == null)) {
                // line 70
                echo "                                <td><p style=\"color: blue\">à modifier</p></td>
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 71
$context["reservation"], "statusId", [], "any", false, false, false, 71) == "3")) {
                // line 72
                echo "                                <td><p style=\"color: red\">Refusé</p></td>
                            ";
            }
            // line 74
            echo "                            <td>
                                <a class=\"connect\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservation_edit_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\">Voir</a>
                                <a class=\"connect\" href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservation_edit_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\">Éditer</a>
                                ";
            // line 77
            echo twig_include($this->env, $context, "admin/admin_reservation_edit/_delete_form.html.twig");
            echo "
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 81
            echo "                        <tr>
                            <td colspan=\"9\">Pas de réservations en attente</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                    </tbody>
                </table>
            </div>

            <h3>Vos demandes de contact à traiter</h3>

            <div class=\"listContact\">
                <table class=\"table\">
                    <thead>
                    <tr class=\"tableau\">
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Tel</th>
                        <th>Email</th>
                        <th>Sujet</th>
                        <th>Message</th>
                        <th>Date du message</th>
                        <th class=\"lu\">Lu</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["contact"]);
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 108
            echo "                        ";
            if ( !twig_get_attribute($this->env, $this->source, $context["contact"], "lu", [], "any", false, false, false, 108)) {
                // line 109
                echo "                            <tr class=\"tableau\">
                                <td>";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 110), "html", null, true);
                echo "</td>
                                <td>";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "nom", [], "any", false, false, false, 111), "html", null, true);
                echo "</td>
                                <td>";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "prenom", [], "any", false, false, false, 112), "html", null, true);
                echo "</td>
                                <td>";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "tel", [], "any", false, false, false, 113), "html", null, true);
                echo "</td>
                                <td><a href=\"mailto:";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 114), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 114), "html", null, true);
                echo "</a></td>
                                <td>";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "sujet", [], "any", false, false, false, 115), "html", null, true);
                echo "</td>
                                <td>";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "message", [], "any", false, false, false, 116), "html", null, true);
                echo "</td>
                                <td>";
                // line 117
                ((twig_get_attribute($this->env, $this->source, $context["contact"], "createdAt", [], "any", false, false, false, 117)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "createdAt", [], "any", false, false, false, 117), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</td>
                                <td class=\"lu\">
                                    <a class=\"connect\" href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_contact", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 119)]), "html", null, true);
                echo "\">Marquer lu</a>
                                </td>
                            </tr>
                        ";
            }
            // line 123
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 124,  392 => 123,  385 => 119,  380 => 117,  376 => 116,  372 => 115,  366 => 114,  362 => 113,  358 => 112,  354 => 111,  350 => 110,  347 => 109,  344 => 108,  340 => 107,  316 => 85,  307 => 81,  290 => 77,  286 => 76,  282 => 75,  279 => 74,  275 => 72,  273 => 71,  270 => 70,  268 => 69,  265 => 68,  263 => 67,  260 => 66,  258 => 65,  254 => 64,  250 => 63,  246 => 62,  242 => 61,  238 => 60,  234 => 59,  230 => 58,  226 => 57,  223 => 56,  205 => 55,  184 => 37,  180 => 35,  178 => 34,  171 => 29,  161 => 28,  147 => 23,  143 => 22,  139 => 21,  135 => 20,  131 => 19,  127 => 18,  123 => 17,  119 => 16,  115 => 15,  111 => 14,  107 => 13,  103 => 12,  96 => 8,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %} Tableau de bord {% endblock %}

{% block header %}
    <div class=\"bandeau\">
        <h1>Bienvenue {{ app.user.prenom }}</h1>
        <a href=\"{{ path('app_logout') }}\">Déconnexion</a>
    </div>
    <div class=\"dashboard\">
        <nav class=\"navBarAdmin\">
            <a class=\"onglet\" href=\"{{ path('home') }}\">🚪  Accueil du site</a>
            <a class=\"onglet\" href=\"{{ path('admin_dashboard')}}\">🏠  Tableau de bord </a>
            <a class=\"onglet\" href=\"{{ path('admin_app_menu_new')}}\"> 📝  Créer un menu</a>
            <a class=\"onglet\" href=\"{{ path('admin_list')}}\">📖  Liste des admins</a>
            <a class=\"onglet\" href=\"{{ path('admin_app_menu_index')}}\">📖  Liste des menus</a>
            <a class=\"onglet\" href=\"{{ path('admin_app_met_index')}}\">📖  Liste des plats</a>
            <a class=\"onglet\" href=\"{{ path('admin_app_category_index')}}\">📖  Liste des catégories</a>
            <a class=\"onglet\" href=\"{{ path('admin_create_admin')}}\">👔  Nouvel Admin</a>
            <a class=\"onglet\" href=\"{{ path('admin_app_met_new')}}\">🍽  Ajouter un plat</a>
            <a class=\"onglet\" href=\"{{ path('admin_app_category_new')}}\">+  Ajouter une catégorie</a>
            <a class=\"onglet\" href=\"{{ path('liste_demande_contact')}}\">Voir toutes les demandes de contact</a>
            <a class=\"onglet\" href=\"{{ path('app_admin_reservation_edit_index')}}\">Voir toutes les demandes de réservation</a>
        </nav>
    </div>
{% endblock %}

{% block main %}


    <section class=\"workZone\">
        <div class=\"content\">
            <h2>Tableau de bord️</h2>
            {% include 'modal_message_flash/_modal.html.twig' %}

            <h3>Vos demandes de réservations à traiter</h3>
            <a class=\"connect\" href=\"{{ path('app_admin_reservation_edit_new') }}\">Créer une réservation</a>
            <div class=\"listContact\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Tel</th>
                        <th>NbPersonnes</th>
                        <th>DateReservation</th>
                        <th>Contraintes</th>
                        <th>Statut</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for reservation in reservations %}
                        <tr>
                            <td>{{ reservation.id }}</td>
                            <td>{{ reservation.nom }}</td>
                            <td>{{ reservation.prenom }}</td>
                            <td>{{ reservation.email }}</td>
                            <td>{{ reservation.tel }}</td>
                            <td>{{ reservation.nbPersonnes }}</td>
                            <td>{{ reservation.dateReservation ? reservation.dateReservation|date('d-m-Y H:i') : '' }}</td>
                            <td>{{ reservation.contraintes }}</td>
                            {% if reservation.statusId == '1' %}
                                <td><p style=\"color: green\">Validé</p></td>
                            {% elseif reservation.statusId == '2' %}
                                <td><p style=\"color: orange\">En attente</p></td>
                            {% elseif reservation.statusId == null %}
                                <td><p style=\"color: blue\">à modifier</p></td>
                            {% elseif reservation.statusId == '3' %}
                                <td><p style=\"color: red\">Refusé</p></td>
                            {% endif %}
                            <td>
                                <a class=\"connect\" href=\"{{path('app_admin_reservation_edit_show', {id: reservation.id})}}\">Voir</a>
                                <a class=\"connect\" href=\"{{path('app_admin_reservation_edit_edit', {id: reservation.id})}}\">Éditer</a>
                                {{ include('admin/admin_reservation_edit/_delete_form.html.twig') }}
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"9\">Pas de réservations en attente</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>

            <h3>Vos demandes de contact à traiter</h3>

            <div class=\"listContact\">
                <table class=\"table\">
                    <thead>
                    <tr class=\"tableau\">
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Tel</th>
                        <th>Email</th>
                        <th>Sujet</th>
                        <th>Message</th>
                        <th>Date du message</th>
                        <th class=\"lu\">Lu</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for contact in contact %}
                        {% if not contact.lu %}
                            <tr class=\"tableau\">
                                <td>{{ contact.id }}</td>
                                <td>{{ contact.nom }}</td>
                                <td>{{ contact.prenom }}</td>
                                <td>{{ contact.tel }}</td>
                                <td><a href=\"mailto:{{ contact.email }}\">{{ contact.email }}</a></td>
                                <td>{{ contact.sujet }}</td>
                                <td>{{ contact.message }}</td>
                                <td>{{ contact.createdAt ? contact.createdAt|date('Y-m-d') : '' }}</td>
                                <td class=\"lu\">
                                    <a class=\"connect\" href=\"{{path('admin_dashboard_contact', { id: contact.id }) }}\">Marquer lu</a>
                                </td>
                            </tr>
                        {% endif %}
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </section>
{% endblock %}

", "admin/home.html.twig", "/Applications/MAMP/htdocs/petitGascon/templates/admin/home.html.twig");
    }
}
