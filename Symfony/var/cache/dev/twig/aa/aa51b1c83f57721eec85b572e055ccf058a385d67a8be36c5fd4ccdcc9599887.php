<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_e39058c7c360b5e7f9e6d7e3c01c066a3a2069216128df87522a7b6b04dbec53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/layout.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "app/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_789bbacb6cb91a8f95d7c372177d0bd48173198a6cd11a262447a5a55b6189ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789bbacb6cb91a8f95d7c372177d0bd48173198a6cd11a262447a5a55b6189ac->enter($__internal_789bbacb6cb91a8f95d7c372177d0bd48173198a6cd11a262447a5a55b6189ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_526cb67137465d4290db5b0c8e2290bb3357696f3542eabb5b6f58e6f1a66ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_526cb67137465d4290db5b0c8e2290bb3357696f3542eabb5b6f58e6f1a66ba4->enter($__internal_526cb67137465d4290db5b0c8e2290bb3357696f3542eabb5b6f58e6f1a66ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_789bbacb6cb91a8f95d7c372177d0bd48173198a6cd11a262447a5a55b6189ac->leave($__internal_789bbacb6cb91a8f95d7c372177d0bd48173198a6cd11a262447a5a55b6189ac_prof);

        
        $__internal_526cb67137465d4290db5b0c8e2290bb3357696f3542eabb5b6f58e6f1a66ba4->leave($__internal_526cb67137465d4290db5b0c8e2290bb3357696f3542eabb5b6f58e6f1a66ba4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f8065882994628dae11f83f8e699a5d0d129261e715bcad15dde96625acc3ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8065882994628dae11f83f8e699a5d0d129261e715bcad15dde96625acc3ac5->enter($__internal_f8065882994628dae11f83f8e699a5d0d129261e715bcad15dde96625acc3ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6324686ba051a89129ab0f08b9865b4a05b46e913dc0a637971e7000eb1c9ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6324686ba051a89129ab0f08b9865b4a05b46e913dc0a637971e7000eb1c9ba4->enter($__internal_6324686ba051a89129ab0f08b9865b4a05b46e913dc0a637971e7000eb1c9ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_6324686ba051a89129ab0f08b9865b4a05b46e913dc0a637971e7000eb1c9ba4->leave($__internal_6324686ba051a89129ab0f08b9865b4a05b46e913dc0a637971e7000eb1c9ba4_prof);

        
        $__internal_f8065882994628dae11f83f8e699a5d0d129261e715bcad15dde96625acc3ac5->leave($__internal_f8065882994628dae11f83f8e699a5d0d129261e715bcad15dde96625acc3ac5_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_86ffcf2643a06bd5119b388bf86395c4ce00f515f2ee2daaed883f15b1cab94f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86ffcf2643a06bd5119b388bf86395c4ce00f515f2ee2daaed883f15b1cab94f->enter($__internal_86ffcf2643a06bd5119b388bf86395c4ce00f515f2ee2daaed883f15b1cab94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5a94f31d9ec677153471537b4458347a55881235e44b65537d9b7f6f22cb8b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a94f31d9ec677153471537b4458347a55881235e44b65537d9b7f6f22cb8b78->enter($__internal_5a94f31d9ec677153471537b4458347a55881235e44b65537d9b7f6f22cb8b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_5a94f31d9ec677153471537b4458347a55881235e44b65537d9b7f6f22cb8b78->leave($__internal_5a94f31d9ec677153471537b4458347a55881235e44b65537d9b7f6f22cb8b78_prof);

        
        $__internal_86ffcf2643a06bd5119b388bf86395c4ce00f515f2ee2daaed883f15b1cab94f->leave($__internal_86ffcf2643a06bd5119b388bf86395c4ce00f515f2ee2daaed883f15b1cab94f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'app/layout.html.twig' %}

{% block content %}
    {% block fos_user_content %}{% endblock fos_user_content %}
{% endblock %}", "@FOSUser/layout.html.twig", "C:\\xampp\\htdocs\\Symfony\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
