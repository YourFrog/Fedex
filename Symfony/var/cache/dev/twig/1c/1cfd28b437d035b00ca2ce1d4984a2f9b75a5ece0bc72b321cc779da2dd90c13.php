<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_4357c9b60989f35ebe6ddf7e4024caa2a73837203dd1b6d1d7692ea889104a2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_c0c7b82be061ad42089dff5a9efe4cd056f82f53e230277df139f11fd7398194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0c7b82be061ad42089dff5a9efe4cd056f82f53e230277df139f11fd7398194->enter($__internal_c0c7b82be061ad42089dff5a9efe4cd056f82f53e230277df139f11fd7398194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_f0612bd4c8b4f4e4c606daf515a862ce8acd2e55733315aad433d33a60db9d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0612bd4c8b4f4e4c606daf515a862ce8acd2e55733315aad433d33a60db9d1c->enter($__internal_f0612bd4c8b4f4e4c606daf515a862ce8acd2e55733315aad433d33a60db9d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0c7b82be061ad42089dff5a9efe4cd056f82f53e230277df139f11fd7398194->leave($__internal_c0c7b82be061ad42089dff5a9efe4cd056f82f53e230277df139f11fd7398194_prof);

        
        $__internal_f0612bd4c8b4f4e4c606daf515a862ce8acd2e55733315aad433d33a60db9d1c->leave($__internal_f0612bd4c8b4f4e4c606daf515a862ce8acd2e55733315aad433d33a60db9d1c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cab5347cb5be415d3ba90d0682fa727b79e31e6ad8b52f2fa48972dca31d5d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cab5347cb5be415d3ba90d0682fa727b79e31e6ad8b52f2fa48972dca31d5d32->enter($__internal_cab5347cb5be415d3ba90d0682fa727b79e31e6ad8b52f2fa48972dca31d5d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_110f5364ead078fe7b27c41e35283418612fbe23d874cfb5cc2bb73a82904f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110f5364ead078fe7b27c41e35283418612fbe23d874cfb5cc2bb73a82904f13->enter($__internal_110f5364ead078fe7b27c41e35283418612fbe23d874cfb5cc2bb73a82904f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_110f5364ead078fe7b27c41e35283418612fbe23d874cfb5cc2bb73a82904f13->leave($__internal_110f5364ead078fe7b27c41e35283418612fbe23d874cfb5cc2bb73a82904f13_prof);

        
        $__internal_cab5347cb5be415d3ba90d0682fa727b79e31e6ad8b52f2fa48972dca31d5d32->leave($__internal_cab5347cb5be415d3ba90d0682fa727b79e31e6ad8b52f2fa48972dca31d5d32_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/windows/symfony/example/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
