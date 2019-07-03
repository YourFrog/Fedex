<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_0d44a00a25e7433b453e8d058b983c6610acd51736537a7d78216aae6a7cb3d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea1da5215f7fed2a432e158023d64cb1bb98d649ee2a65ed0fa61a17001e5ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1da5215f7fed2a432e158023d64cb1bb98d649ee2a65ed0fa61a17001e5ac5->enter($__internal_ea1da5215f7fed2a432e158023d64cb1bb98d649ee2a65ed0fa61a17001e5ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_88ef0003e26c409833212067aa32e1d6761d87f01c452cfbc9ce32449e5443e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ef0003e26c409833212067aa32e1d6761d87f01c452cfbc9ce32449e5443e8->enter($__internal_88ef0003e26c409833212067aa32e1d6761d87f01c452cfbc9ce32449e5443e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea1da5215f7fed2a432e158023d64cb1bb98d649ee2a65ed0fa61a17001e5ac5->leave($__internal_ea1da5215f7fed2a432e158023d64cb1bb98d649ee2a65ed0fa61a17001e5ac5_prof);

        
        $__internal_88ef0003e26c409833212067aa32e1d6761d87f01c452cfbc9ce32449e5443e8->leave($__internal_88ef0003e26c409833212067aa32e1d6761d87f01c452cfbc9ce32449e5443e8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2913f521b30e776172dba26bcf582264127751e26fe9787218a21a0110cff37d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2913f521b30e776172dba26bcf582264127751e26fe9787218a21a0110cff37d->enter($__internal_2913f521b30e776172dba26bcf582264127751e26fe9787218a21a0110cff37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8081db1cb92388b716ed29bd7a46300754bf9b4159429c8ed2aab2c271f403bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8081db1cb92388b716ed29bd7a46300754bf9b4159429c8ed2aab2c271f403bf->enter($__internal_8081db1cb92388b716ed29bd7a46300754bf9b4159429c8ed2aab2c271f403bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8081db1cb92388b716ed29bd7a46300754bf9b4159429c8ed2aab2c271f403bf->leave($__internal_8081db1cb92388b716ed29bd7a46300754bf9b4159429c8ed2aab2c271f403bf_prof);

        
        $__internal_2913f521b30e776172dba26bcf582264127751e26fe9787218a21a0110cff37d->leave($__internal_2913f521b30e776172dba26bcf582264127751e26fe9787218a21a0110cff37d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f60f42560a3d501956afa2dc9854f09087d6515abaf56f9a79c6262f85c1dc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f60f42560a3d501956afa2dc9854f09087d6515abaf56f9a79c6262f85c1dc8->enter($__internal_0f60f42560a3d501956afa2dc9854f09087d6515abaf56f9a79c6262f85c1dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ddeac15fc682ac6303c7b649274c52eef8107242b2491bdef7fa4918af18a597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddeac15fc682ac6303c7b649274c52eef8107242b2491bdef7fa4918af18a597->enter($__internal_ddeac15fc682ac6303c7b649274c52eef8107242b2491bdef7fa4918af18a597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_ddeac15fc682ac6303c7b649274c52eef8107242b2491bdef7fa4918af18a597->leave($__internal_ddeac15fc682ac6303c7b649274c52eef8107242b2491bdef7fa4918af18a597_prof);

        
        $__internal_0f60f42560a3d501956afa2dc9854f09087d6515abaf56f9a79c6262f85c1dc8->leave($__internal_0f60f42560a3d501956afa2dc9854f09087d6515abaf56f9a79c6262f85c1dc8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
