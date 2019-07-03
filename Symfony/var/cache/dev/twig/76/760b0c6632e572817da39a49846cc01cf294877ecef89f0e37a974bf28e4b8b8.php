<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_996d7bde28868e6acdf813a4d9ff52b6d8404616a8b92dd47a4d5ae8794e17ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_41a637bb4ea847d0f1d9c08ebfdca4682c47a8efd1ee52b750125346787d1dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41a637bb4ea847d0f1d9c08ebfdca4682c47a8efd1ee52b750125346787d1dbd->enter($__internal_41a637bb4ea847d0f1d9c08ebfdca4682c47a8efd1ee52b750125346787d1dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9a65f76948fede928492fcd0ba3fbf00c1da852e79319cddf1c161785a950251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a65f76948fede928492fcd0ba3fbf00c1da852e79319cddf1c161785a950251->enter($__internal_9a65f76948fede928492fcd0ba3fbf00c1da852e79319cddf1c161785a950251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41a637bb4ea847d0f1d9c08ebfdca4682c47a8efd1ee52b750125346787d1dbd->leave($__internal_41a637bb4ea847d0f1d9c08ebfdca4682c47a8efd1ee52b750125346787d1dbd_prof);

        
        $__internal_9a65f76948fede928492fcd0ba3fbf00c1da852e79319cddf1c161785a950251->leave($__internal_9a65f76948fede928492fcd0ba3fbf00c1da852e79319cddf1c161785a950251_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_49a7a390e39cf48dca21381961e89695c8c5ac857ba36bee91b3ae2a2ef56f1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49a7a390e39cf48dca21381961e89695c8c5ac857ba36bee91b3ae2a2ef56f1a->enter($__internal_49a7a390e39cf48dca21381961e89695c8c5ac857ba36bee91b3ae2a2ef56f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_127657c6bd55513c789f65414555aaceabf0acd3d6c26178952a2f6c56fe554b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_127657c6bd55513c789f65414555aaceabf0acd3d6c26178952a2f6c56fe554b->enter($__internal_127657c6bd55513c789f65414555aaceabf0acd3d6c26178952a2f6c56fe554b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_127657c6bd55513c789f65414555aaceabf0acd3d6c26178952a2f6c56fe554b->leave($__internal_127657c6bd55513c789f65414555aaceabf0acd3d6c26178952a2f6c56fe554b_prof);

        
        $__internal_49a7a390e39cf48dca21381961e89695c8c5ac857ba36bee91b3ae2a2ef56f1a->leave($__internal_49a7a390e39cf48dca21381961e89695c8c5ac857ba36bee91b3ae2a2ef56f1a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd4363ab3689c75206e0ea3607ff8999c755fca52696c87f3d2a3c55d5b644cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd4363ab3689c75206e0ea3607ff8999c755fca52696c87f3d2a3c55d5b644cb->enter($__internal_fd4363ab3689c75206e0ea3607ff8999c755fca52696c87f3d2a3c55d5b644cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5d2a1537f702d95e18a0c4226e08aca3fa8b9978f023599ddaf1a4f6473f09c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d2a1537f702d95e18a0c4226e08aca3fa8b9978f023599ddaf1a4f6473f09c9->enter($__internal_5d2a1537f702d95e18a0c4226e08aca3fa8b9978f023599ddaf1a4f6473f09c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5d2a1537f702d95e18a0c4226e08aca3fa8b9978f023599ddaf1a4f6473f09c9->leave($__internal_5d2a1537f702d95e18a0c4226e08aca3fa8b9978f023599ddaf1a4f6473f09c9_prof);

        
        $__internal_fd4363ab3689c75206e0ea3607ff8999c755fca52696c87f3d2a3c55d5b644cb->leave($__internal_fd4363ab3689c75206e0ea3607ff8999c755fca52696c87f3d2a3c55d5b644cb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_28b134c9296ff6dc13f600d44c5d8022c8423946218806e0907d7e68c6a83651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28b134c9296ff6dc13f600d44c5d8022c8423946218806e0907d7e68c6a83651->enter($__internal_28b134c9296ff6dc13f600d44c5d8022c8423946218806e0907d7e68c6a83651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1c34cf2aa771106fe5faa71ba4bc964b94257a1d1b17a2539b0a3b8669ff330c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c34cf2aa771106fe5faa71ba4bc964b94257a1d1b17a2539b0a3b8669ff330c->enter($__internal_1c34cf2aa771106fe5faa71ba4bc964b94257a1d1b17a2539b0a3b8669ff330c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1c34cf2aa771106fe5faa71ba4bc964b94257a1d1b17a2539b0a3b8669ff330c->leave($__internal_1c34cf2aa771106fe5faa71ba4bc964b94257a1d1b17a2539b0a3b8669ff330c_prof);

        
        $__internal_28b134c9296ff6dc13f600d44c5d8022c8423946218806e0907d7e68c6a83651->leave($__internal_28b134c9296ff6dc13f600d44c5d8022c8423946218806e0907d7e68c6a83651_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/windows/symfony/example/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
