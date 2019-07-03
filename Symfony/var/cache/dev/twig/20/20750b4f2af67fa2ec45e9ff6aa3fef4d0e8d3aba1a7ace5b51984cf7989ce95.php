<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_72cb76ac15d0cbb6eeb32823618166bf9bbb093f71a972ab150dc3e4cc0eee23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9522c06543d07e59543bb41ff8b9d2329787c37a653a33c0f60500d0f986e037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9522c06543d07e59543bb41ff8b9d2329787c37a653a33c0f60500d0f986e037->enter($__internal_9522c06543d07e59543bb41ff8b9d2329787c37a653a33c0f60500d0f986e037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2f1f7713bc083b53c3b5247134998236d5b4a8a167d27ac5ab7b2c3b373a11fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f1f7713bc083b53c3b5247134998236d5b4a8a167d27ac5ab7b2c3b373a11fa->enter($__internal_2f1f7713bc083b53c3b5247134998236d5b4a8a167d27ac5ab7b2c3b373a11fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9522c06543d07e59543bb41ff8b9d2329787c37a653a33c0f60500d0f986e037->leave($__internal_9522c06543d07e59543bb41ff8b9d2329787c37a653a33c0f60500d0f986e037_prof);

        
        $__internal_2f1f7713bc083b53c3b5247134998236d5b4a8a167d27ac5ab7b2c3b373a11fa->leave($__internal_2f1f7713bc083b53c3b5247134998236d5b4a8a167d27ac5ab7b2c3b373a11fa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_835c35eb3912bd8af2d4bca0a4a28c3a9f6d37c083568b42890bfce20e6c7a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_835c35eb3912bd8af2d4bca0a4a28c3a9f6d37c083568b42890bfce20e6c7a1e->enter($__internal_835c35eb3912bd8af2d4bca0a4a28c3a9f6d37c083568b42890bfce20e6c7a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ec137a735dae7919a49a8ce84a9d4eeb0491f44604b6ae8ed24c551bb891e426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec137a735dae7919a49a8ce84a9d4eeb0491f44604b6ae8ed24c551bb891e426->enter($__internal_ec137a735dae7919a49a8ce84a9d4eeb0491f44604b6ae8ed24c551bb891e426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_ec137a735dae7919a49a8ce84a9d4eeb0491f44604b6ae8ed24c551bb891e426->leave($__internal_ec137a735dae7919a49a8ce84a9d4eeb0491f44604b6ae8ed24c551bb891e426_prof);

        
        $__internal_835c35eb3912bd8af2d4bca0a4a28c3a9f6d37c083568b42890bfce20e6c7a1e->leave($__internal_835c35eb3912bd8af2d4bca0a4a28c3a9f6d37c083568b42890bfce20e6c7a1e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/windows/symfony/example/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
