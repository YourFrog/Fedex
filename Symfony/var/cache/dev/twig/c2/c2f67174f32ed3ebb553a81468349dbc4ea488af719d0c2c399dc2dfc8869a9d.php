<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_2fd13e5a11b27e034b83d36cb873798463160df5452a7ea762c9331a51865b3c extends Twig_Template
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
        $__internal_99e03d7f19a34adb881bd988c1704fb9bb272844e288b296628f9cf8e987212f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99e03d7f19a34adb881bd988c1704fb9bb272844e288b296628f9cf8e987212f->enter($__internal_99e03d7f19a34adb881bd988c1704fb9bb272844e288b296628f9cf8e987212f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_c458d772c14bac940deb9f58af6c6e7c7d3d681a901a8abdec6cdd65b05ce1a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c458d772c14bac940deb9f58af6c6e7c7d3d681a901a8abdec6cdd65b05ce1a6->enter($__internal_c458d772c14bac940deb9f58af6c6e7c7d3d681a901a8abdec6cdd65b05ce1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99e03d7f19a34adb881bd988c1704fb9bb272844e288b296628f9cf8e987212f->leave($__internal_99e03d7f19a34adb881bd988c1704fb9bb272844e288b296628f9cf8e987212f_prof);

        
        $__internal_c458d772c14bac940deb9f58af6c6e7c7d3d681a901a8abdec6cdd65b05ce1a6->leave($__internal_c458d772c14bac940deb9f58af6c6e7c7d3d681a901a8abdec6cdd65b05ce1a6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_81005f2b45ed59d96431248f63ad4729289557bef64c2894cd19d316c21032b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81005f2b45ed59d96431248f63ad4729289557bef64c2894cd19d316c21032b0->enter($__internal_81005f2b45ed59d96431248f63ad4729289557bef64c2894cd19d316c21032b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dcc62ed20efe8632ce298e752fb3da5f8c98d3fcf8934a33b24f8c33f7c16244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc62ed20efe8632ce298e752fb3da5f8c98d3fcf8934a33b24f8c33f7c16244->enter($__internal_dcc62ed20efe8632ce298e752fb3da5f8c98d3fcf8934a33b24f8c33f7c16244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_dcc62ed20efe8632ce298e752fb3da5f8c98d3fcf8934a33b24f8c33f7c16244->leave($__internal_dcc62ed20efe8632ce298e752fb3da5f8c98d3fcf8934a33b24f8c33f7c16244_prof);

        
        $__internal_81005f2b45ed59d96431248f63ad4729289557bef64c2894cd19d316c21032b0->leave($__internal_81005f2b45ed59d96431248f63ad4729289557bef64c2894cd19d316c21032b0_prof);

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
", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
