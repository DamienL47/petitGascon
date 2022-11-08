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
class __TwigTemplate_00076b687b40b1388ffd8513de353059ee1c25f1fbfd625f1f95ab7cd39e35a0 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Accueil ";
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  151 => 70,  142 => 64,  133 => 58,  110 => 38,  104 => 35,  98 => 32,  92 => 29,  86 => 26,  80 => 23,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home.html.twig", "/Applications/MAMP/htdocs/petitGascon/templates/home.html.twig");
    }
}
