<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_2862080c2b469b4ac5dac26fb7dc9979c2d4541f0a424a215a70f9e37f2961c0 extends Twig_Template
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
        $__internal_8306a122c3d9d5fd73256f6ef74f49eef2bc1a4286a6067d5858e96096352c30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8306a122c3d9d5fd73256f6ef74f49eef2bc1a4286a6067d5858e96096352c30->enter($__internal_8306a122c3d9d5fd73256f6ef74f49eef2bc1a4286a6067d5858e96096352c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_b807471970c85853cf3874d8bcd5c4ca38b4649d280a5f302defca83b7cdcb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b807471970c85853cf3874d8bcd5c4ca38b4649d280a5f302defca83b7cdcb6f->enter($__internal_b807471970c85853cf3874d8bcd5c4ca38b4649d280a5f302defca83b7cdcb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8306a122c3d9d5fd73256f6ef74f49eef2bc1a4286a6067d5858e96096352c30->leave($__internal_8306a122c3d9d5fd73256f6ef74f49eef2bc1a4286a6067d5858e96096352c30_prof);

        
        $__internal_b807471970c85853cf3874d8bcd5c4ca38b4649d280a5f302defca83b7cdcb6f->leave($__internal_b807471970c85853cf3874d8bcd5c4ca38b4649d280a5f302defca83b7cdcb6f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_354f98049a27c8ec164497b48feeb6614201e33d68f31db624049ab29b171753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_354f98049a27c8ec164497b48feeb6614201e33d68f31db624049ab29b171753->enter($__internal_354f98049a27c8ec164497b48feeb6614201e33d68f31db624049ab29b171753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a8bafee34390616e65ea14bf2c24c34cc52589c8095f8e2c3b4bdc6dd44ba872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8bafee34390616e65ea14bf2c24c34cc52589c8095f8e2c3b4bdc6dd44ba872->enter($__internal_a8bafee34390616e65ea14bf2c24c34cc52589c8095f8e2c3b4bdc6dd44ba872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_a8bafee34390616e65ea14bf2c24c34cc52589c8095f8e2c3b4bdc6dd44ba872->leave($__internal_a8bafee34390616e65ea14bf2c24c34cc52589c8095f8e2c3b4bdc6dd44ba872_prof);

        
        $__internal_354f98049a27c8ec164497b48feeb6614201e33d68f31db624049ab29b171753->leave($__internal_354f98049a27c8ec164497b48feeb6614201e33d68f31db624049ab29b171753_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1749e47a26f8419923fbac93c1b968138464fb0cc35da6eb5842e18885e10163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1749e47a26f8419923fbac93c1b968138464fb0cc35da6eb5842e18885e10163->enter($__internal_1749e47a26f8419923fbac93c1b968138464fb0cc35da6eb5842e18885e10163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7fd6446a17c605379cbec9369ea51857171c752b60376b136f0080face55eae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd6446a17c605379cbec9369ea51857171c752b60376b136f0080face55eae4->enter($__internal_7fd6446a17c605379cbec9369ea51857171c752b60376b136f0080face55eae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_7fd6446a17c605379cbec9369ea51857171c752b60376b136f0080face55eae4->leave($__internal_7fd6446a17c605379cbec9369ea51857171c752b60376b136f0080face55eae4_prof);

        
        $__internal_1749e47a26f8419923fbac93c1b968138464fb0cc35da6eb5842e18885e10163->leave($__internal_1749e47a26f8419923fbac93c1b968138464fb0cc35da6eb5842e18885e10163_prof);

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
{% endblock %}", "@FOSUser/layout.html.twig", "/windows/symfony/example/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
