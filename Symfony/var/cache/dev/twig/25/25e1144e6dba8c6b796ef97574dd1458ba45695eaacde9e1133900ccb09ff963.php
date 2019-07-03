<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c901632e928e96c5787b49f458f80012544dfd4e857e9aa4958789e908844908 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_925e0350f68f0434ba456d459b2c8ffd3439a21e114006280f6afaa487a6f7b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925e0350f68f0434ba456d459b2c8ffd3439a21e114006280f6afaa487a6f7b7->enter($__internal_925e0350f68f0434ba456d459b2c8ffd3439a21e114006280f6afaa487a6f7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4407144dc814d94d26e2aa8deb99584dbf6c988d317752f7a425f3dfce261b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4407144dc814d94d26e2aa8deb99584dbf6c988d317752f7a425f3dfce261b1c->enter($__internal_4407144dc814d94d26e2aa8deb99584dbf6c988d317752f7a425f3dfce261b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_925e0350f68f0434ba456d459b2c8ffd3439a21e114006280f6afaa487a6f7b7->leave($__internal_925e0350f68f0434ba456d459b2c8ffd3439a21e114006280f6afaa487a6f7b7_prof);

        
        $__internal_4407144dc814d94d26e2aa8deb99584dbf6c988d317752f7a425f3dfce261b1c->leave($__internal_4407144dc814d94d26e2aa8deb99584dbf6c988d317752f7a425f3dfce261b1c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d9dc4de09e198ddaf4723c598089f7ac5c56014f06626bd4f425bc139ebddfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d9dc4de09e198ddaf4723c598089f7ac5c56014f06626bd4f425bc139ebddfd->enter($__internal_3d9dc4de09e198ddaf4723c598089f7ac5c56014f06626bd4f425bc139ebddfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e4216762d8c3fc731c8cc9935f54ab9487d99a9f2c2e3010c5125ab8d3aafbad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4216762d8c3fc731c8cc9935f54ab9487d99a9f2c2e3010c5125ab8d3aafbad->enter($__internal_e4216762d8c3fc731c8cc9935f54ab9487d99a9f2c2e3010c5125ab8d3aafbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e4216762d8c3fc731c8cc9935f54ab9487d99a9f2c2e3010c5125ab8d3aafbad->leave($__internal_e4216762d8c3fc731c8cc9935f54ab9487d99a9f2c2e3010c5125ab8d3aafbad_prof);

        
        $__internal_3d9dc4de09e198ddaf4723c598089f7ac5c56014f06626bd4f425bc139ebddfd->leave($__internal_3d9dc4de09e198ddaf4723c598089f7ac5c56014f06626bd4f425bc139ebddfd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_57bc34ac663f08e018c3ca610eb94a03ca1ace0b02da59ba4c03da033255bd35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57bc34ac663f08e018c3ca610eb94a03ca1ace0b02da59ba4c03da033255bd35->enter($__internal_57bc34ac663f08e018c3ca610eb94a03ca1ace0b02da59ba4c03da033255bd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_66fa237907393b53c05579202b9b3e08bd3932f7c1670751ce729f7abd7d7b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66fa237907393b53c05579202b9b3e08bd3932f7c1670751ce729f7abd7d7b15->enter($__internal_66fa237907393b53c05579202b9b3e08bd3932f7c1670751ce729f7abd7d7b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_66fa237907393b53c05579202b9b3e08bd3932f7c1670751ce729f7abd7d7b15->leave($__internal_66fa237907393b53c05579202b9b3e08bd3932f7c1670751ce729f7abd7d7b15_prof);

        
        $__internal_57bc34ac663f08e018c3ca610eb94a03ca1ace0b02da59ba4c03da033255bd35->leave($__internal_57bc34ac663f08e018c3ca610eb94a03ca1ace0b02da59ba4c03da033255bd35_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d988ae20246c2ba5d94b651f1737e1b1b5a006ee2621f29318a17903035bf6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d988ae20246c2ba5d94b651f1737e1b1b5a006ee2621f29318a17903035bf6e->enter($__internal_6d988ae20246c2ba5d94b651f1737e1b1b5a006ee2621f29318a17903035bf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8b0a53f85f2d48d1e4b0519c62ba150d1097251d518c3bb651f2777ec466e73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b0a53f85f2d48d1e4b0519c62ba150d1097251d518c3bb651f2777ec466e73e->enter($__internal_8b0a53f85f2d48d1e4b0519c62ba150d1097251d518c3bb651f2777ec466e73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_8b0a53f85f2d48d1e4b0519c62ba150d1097251d518c3bb651f2777ec466e73e->leave($__internal_8b0a53f85f2d48d1e4b0519c62ba150d1097251d518c3bb651f2777ec466e73e_prof);

        
        $__internal_6d988ae20246c2ba5d94b651f1737e1b1b5a006ee2621f29318a17903035bf6e->leave($__internal_6d988ae20246c2ba5d94b651f1737e1b1b5a006ee2621f29318a17903035bf6e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/windows/symfony/example/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
