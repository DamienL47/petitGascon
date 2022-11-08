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

/* home.html.twig */
class __TwigTemplate_403faeca10231cd685cd45db19257844f3f05f70e952ea0160ce002fcf03ca91 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
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

        echo " Accueil ";
        
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
        echo "        <h2 class=\"text text_front size\">Bar Restaurant</h2>
    <div class=\"titre_accueil\">
        <h1 class=\"text surligne\">Le Moulin du Petit Gascon</h1>
        <img  class=\"logoFaitMaison\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_fait_maison.png"), "html", null, true);
        echo "\" alt=\"Logo fait maison\">
    </div>
    <section class=\"slider\">
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-bs-ride=\"true\">
            <div class=\"carousel-indicators\">
                <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"3\" aria-label=\"Slide 4\"></button>
                <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"4\" aria-label=\"Slide 5\"></button>
                <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"5\" aria-label=\"Slide 6\"></button>
            </div>
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/img_terrasse.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"Terrasse du restaurant\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/img_gambas.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"Gambas géante\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/img_rillette.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"rillette maison\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/img_tatin.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"tatin coing foie gras\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/img_cepes.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"cèpes frais\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/img_courge.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"courges du jardin\">
                </div>
            </div>
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>
        </div>
    </section>
    <div class=\"valeurs\">
        <h2 class=\"text text_front size\"> <span class=\"line_value\">Nos Valeurs</span></h2>
    </div>
    <section class=\"container\">
        <div class=\"bloc_container\">
            <div class=\"bloc_home\">
                <h3 class=\"text text_front size\"><span class=\"line_1\">Produit Frais</span> </h3>
                <img class=\"content_article\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/img_courge.png"), "html", null, true);
        echo "\" alt=\"Courge du jardin\">
                <p class=\"text_box\">Le chef vous propose une cuisine traditionnelle raffinée, élaborée avec des produits frais, de saison dans un décor coloré, au bord du gers.
                En été, une térrasse sur l'écluse vous accueille dans un un décors de nature au son de l'eau. Un cadre calme et apaisant pour bien manger.</p>
            </div>
            <div class=\"bloc_home\">
                <h3 class=\"text text_front size\"><span class=\"line_2\">Fait Maison</span> </h3>
                <img class=\"content_article\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/img_tatin.png"), "html", null, true);
        echo "\" alt=\"Tarte tatin salée\">
                <p class=\"text_box\">La mention \"Fait Maison\" est un engagement, ce n'est pas un simple logo que nous mettons en avant mais un savoir faire et notre engagement dans un service de qualité.
                </p>
            </div>
            <div class=\"bloc_home\">
                <h3 class=\"text text_front size\"><span class=\"line_3\">Qualité/Prix</span> </h3>
                <img class=\"content_article\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/jardin.png"), "html", null, true);
        echo "\" alt=\"image potager\">
                <p class=\"text_box\">C'est en cultivant la plus grande partie de nos légumes que nous pouvons appliquer un tarif abordable et garantir la qualité de nos plats en conservant toutes les saveurs de la nature.<br>
                    <strong>Nos légumes sont cultivés sans pesticide !</strong> </p>
            </div>
        </div>

    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 70,  172 => 64,  163 => 58,  140 => 38,  134 => 35,  128 => 32,  122 => 29,  116 => 26,  110 => 23,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Accueil {% endblock %}

{% block main %}
        <h2 class=\"text text_front size\">Bar Restaurant</h2>
    <div class=\"titre_accueil\">
        <h1 class=\"text surligne\">Le Moulin du Petit Gascon</h1>
        <img  class=\"logoFaitMaison\" src=\"{{ asset('assets/img/logo_fait_maison.png') }}\" alt=\"Logo fait maison\">
    </div>
    <section class=\"slider\">
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-bs-ride=\"true\">
            <div class=\"carousel-indicators\">
                <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"3\" aria-label=\"Slide 4\"></button>
                <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"4\" aria-label=\"Slide 5\"></button>
                <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"5\" aria-label=\"Slide 6\"></button>
            </div>
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img src=\"{{ asset('assets/img/img_terrasse.png') }}\" class=\"d-block w-100\" alt=\"Terrasse du restaurant\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"{{ asset('assets/img/img_gambas.png') }}\" class=\"d-block w-100\" alt=\"Gambas géante\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"{{ asset('assets/img/img_rillette.png') }}\" class=\"d-block w-100\" alt=\"rillette maison\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"{{ asset('assets/img/img_tatin.png') }}\" class=\"d-block w-100\" alt=\"tatin coing foie gras\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"{{ asset('assets/img/img_cepes.png') }}\" class=\"d-block w-100\" alt=\"cèpes frais\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"{{ asset('assets/img/img_courge.png') }}\" class=\"d-block w-100\" alt=\"courges du jardin\">
                </div>
            </div>
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>
        </div>
    </section>
    <div class=\"valeurs\">
        <h2 class=\"text text_front size\"> <span class=\"line_value\">Nos Valeurs</span></h2>
    </div>
    <section class=\"container\">
        <div class=\"bloc_container\">
            <div class=\"bloc_home\">
                <h3 class=\"text text_front size\"><span class=\"line_1\">Produit Frais</span> </h3>
                <img class=\"content_article\" src=\"{{ asset('assets/img/img_courge.png') }}\" alt=\"Courge du jardin\">
                <p class=\"text_box\">Le chef vous propose une cuisine traditionnelle raffinée, élaborée avec des produits frais, de saison dans un décor coloré, au bord du gers.
                En été, une térrasse sur l'écluse vous accueille dans un un décors de nature au son de l'eau. Un cadre calme et apaisant pour bien manger.</p>
            </div>
            <div class=\"bloc_home\">
                <h3 class=\"text text_front size\"><span class=\"line_2\">Fait Maison</span> </h3>
                <img class=\"content_article\" src=\"{{ asset('assets/img/img_tatin.png') }}\" alt=\"Tarte tatin salée\">
                <p class=\"text_box\">La mention \"Fait Maison\" est un engagement, ce n'est pas un simple logo que nous mettons en avant mais un savoir faire et notre engagement dans un service de qualité.
                </p>
            </div>
            <div class=\"bloc_home\">
                <h3 class=\"text text_front size\"><span class=\"line_3\">Qualité/Prix</span> </h3>
                <img class=\"content_article\" src=\"{{ asset('assets/img/jardin.png') }}\" alt=\"image potager\">
                <p class=\"text_box\">C'est en cultivant la plus grande partie de nos légumes que nous pouvons appliquer un tarif abordable et garantir la qualité de nos plats en conservant toutes les saveurs de la nature.<br>
                    <strong>Nos légumes sont cultivés sans pesticide !</strong> </p>
            </div>
        </div>

    </section>
{% endblock %}




", "home.html.twig", "/Applications/MAMP/htdocs/petitGascon/templates/home.html.twig");
    }
}
