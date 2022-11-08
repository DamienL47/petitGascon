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

/* base.html.twig */
class __TwigTemplate_eb8fe917731948b655b1f62703dfdb786a200f40009fad3d3cef3c31adea9ca8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("tarteaucitron/tarteaucitron.js"), "html", null, true);
        echo "\"></script>

        <script>
            tarteaucitron.init({
                \"privacyUrl\": \"\", /* Privacy policy url */
                \"bodyPosition\": \"bottom\", /* or top to bring it as first element for accessibility */

                \"hashtag\": \"#tarteaucitron\", /* Open the panel with this hashtag */
                \"cookieName\": \"tarteaucitron\", /* Cookie name */

                \"orientation\": \"middle\", /* Banner position (top - bottom - middle - popup) */

                \"groupServices\": false, /* Group services by category */
                \"serviceDefaultState\": \"wait\", /* Default state (true - wait - false) */

                \"showAlertSmall\": false, /* Show the small banner on bottom right */
                \"cookieslist\": false, /* Show the cookie list */

                \"showIcon\": true, /* Show cookie icon to manage cookies */
                // \"iconSrc\": \"\", /* Optionnal: URL or base64 encoded image */
                \"iconPosition\": \"BottomRight\", /* Position of the icon between BottomRight, BottomLeft, TopRight and TopLeft */

                \"adblocker\": false, /* Show a Warning if an adblocker is detected */

                \"DenyAllCta\" : true, /* Show the deny all button */
                \"AcceptAllCta\" : true, /* Show the accept all button when highPrivacy on */
                \"highPrivacy\": true, /* HIGHLY RECOMMANDED Disable auto consent */

                \"handleBrowserDNTRequest\": false, /* If Do Not Track == 1, disallow all */

                \"removeCredit\": false, /* Remove credit link */
                \"moreInfoLink\": true, /* Show more info link */
                \"useExternalCss\": false, /* If false, the tarteaucitron.css file will be loaded */
                \"useExternalJs\": false, /* If false, the tarteaucitron.services.js file will be loaded */

                //\"cookieDomain\": \".my-multisite-domaine.fr\", /* Shared cookie for subdomain website */

                \"readmoreLink\": \"\", /* Change the default readmore link pointing to tarteaucitron.io */

                \"mandatory\": true, /* Show a message about mandatory cookies */
                \"mandatoryCta\": true /* Show the disabled accept button when mandatory on */
            });
                (tarteaucitron.job = tarteaucitron.job || []).push('facebooklikebox');
                (tarteaucitron.job = tarteaucitron.job || []).push('googlemaps');
                (tarteaucitron.job = tarteaucitron.job || []).push('recaptcha');
        </script>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 52
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 54
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 60
        echo "    </head>
    <header>
        ";
        // line 62
        $this->displayBlock('header', $context, $blocks);
        // line 79
        echo "    </header>
    <body>
        ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "
    </body>
    <footer>
        ";
        // line 90
        $this->displayBlock('footer', $context, $blocks);
        // line 128
        echo "    </footer>
    ";
        // line 129
        $this->displayBlock('javascripts', $context, $blocks);
        // line 136
        echo "</html>
";
    }

    // line 52
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Bar Restaurant Le Moulin du Petit Gascon";
    }

    // line 54
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
            <!-- Latest compiled and minified CSS -->
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 62
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "                <nav class=\"navBar\">
                    <a class=\"btn_menu accueil\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"> Accueil </a>
                    <a class=\"btn_menu accueil\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_menu_index");
        echo "\"> Nos menus </a>
                    <a class=\"burgerDisable\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\"><img class=\"logoIconeMenu accueil\" title=\"Connexion admin\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_petit_gascon.png"), "html", null, true);
        echo "\" alt=\"Logo Restaurant\"></a>
                    <a class=\"btn_menu accueil\" title=\"Bientôt disponible\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservationOnline");
        echo "\"> Réservation en ligne </a>
                    <a class=\"btn_menu accueil\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\"> Contact </a>
                </nav>
                <div class=\"ifBurger\">
                    <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\"><img class=\"logoIconeMenu\" title=\"Connexion admin\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_petit_gascon.png"), "html", null, true);
        echo "\" alt=\"Logo Restaurant\"></a>
                </div>
                <button type=\"button\" aria-label=\"toggle curtain navigation\" class=\"nav-toggler\">
                <span class=\"line l1\"></span>
                <span class=\"line l2\"></span>
                <span class=\"line l3\"></span>
                </button>
        ";
    }

    // line 81
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "            <div id=\"fb-root\"></div>
            <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v15.0\" nonce=\"E8acaxRE\"></script>
            ";
        // line 84
        $this->displayBlock('main', $context, $blocks);
        // line 86
        echo "        ";
    }

    // line 84
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "            ";
    }

    // line 90
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "            <section class=\"content_footer\">
                <div class=\"box_footer\">
                    <h4 class=\"text_footer\">Nous trouver :</h4>
                    <p class=\"text_footer2\">Chemin de l'argente <br> 32100 CONDOM</p>
                    <div class=\"googlemaps_embed\" id=\"id\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d179.53347712129258!2d0.3654564!3d43.94828320000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b2ed8040b9ca05%3A0x30367826376c71de!2sMoulin%20du%20Petit%20Gascon!5e0!3m2!1sfr!2sfr!4v1665676121605!5m2!1sfr!2sfr\" width=\"200\" height=\"200\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe></div>
                </div>
                <div class=\"box_footer\">
                    <h4 class=\"text_footer\">Nos Horaires :</h4>
                    <p class=\"text_footer\"> Du Mercredi au Lundi </p>
                    <p class=\"text_footer\"> De 12h à 14h30 et de 20h à 22h30 </p>
                    <p class=\"text_footer\"> Fermé le Mardi </p>
                </div>
                <div class=\"box_footer\">
                    <h4 class=\"text_footer\">Nous contacter :</h4>
                    <p class=\"text_footer\"> Infos et réservations </p>
                    <p class=\"text_footer\">Par Téléphone au :<a class=\"text_footer\" href=\"tel:+33581681853\"> 05.81.68.18.53</a></p>
                    <p class=\"text_footer\"> ou par mail à : <a class=\"text_footer\" href=\"mailto:lemoulindupetitgascon@gmail.com\">lemoulindupetitgascon@gmail.com</a> </p>
                </div>
                <div class=\"box_footer\">
                    <p class=\"text_footer2\">
                        Mentions Légales
                    </p>
                    <p class=\"text_footer2\">
                        Politique RGPD
                    </p>
                    <p class=\"text_footer2\">
                        Design et création : Lataste Damien ©
                    </p>
                </div>
                <div class=\"box_footer\">
                    <p class=\"text_footer2\">Suivez-nous sur Facebook</p>
                    <a href=\"https://www.facebook.com/LMPG32/\"><img width=\"250px\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profilfb.png"), "html", null, true);
        echo "\" alt=\"page facebook restaurant\"></a>
                </div>

            </section>

        ";
    }

    // line 129
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        <!-- JavaScript Bundle with Popper -->
        <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/JavaScript/script.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa\" crossorigin=\"anonymous\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 132,  278 => 130,  274 => 129,  264 => 122,  231 => 91,  227 => 90,  223 => 85,  219 => 84,  215 => 86,  213 => 84,  209 => 82,  205 => 81,  191 => 71,  185 => 68,  181 => 67,  175 => 66,  171 => 65,  167 => 64,  164 => 63,  160 => 62,  154 => 58,  147 => 55,  143 => 54,  136 => 52,  131 => 136,  129 => 129,  126 => 128,  124 => 90,  119 => 87,  117 => 81,  113 => 79,  111 => 62,  107 => 60,  105 => 54,  100 => 52,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/Applications/MAMP/htdocs/petitGascon/templates/base.html.twig");
    }
}
