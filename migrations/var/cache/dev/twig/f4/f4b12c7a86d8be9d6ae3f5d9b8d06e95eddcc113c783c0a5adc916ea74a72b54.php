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
class __TwigTemplate_383558da4214830cdbeb49ca619e147950667c3e3d8b7e7f0a395401fe09003f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 52
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bar Restaurant Le Moulin du Petit Gascon";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 82
        echo "            <div id=\"fb-root\"></div>
            <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v15.0\" nonce=\"E8acaxRE\"></script>
            ";
        // line 84
        $this->displayBlock('main', $context, $blocks);
        // line 86
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 85
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  374 => 132,  368 => 130,  358 => 129,  342 => 122,  309 => 91,  299 => 90,  289 => 85,  279 => 84,  269 => 86,  267 => 84,  263 => 82,  253 => 81,  233 => 71,  227 => 68,  223 => 67,  217 => 66,  213 => 65,  209 => 64,  206 => 63,  196 => 62,  184 => 58,  177 => 55,  167 => 54,  148 => 52,  137 => 136,  135 => 129,  132 => 128,  130 => 90,  125 => 87,  123 => 81,  119 => 79,  117 => 62,  113 => 60,  111 => 54,  106 => 52,  55 => 4,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <script src=\"{{ asset('tarteaucitron/tarteaucitron.js')}}\"></script>

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
        <title>{% block title %}Bar Restaurant Le Moulin du Petit Gascon{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
            <!-- Latest compiled and minified CSS -->
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
        {% endblock %}
    </head>
    <header>
        {% block header %}
                <nav class=\"navBar\">
                    <a class=\"btn_menu accueil\" href=\"{{ path('home') }}\"> Accueil </a>
                    <a class=\"btn_menu accueil\" href=\"{{ path('app_menu_index') }}\"> Nos menus </a>
                    <a class=\"burgerDisable\" href=\"{{ path('admin_dashboard') }}\"><img class=\"logoIconeMenu accueil\" title=\"Connexion admin\" src=\"{{ asset('assets/img/logo_petit_gascon.png') }}\" alt=\"Logo Restaurant\"></a>
                    <a class=\"btn_menu accueil\" title=\"Bientôt disponible\" href=\"{{ path('reservationOnline') }}\"> Réservation en ligne </a>
                    <a class=\"btn_menu accueil\" href=\"{{ path('app_contact')}}\"> Contact </a>
                </nav>
                <div class=\"ifBurger\">
                    <a href=\"{{ path('admin_dashboard') }}\"><img class=\"logoIconeMenu\" title=\"Connexion admin\" src=\"{{ asset('assets/img/logo_petit_gascon.png') }}\" alt=\"Logo Restaurant\"></a>
                </div>
                <button type=\"button\" aria-label=\"toggle curtain navigation\" class=\"nav-toggler\">
                <span class=\"line l1\"></span>
                <span class=\"line l2\"></span>
                <span class=\"line l3\"></span>
                </button>
        {% endblock %}
    </header>
    <body>
        {% block body%}
            <div id=\"fb-root\"></div>
            <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v15.0\" nonce=\"E8acaxRE\"></script>
            {% block main %}
            {% endblock %}
        {% endblock %}

    </body>
    <footer>
        {% block footer %}
            <section class=\"content_footer\">
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
                    <a href=\"https://www.facebook.com/LMPG32/\"><img width=\"250px\" src=\"{{asset('assets/img/profilfb.png')}}\" alt=\"page facebook restaurant\"></a>
                </div>

            </section>

        {% endblock %}
    </footer>
    {% block javascripts %}
        {{ encore_entry_script_tags('app') }}
        <!-- JavaScript Bundle with Popper -->
        <script src=\"{{ asset('assets/JavaScript/script.js') }}\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa\" crossorigin=\"anonymous\"></script>

    {% endblock %}
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/petitGascon/templates/base.html.twig");
    }
}
