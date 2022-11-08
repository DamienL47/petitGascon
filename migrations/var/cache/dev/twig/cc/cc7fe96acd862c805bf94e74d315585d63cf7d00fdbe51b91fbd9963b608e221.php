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

/* contact/index.html.twig */
class __TwigTemplate_88db6be4c7b973b659cf14d6763c40814e1a2601bfc414dc25aeb9c187359541 extends Template
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
            'footer' => [$this, 'block_footer'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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

        echo " Petit Gascon - Contact ";
        
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
    <div class=\"contactPage\">
        <div class=\"maps\">
            <h2>Nous trouver :</h2>
            <p>Chemin de l'argente <br> 32100 CONDOM</p>
            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.5340498035416!2d0.3636888151626218!3d43.94831597911227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b2ed8040b9ca05%3A0x30367826376c71de!2sMoulin%20du%20Petit%20Gascon!5e0!3m2!1sfr!2sfr!4v1660041198717!5m2!1sfr!2sfr\" width=\"400\" height=\"400\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
        </div>

        <div class=\"blocContact\">
            <h2>Contactez-nous :</h2>
            <h3><a class=\"tel\" href=\"tel:+33581681853\"> 05.81.68.18.53</a></h3>
            <p>Ou remplissez le formulaire de cette page</p>
        </div>

        <div class=\"blocFormContact\">
            <h3 class=\"text\">Formulaire de contact </h3>
            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["class" => "champsForm"]]);
        echo "

            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), 'label');
        echo "
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), 'widget', ["label" => "Nom", "attr" => ["class" => "champsFormContact"]]);
        echo "
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), 'errors');
        echo "

            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "prenom", [], "any", false, false, false, 31), 'label');
        echo "
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "prenom", [], "any", false, false, false, 32), 'widget', ["label" => "Prenom", "attr" => ["class" => "champsFormContact"]]);
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "prenom", [], "any", false, false, false, 33), 'errors');
        echo "


            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "tel", [], "any", false, false, false, 36), 'label');
        echo "
            ";
        // line 37
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "tel", [], "any", false, false, false, 37), 'errors')) {
            // line 38
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "tel", [], "any", false, false, false, 38), 'help');
            echo "
            ";
        }
        // line 40
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "tel", [], "any", false, false, false, 40), 'widget', ["label" => "Tel", "attr" => ["class" => "champsFormContact"]]);
        echo "
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "tel", [], "any", false, false, false, 41), 'errors');
        echo "

            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'label');
        echo "
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), 'widget', ["label" => "Email", "attr" => ["class" => "champsFormContact"]]);
        echo "
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), 'errors');
        echo "

            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "sujet", [], "any", false, false, false, 47), 'label');
        echo "
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "sujet", [], "any", false, false, false, 48), 'widget', ["label" => "sujet", "attr" => ["class" => "champsFormContact"]]);
        echo "
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "sujet", [], "any", false, false, false, 49), 'errors');
        echo "

            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "message", [], "any", false, false, false, 51), 'label');
        echo "
            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "message", [], "any", false, false, false, 52), 'widget', ["label" => "Message", "attr" => ["class" => "champsFormContact placeCaptcha2"]]);
        echo "
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "message", [], "any", false, false, false, 53), 'errors');
        echo "

            <div class=\"g-recaptcha\" data-sitekey=\"6LfWU34iAAAAAACyJehieXSmo6p1TRtm2I46Ud1z\">
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "captcha", [], "any", false, false, false, 56), 'widget');
        echo "
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "captcha", [], "any", false, false, false, 57), 'errors');
        echo "
            </div>

            <button type=\"submit\" class=\"connect placeCaptcha\">Envoyer</button>

            ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 69
        echo "    <section class=\"content_footer\">
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
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 69,  242 => 68,  227 => 62,  219 => 57,  215 => 56,  209 => 53,  205 => 52,  201 => 51,  196 => 49,  192 => 48,  188 => 47,  183 => 45,  179 => 44,  175 => 43,  170 => 41,  165 => 40,  159 => 38,  157 => 37,  153 => 36,  147 => 33,  143 => 32,  139 => 31,  134 => 29,  130 => 28,  126 => 27,  121 => 25,  103 => 9,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Petit Gascon - Contact {% endblock %}

{% block main %}
    {% for message in app.flashes('success') %}
        {{ message }}
    {% endfor %}

    <div class=\"contactPage\">
        <div class=\"maps\">
            <h2>Nous trouver :</h2>
            <p>Chemin de l'argente <br> 32100 CONDOM</p>
            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.5340498035416!2d0.3636888151626218!3d43.94831597911227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b2ed8040b9ca05%3A0x30367826376c71de!2sMoulin%20du%20Petit%20Gascon!5e0!3m2!1sfr!2sfr!4v1660041198717!5m2!1sfr!2sfr\" width=\"400\" height=\"400\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
        </div>

        <div class=\"blocContact\">
            <h2>Contactez-nous :</h2>
            <h3><a class=\"tel\" href=\"tel:+33581681853\"> 05.81.68.18.53</a></h3>
            <p>Ou remplissez le formulaire de cette page</p>
        </div>

        <div class=\"blocFormContact\">
            <h3 class=\"text\">Formulaire de contact </h3>
            {{ form_start(form, {'attr': {'class': 'champsForm'}}) }}

            {{ form_label(form.nom) }}
            {{ form_widget(form.nom, {'label' : \"Nom\", 'attr': {'class': 'champsFormContact'}}) }}
            {{ form_errors(form.nom) }}

            {{ form_label(form.prenom) }}
            {{ form_widget(form.prenom, {'label' : \"Prenom\", 'attr': {'class': 'champsFormContact'}}) }}
            {{ form_errors(form.prenom) }}


            {{ form_label(form.tel) }}
            {% if form_errors(form.tel) %}
                {{ form_help(form.tel) }}
            {% endif %}
            {{ form_widget(form.tel, {'label' : \"Tel\", 'attr': {'class': 'champsFormContact'}}) }}
            {{ form_errors(form.tel) }}

            {{ form_label(form.email) }}
            {{ form_widget(form.email, {'label' : \"Email\", 'attr': {'class': 'champsFormContact'}}) }}
            {{ form_errors(form.email) }}

            {{ form_label(form.sujet) }}
            {{ form_widget(form.sujet, {'label' : \"sujet\", 'attr': {'class': 'champsFormContact'}}) }}
            {{ form_errors(form.sujet) }}

            {{ form_label(form.message) }}
            {{ form_widget(form.message, {'label' : \"Message\", 'attr': {'class': 'champsFormContact placeCaptcha2'}}) }}
            {{ form_errors(form.message) }}

            <div class=\"g-recaptcha\" data-sitekey=\"6LfWU34iAAAAAACyJehieXSmo6p1TRtm2I46Ud1z\">
                {{form_widget(form.captcha)}}
                {{form_errors(form.captcha)}}
            </div>

            <button type=\"submit\" class=\"connect placeCaptcha\">Envoyer</button>

            {{ form_end(form) }}
        </div>
    </div>

{% endblock %}

{% block footer %}
    <section class=\"content_footer\">
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
    </section>

{% endblock %}
", "contact/index.html.twig", "/Applications/MAMP/htdocs/petitGascon/templates/contact/index.html.twig");
    }
}
