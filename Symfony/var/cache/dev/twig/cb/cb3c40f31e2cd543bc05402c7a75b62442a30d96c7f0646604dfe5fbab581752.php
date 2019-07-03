<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c05f459994023d5fc7d8baa26130c09db2d4e6ed4bdcb3dfbf2185a05130c20c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee8f1038649c50141b5429b6c7b3647b2acc05d4a8dd9ad5c3762ca431763f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee8f1038649c50141b5429b6c7b3647b2acc05d4a8dd9ad5c3762ca431763f6c->enter($__internal_ee8f1038649c50141b5429b6c7b3647b2acc05d4a8dd9ad5c3762ca431763f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4b96d5ece47102c95ad743cbb6b57c133cf583466074f7c17842de0e6d9039d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b96d5ece47102c95ad743cbb6b57c133cf583466074f7c17842de0e6d9039d7->enter($__internal_4b96d5ece47102c95ad743cbb6b57c133cf583466074f7c17842de0e6d9039d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee8f1038649c50141b5429b6c7b3647b2acc05d4a8dd9ad5c3762ca431763f6c->leave($__internal_ee8f1038649c50141b5429b6c7b3647b2acc05d4a8dd9ad5c3762ca431763f6c_prof);

        
        $__internal_4b96d5ece47102c95ad743cbb6b57c133cf583466074f7c17842de0e6d9039d7->leave($__internal_4b96d5ece47102c95ad743cbb6b57c133cf583466074f7c17842de0e6d9039d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_abf644b9e4b93897e9f44c76c9f0d88a2dcd33e6077ebf5d4509dc9d50d79906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf644b9e4b93897e9f44c76c9f0d88a2dcd33e6077ebf5d4509dc9d50d79906->enter($__internal_abf644b9e4b93897e9f44c76c9f0d88a2dcd33e6077ebf5d4509dc9d50d79906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0df887559732598f649a965a81d9a1ea8a73c71f6134670fe269ee33fe69a0cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df887559732598f649a965a81d9a1ea8a73c71f6134670fe269ee33fe69a0cd->enter($__internal_0df887559732598f649a965a81d9a1ea8a73c71f6134670fe269ee33fe69a0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_0df887559732598f649a965a81d9a1ea8a73c71f6134670fe269ee33fe69a0cd->leave($__internal_0df887559732598f649a965a81d9a1ea8a73c71f6134670fe269ee33fe69a0cd_prof);

        
        $__internal_abf644b9e4b93897e9f44c76c9f0d88a2dcd33e6077ebf5d4509dc9d50d79906->leave($__internal_abf644b9e4b93897e9f44c76c9f0d88a2dcd33e6077ebf5d4509dc9d50d79906_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6efbda767748ee178b7c8c98927446352901440edaaad2f805e7fd94c5fd98cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6efbda767748ee178b7c8c98927446352901440edaaad2f805e7fd94c5fd98cd->enter($__internal_6efbda767748ee178b7c8c98927446352901440edaaad2f805e7fd94c5fd98cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8dcf07ed550920935de7eba29929db8f1de106692f312dd663bba6e6ffc72674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dcf07ed550920935de7eba29929db8f1de106692f312dd663bba6e6ffc72674->enter($__internal_8dcf07ed550920935de7eba29929db8f1de106692f312dd663bba6e6ffc72674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_8dcf07ed550920935de7eba29929db8f1de106692f312dd663bba6e6ffc72674->leave($__internal_8dcf07ed550920935de7eba29929db8f1de106692f312dd663bba6e6ffc72674_prof);

        
        $__internal_6efbda767748ee178b7c8c98927446352901440edaaad2f805e7fd94c5fd98cd->leave($__internal_6efbda767748ee178b7c8c98927446352901440edaaad2f805e7fd94c5fd98cd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b50e5889dd497dbf83bbb7d82bdfe8a846446435be5f165a7b9e0bc5cdf4b505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b50e5889dd497dbf83bbb7d82bdfe8a846446435be5f165a7b9e0bc5cdf4b505->enter($__internal_b50e5889dd497dbf83bbb7d82bdfe8a846446435be5f165a7b9e0bc5cdf4b505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_33fac104542726e15e8c81bb5ad5b909601599e22cf91c297fb91cc1fd15afcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33fac104542726e15e8c81bb5ad5b909601599e22cf91c297fb91cc1fd15afcc->enter($__internal_33fac104542726e15e8c81bb5ad5b909601599e22cf91c297fb91cc1fd15afcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_33fac104542726e15e8c81bb5ad5b909601599e22cf91c297fb91cc1fd15afcc->leave($__internal_33fac104542726e15e8c81bb5ad5b909601599e22cf91c297fb91cc1fd15afcc_prof);

        
        $__internal_b50e5889dd497dbf83bbb7d82bdfe8a846446435be5f165a7b9e0bc5cdf4b505->leave($__internal_b50e5889dd497dbf83bbb7d82bdfe8a846446435be5f165a7b9e0bc5cdf4b505_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/windows/symfony/example/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
