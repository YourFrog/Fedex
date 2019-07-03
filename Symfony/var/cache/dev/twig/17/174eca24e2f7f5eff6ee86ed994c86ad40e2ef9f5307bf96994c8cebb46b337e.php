<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_eb80d191727448ff9ad47e988ca3a68b8f2e0e5c98e20175a09c4572f22de941 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e92759fa66647231189eb1d5d005473ad15cc7bdfeb631335156d3111d9bb0e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e92759fa66647231189eb1d5d005473ad15cc7bdfeb631335156d3111d9bb0e7->enter($__internal_e92759fa66647231189eb1d5d005473ad15cc7bdfeb631335156d3111d9bb0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_4fba9c06aa5832e935c128e8883ac98d0283db882acc57647ceacfdba60d7596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fba9c06aa5832e935c128e8883ac98d0283db882acc57647ceacfdba60d7596->enter($__internal_4fba9c06aa5832e935c128e8883ac98d0283db882acc57647ceacfdba60d7596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e92759fa66647231189eb1d5d005473ad15cc7bdfeb631335156d3111d9bb0e7->leave($__internal_e92759fa66647231189eb1d5d005473ad15cc7bdfeb631335156d3111d9bb0e7_prof);

        
        $__internal_4fba9c06aa5832e935c128e8883ac98d0283db882acc57647ceacfdba60d7596->leave($__internal_4fba9c06aa5832e935c128e8883ac98d0283db882acc57647ceacfdba60d7596_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_6b766f7c037c10d4a7f1a34013ce14fdc46f6788857a3186349e40601e95ab8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b766f7c037c10d4a7f1a34013ce14fdc46f6788857a3186349e40601e95ab8f->enter($__internal_6b766f7c037c10d4a7f1a34013ce14fdc46f6788857a3186349e40601e95ab8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fba9c4564ad3d2e802705085cdf336cb19e446c26fdd96fcaa1fa15f91895ad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba9c4564ad3d2e802705085cdf336cb19e446c26fdd96fcaa1fa15f91895ad3->enter($__internal_fba9c4564ad3d2e802705085cdf336cb19e446c26fdd96fcaa1fa15f91895ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 8, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_fba9c4564ad3d2e802705085cdf336cb19e446c26fdd96fcaa1fa15f91895ad3->leave($__internal_fba9c4564ad3d2e802705085cdf336cb19e446c26fdd96fcaa1fa15f91895ad3_prof);

        
        $__internal_6b766f7c037c10d4a7f1a34013ce14fdc46f6788857a3186349e40601e95ab8f->leave($__internal_6b766f7c037c10d4a7f1a34013ce14fdc46f6788857a3186349e40601e95ab8f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block content %}
<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
{% endblock %}
", "@FOSUser/Profile/show.html.twig", "/windows/symfony/example/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
