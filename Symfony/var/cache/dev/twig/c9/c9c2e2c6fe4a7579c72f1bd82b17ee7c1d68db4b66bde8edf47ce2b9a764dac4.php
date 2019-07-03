<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_9fdf12c7a57574a54270741e672423298c1291091fdc4cca767338107eb89cc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bc4b99f5dab7843d6dd6c7d67a46509cd1bb58d1bbf3d0f58a6636bc0311088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bc4b99f5dab7843d6dd6c7d67a46509cd1bb58d1bbf3d0f58a6636bc0311088->enter($__internal_7bc4b99f5dab7843d6dd6c7d67a46509cd1bb58d1bbf3d0f58a6636bc0311088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_dde2261f6d35e4797b379aee0c2a5be80c6e1935dcf24a6a1b037efb8bbacfc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde2261f6d35e4797b379aee0c2a5be80c6e1935dcf24a6a1b037efb8bbacfc8->enter($__internal_dde2261f6d35e4797b379aee0c2a5be80c6e1935dcf24a6a1b037efb8bbacfc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bc4b99f5dab7843d6dd6c7d67a46509cd1bb58d1bbf3d0f58a6636bc0311088->leave($__internal_7bc4b99f5dab7843d6dd6c7d67a46509cd1bb58d1bbf3d0f58a6636bc0311088_prof);

        
        $__internal_dde2261f6d35e4797b379aee0c2a5be80c6e1935dcf24a6a1b037efb8bbacfc8->leave($__internal_dde2261f6d35e4797b379aee0c2a5be80c6e1935dcf24a6a1b037efb8bbacfc8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1ed11444770b0bb334ef4223748c062f32e4848a4648b82afedae779548db8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ed11444770b0bb334ef4223748c062f32e4848a4648b82afedae779548db8b->enter($__internal_b1ed11444770b0bb334ef4223748c062f32e4848a4648b82afedae779548db8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ce89703af132262c96d3d99879d7f7511e93b984a107ff0b1713c83e6ab71e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce89703af132262c96d3d99879d7f7511e93b984a107ff0b1713c83e6ab71e60->enter($__internal_ce89703af132262c96d3d99879d7f7511e93b984a107ff0b1713c83e6ab71e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_ce89703af132262c96d3d99879d7f7511e93b984a107ff0b1713c83e6ab71e60->leave($__internal_ce89703af132262c96d3d99879d7f7511e93b984a107ff0b1713c83e6ab71e60_prof);

        
        $__internal_b1ed11444770b0bb334ef4223748c062f32e4848a4648b82afedae779548db8b->leave($__internal_b1ed11444770b0bb334ef4223748c062f32e4848a4648b82afedae779548db8b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
