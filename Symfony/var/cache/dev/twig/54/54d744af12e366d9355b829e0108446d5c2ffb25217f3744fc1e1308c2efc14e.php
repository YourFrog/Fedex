<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_904237262ba5970aee40e4435f9796cac88803bbe84dab0b2be86b44bf36b6fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_6744adab41c0fd4ce4eaff515e36421180be218ba2af8ecbd2e29b756ab50005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6744adab41c0fd4ce4eaff515e36421180be218ba2af8ecbd2e29b756ab50005->enter($__internal_6744adab41c0fd4ce4eaff515e36421180be218ba2af8ecbd2e29b756ab50005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_fea40e215a9734be846c6719d9980c299cde38845437c7c4f01853b10ef54531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea40e215a9734be846c6719d9980c299cde38845437c7c4f01853b10ef54531->enter($__internal_fea40e215a9734be846c6719d9980c299cde38845437c7c4f01853b10ef54531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6744adab41c0fd4ce4eaff515e36421180be218ba2af8ecbd2e29b756ab50005->leave($__internal_6744adab41c0fd4ce4eaff515e36421180be218ba2af8ecbd2e29b756ab50005_prof);

        
        $__internal_fea40e215a9734be846c6719d9980c299cde38845437c7c4f01853b10ef54531->leave($__internal_fea40e215a9734be846c6719d9980c299cde38845437c7c4f01853b10ef54531_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14af6e58b1de11322f2fdd18594ff8d4123cc24baad45c33669fc99d0db6c78b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14af6e58b1de11322f2fdd18594ff8d4123cc24baad45c33669fc99d0db6c78b->enter($__internal_14af6e58b1de11322f2fdd18594ff8d4123cc24baad45c33669fc99d0db6c78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d36affbd84ca96192e77e2895f3d55a652a3215b08bfee9781d84f6a59f5f890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36affbd84ca96192e77e2895f3d55a652a3215b08bfee9781d84f6a59f5f890->enter($__internal_d36affbd84ca96192e77e2895f3d55a652a3215b08bfee9781d84f6a59f5f890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_d36affbd84ca96192e77e2895f3d55a652a3215b08bfee9781d84f6a59f5f890->leave($__internal_d36affbd84ca96192e77e2895f3d55a652a3215b08bfee9781d84f6a59f5f890_prof);

        
        $__internal_14af6e58b1de11322f2fdd18594ff8d4123cc24baad45c33669fc99d0db6c78b->leave($__internal_14af6e58b1de11322f2fdd18594ff8d4123cc24baad45c33669fc99d0db6c78b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "/windows/symfony/example/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
