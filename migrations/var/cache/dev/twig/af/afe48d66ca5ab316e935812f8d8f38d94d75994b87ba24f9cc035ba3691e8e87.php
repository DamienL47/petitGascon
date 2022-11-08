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

/* contact/templateMailContact.html.twig */
class __TwigTemplate_14bdf1d7f85dbdb85b9a9d79dbed4b63097b5f59886e3a535c05877621256d60 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/templateMailContact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/templateMailContact.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Demande de contact client</title>
    <style>
        img {
            margin: auto;
        }
        h1 {
            text-align: center;
        }
        .boxContentMail {
            width: 80vw;
            margin: auto;
            border: 1px solid black;
            border-radius: 20px;
            background-color: whitesmoke;
        }
        .contentMail {
            text-align: center;
        }
    </style>
</head>
<header>
    <img width=\"50px\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_petit_gascon.png"), "html", null, true);
        echo "\" alt=\"Logo Restaurant Le Moulin du Petit Gascon\">
    <h1>Nouvelle demande de contact Client</h1>
</header>
<body>
    <div class=\"boxContentMail\">
        <div class=\"contentMail\">
            <h2>";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "</h2>
            <h3>";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["prenom"]) || array_key_exists("prenom", $context) ? $context["prenom"] : (function () { throw new RuntimeError('Variable "prenom" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "</h3>
            <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["tel"]) || array_key_exists("tel", $context) ? $context["tel"] : (function () { throw new RuntimeError('Variable "tel" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["tel"]) || array_key_exists("tel", $context) ? $context["tel"] : (function () { throw new RuntimeError('Variable "tel" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "</a>
            <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "</a>
            <p>";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "</p>
            <p>";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "</p>
        </div>
    </div>
<p>Attention, ce mail est généré automatiquement, merci de ne pas y répondre.</p>
<p> Pour répondre à votre client veuillez cliquer sur son adresse mail ou sur son numéro de téléphone pour le contacter directement par téléphone</p>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contact/templateMailContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 40,  102 => 39,  96 => 38,  90 => 37,  86 => 36,  82 => 35,  73 => 29,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Demande de contact client</title>
    <style>
        img {
            margin: auto;
        }
        h1 {
            text-align: center;
        }
        .boxContentMail {
            width: 80vw;
            margin: auto;
            border: 1px solid black;
            border-radius: 20px;
            background-color: whitesmoke;
        }
        .contentMail {
            text-align: center;
        }
    </style>
</head>
<header>
    <img width=\"50px\" src=\"{{ asset('assets/img/logo_petit_gascon.png') }}\" alt=\"Logo Restaurant Le Moulin du Petit Gascon\">
    <h1>Nouvelle demande de contact Client</h1>
</header>
<body>
    <div class=\"boxContentMail\">
        <div class=\"contentMail\">
            <h2>{{ nom }}</h2>
            <h3>{{ prenom }}</h3>
            <a href=\"{{ tel }}\">{{ tel }}</a>
            <a href=\"{{ email }}\">{{ email }}</a>
            <p>{{ sujet }}</p>
            <p>{{ message }}</p>
        </div>
    </div>
<p>Attention, ce mail est généré automatiquement, merci de ne pas y répondre.</p>
<p> Pour répondre à votre client veuillez cliquer sur son adresse mail ou sur son numéro de téléphone pour le contacter directement par téléphone</p>
</body>
</html>", "contact/templateMailContact.html.twig", "/Applications/MAMP/htdocs/petitGascon/templates/contact/templateMailContact.html.twig");
    }
}
