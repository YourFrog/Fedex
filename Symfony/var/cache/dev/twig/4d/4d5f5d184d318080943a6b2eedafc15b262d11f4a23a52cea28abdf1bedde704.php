<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_366a502770f3e06bc44482e32dd7629873421b130e79caa61d0477c3eda10cc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_0c980ab37fbb0ee8ac463b21b7f23b8422597f0e976ba5a9bd2a8babfd6f44a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c980ab37fbb0ee8ac463b21b7f23b8422597f0e976ba5a9bd2a8babfd6f44a5->enter($__internal_0c980ab37fbb0ee8ac463b21b7f23b8422597f0e976ba5a9bd2a8babfd6f44a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_a77b7ed4d6a23f71789a5a054ef321c6c9a0934239aeff3785228ccb962c947c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a77b7ed4d6a23f71789a5a054ef321c6c9a0934239aeff3785228ccb962c947c->enter($__internal_a77b7ed4d6a23f71789a5a054ef321c6c9a0934239aeff3785228ccb962c947c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c980ab37fbb0ee8ac463b21b7f23b8422597f0e976ba5a9bd2a8babfd6f44a5->leave($__internal_0c980ab37fbb0ee8ac463b21b7f23b8422597f0e976ba5a9bd2a8babfd6f44a5_prof);

        
        $__internal_a77b7ed4d6a23f71789a5a054ef321c6c9a0934239aeff3785228ccb962c947c->leave($__internal_a77b7ed4d6a23f71789a5a054ef321c6c9a0934239aeff3785228ccb962c947c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0036094fb151f4d28ce367d7737bf933ce1cbc751092194d058208c729136ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0036094fb151f4d28ce367d7737bf933ce1cbc751092194d058208c729136ce->enter($__internal_d0036094fb151f4d28ce367d7737bf933ce1cbc751092194d058208c729136ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6b9b64d546f344da93854a412be855f8ce1a277a6608f60a087bce3dd7b72229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b9b64d546f344da93854a412be855f8ce1a277a6608f60a087bce3dd7b72229->enter($__internal_6b9b64d546f344da93854a412be855f8ce1a277a6608f60a087bce3dd7b72229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_6b9b64d546f344da93854a412be855f8ce1a277a6608f60a087bce3dd7b72229->leave($__internal_6b9b64d546f344da93854a412be855f8ce1a277a6608f60a087bce3dd7b72229_prof);

        
        $__internal_d0036094fb151f4d28ce367d7737bf933ce1cbc751092194d058208c729136ce->leave($__internal_d0036094fb151f4d28ce367d7737bf933ce1cbc751092194d058208c729136ce_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "/windows/symfony/example/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
