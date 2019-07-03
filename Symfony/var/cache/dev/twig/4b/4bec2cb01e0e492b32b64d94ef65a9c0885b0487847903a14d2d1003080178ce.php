<?php

/* app/index/index.html.twig */
class __TwigTemplate_582e76089cb8c2e059faf9c71079d601c0454ecfdf41c840f45a49bf2985be25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/layout.html.twig", "app/index/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "app/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd0e12370836d17efef66c079ae60bf150e838d68d890b34a851e06e92b56f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0e12370836d17efef66c079ae60bf150e838d68d890b34a851e06e92b56f42->enter($__internal_bd0e12370836d17efef66c079ae60bf150e838d68d890b34a851e06e92b56f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/index/index.html.twig"));

        $__internal_ea92c65bec66a309617dc2e4ee02f29a598139574b0e1f00fdc2c34eff6af2d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea92c65bec66a309617dc2e4ee02f29a598139574b0e1f00fdc2c34eff6af2d6->enter($__internal_ea92c65bec66a309617dc2e4ee02f29a598139574b0e1f00fdc2c34eff6af2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/index/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd0e12370836d17efef66c079ae60bf150e838d68d890b34a851e06e92b56f42->leave($__internal_bd0e12370836d17efef66c079ae60bf150e838d68d890b34a851e06e92b56f42_prof);

        
        $__internal_ea92c65bec66a309617dc2e4ee02f29a598139574b0e1f00fdc2c34eff6af2d6->leave($__internal_ea92c65bec66a309617dc2e4ee02f29a598139574b0e1f00fdc2c34eff6af2d6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9331964418151f79f3270eb197a8c0044e61823f40931cdf4df7b3ec04d01af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9331964418151f79f3270eb197a8c0044e61823f40931cdf4df7b3ec04d01af5->enter($__internal_9331964418151f79f3270eb197a8c0044e61823f40931cdf4df7b3ec04d01af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_621a408660e4536fef35277ea0abc3d491018a7653376b236fa1b4d24b4b14bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_621a408660e4536fef35277ea0abc3d491018a7653376b236fa1b4d24b4b14bf->enter($__internal_621a408660e4536fef35277ea0abc3d491018a7653376b236fa1b4d24b4b14bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    Treść strony głównej
";
        
        $__internal_621a408660e4536fef35277ea0abc3d491018a7653376b236fa1b4d24b4b14bf->leave($__internal_621a408660e4536fef35277ea0abc3d491018a7653376b236fa1b4d24b4b14bf_prof);

        
        $__internal_9331964418151f79f3270eb197a8c0044e61823f40931cdf4df7b3ec04d01af5->leave($__internal_9331964418151f79f3270eb197a8c0044e61823f40931cdf4df7b3ec04d01af5_prof);

    }

    public function getTemplateName()
    {
        return "app/index/index.html.twig";
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
        return new Twig_Source("{% extends 'app/layout.html.twig' %}

{% block content %}
    Treść strony głównej
{% endblock %}", "app/index/index.html.twig", "C:\\xampp\\htdocs\\Symfony\\app\\Resources\\views\\app\\index\\index.html.twig");
    }
}
