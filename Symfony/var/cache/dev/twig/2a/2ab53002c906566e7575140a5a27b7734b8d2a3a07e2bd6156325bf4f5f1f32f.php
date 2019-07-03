<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_7f5d4561383fb6fbae3fbfafb3ad6cad1af66c468fbd5c14205dc8351c672167 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21ad4dd452603f6f0726bbd6f23c7947c2c928e60beab3580a46910b38080543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21ad4dd452603f6f0726bbd6f23c7947c2c928e60beab3580a46910b38080543->enter($__internal_21ad4dd452603f6f0726bbd6f23c7947c2c928e60beab3580a46910b38080543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_5576d216d4879f6fcc9d9c68508aa977062a9e0a4337d21de31ea5c39323c2ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5576d216d4879f6fcc9d9c68508aa977062a9e0a4337d21de31ea5c39323c2ce->enter($__internal_5576d216d4879f6fcc9d9c68508aa977062a9e0a4337d21de31ea5c39323c2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_21ad4dd452603f6f0726bbd6f23c7947c2c928e60beab3580a46910b38080543->leave($__internal_21ad4dd452603f6f0726bbd6f23c7947c2c928e60beab3580a46910b38080543_prof);

        
        $__internal_5576d216d4879f6fcc9d9c68508aa977062a9e0a4337d21de31ea5c39323c2ce->leave($__internal_5576d216d4879f6fcc9d9c68508aa977062a9e0a4337d21de31ea5c39323c2ce_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "/windows/symfony/example/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
