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

/* admin/reservation/MailReservationOk.html.twig */
class __TwigTemplate_2ae3823ce68f934de0226e4eb86ba1a83c7b87a34b5722deed639ebb49f69557 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/MailReservationOk.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/MailReservationOk.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Votre réservation</title>
</head>
<body>
    <h1>Le statut de votre réservation a changé !</h1>

    <h2>Restaurant \"Le moulin du petit gascon\"</h2>

    <p>Cher client,</p>
    <p>Nous sommes ravie de vous informer que votre demande de réservation à bien été prise en compte.</p>
    <p>Votre table vous sera réservé* selon vos souhaits.</p>
    <p><em>*Un retard supérieur à 15min ? Pensez à nous passer un coup de fil sans quoi votre réservation pourra se voir annulée.</em></p>

    <p>Pour rappel, voici les informations prises en compte: </p>

    <p><strong>Nom : </strong> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
    <p><strong>Prénom :</strong> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 23, $this->source); })()), "prenom", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
    <p><strong>Date de réservation : </strong>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 24, $this->source); })()), "dateReservation", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 24, $this->source); })()), "dateReservation", [], "any", false, false, false, 24), "Y-m-d H:i"), "html", null, true))) : (print ("")));
        echo "</p>
    <p><strong>Nombre de personnes :</strong>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 25, $this->source); })()), "nbPersonnes", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
    <p><strong>Demande spécifique :</strong>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 26, $this->source); })()), "contraintes", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
    <strong>Téléphone :</strong><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 27, $this->source); })()), "tel", [], "any", false, false, false, 27), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 27, $this->source); })()), "tel", [], "any", false, false, false, 27), "html", null, true);
        echo "</a>
    <strong>Mail :</strong><a href=\"mailto:";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), "html", null, true);
        echo "</a>

    <p>Pour toutes modifications merci de nous contacter directement au 05.81.68.18.53.</p>

    <p>Toutes l'équipe du restaurant vous souhaite une excellente journée et vous attends prochainement.</p>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/reservation/MailReservationOk.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 28,  86 => 27,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  43 => 1,);
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
    <title>Votre réservation</title>
</head>
<body>
    <h1>Le statut de votre réservation a changé !</h1>

    <h2>Restaurant \"Le moulin du petit gascon\"</h2>

    <p>Cher client,</p>
    <p>Nous sommes ravie de vous informer que votre demande de réservation à bien été prise en compte.</p>
    <p>Votre table vous sera réservé* selon vos souhaits.</p>
    <p><em>*Un retard supérieur à 15min ? Pensez à nous passer un coup de fil sans quoi votre réservation pourra se voir annulée.</em></p>

    <p>Pour rappel, voici les informations prises en compte: </p>

    <p><strong>Nom : </strong> {{ reservation.nom }}</p>
    <p><strong>Prénom :</strong> {{ reservation.prenom }}</p>
    <p><strong>Date de réservation : </strong>{{ reservation.dateReservation ? reservation.dateReservation|date('Y-m-d H:i') : '' }}</p>
    <p><strong>Nombre de personnes :</strong>{{ reservation.nbPersonnes }}</p>
    <p><strong>Demande spécifique :</strong>{{ reservation.contraintes }}</p>
    <strong>Téléphone :</strong><a href=\"{{ reservation.tel }}\">{{ reservation.tel }}</a>
    <strong>Mail :</strong><a href=\"mailto:{{reservation.email}}\">{{reservation.email }}</a>

    <p>Pour toutes modifications merci de nous contacter directement au 05.81.68.18.53.</p>

    <p>Toutes l'équipe du restaurant vous souhaite une excellente journée et vous attends prochainement.</p>

</body>
</html>", "admin/reservation/MailReservationOk.html.twig", "/Applications/MAMP/htdocs/petitGascon/templates/admin/reservation/MailReservationOk.html.twig");
    }
}
