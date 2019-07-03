<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a1c495058197b02baf57754f6f3faa64efd0c11d629ac7ad05011c6e6b533c75 extends Twig_Template
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
        $__internal_4292bb76ba237b0c1c3c21c48eb10780cb2ca8f83cb2cc4f6c45bb13e2124ca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4292bb76ba237b0c1c3c21c48eb10780cb2ca8f83cb2cc4f6c45bb13e2124ca7->enter($__internal_4292bb76ba237b0c1c3c21c48eb10780cb2ca8f83cb2cc4f6c45bb13e2124ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_25133e2764d8523d4e5a8f5ec58b720c7094d361cb580b8940fc06cd01090216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25133e2764d8523d4e5a8f5ec58b720c7094d361cb580b8940fc06cd01090216->enter($__internal_25133e2764d8523d4e5a8f5ec58b720c7094d361cb580b8940fc06cd01090216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4292bb76ba237b0c1c3c21c48eb10780cb2ca8f83cb2cc4f6c45bb13e2124ca7->leave($__internal_4292bb76ba237b0c1c3c21c48eb10780cb2ca8f83cb2cc4f6c45bb13e2124ca7_prof);

        
        $__internal_25133e2764d8523d4e5a8f5ec58b720c7094d361cb580b8940fc06cd01090216->leave($__internal_25133e2764d8523d4e5a8f5ec58b720c7094d361cb580b8940fc06cd01090216_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4f98c7e8ee611e22e46ae4c14ba1206a1de0d4eed0502d90e5a1394dd3cbcc15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f98c7e8ee611e22e46ae4c14ba1206a1de0d4eed0502d90e5a1394dd3cbcc15->enter($__internal_4f98c7e8ee611e22e46ae4c14ba1206a1de0d4eed0502d90e5a1394dd3cbcc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b932a09aca45e7ede7708f0055e721fcefe91e3bfdc9c35049935504ef3a330f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b932a09aca45e7ede7708f0055e721fcefe91e3bfdc9c35049935504ef3a330f->enter($__internal_b932a09aca45e7ede7708f0055e721fcefe91e3bfdc9c35049935504ef3a330f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_b932a09aca45e7ede7708f0055e721fcefe91e3bfdc9c35049935504ef3a330f->leave($__internal_b932a09aca45e7ede7708f0055e721fcefe91e3bfdc9c35049935504ef3a330f_prof);

        
        $__internal_4f98c7e8ee611e22e46ae4c14ba1206a1de0d4eed0502d90e5a1394dd3cbcc15->leave($__internal_4f98c7e8ee611e22e46ae4c14ba1206a1de0d4eed0502d90e5a1394dd3cbcc15_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
