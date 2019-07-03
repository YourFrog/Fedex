<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6b6a719757dcaafe2f71d8cd10b742f672248e9c2d0ed5455641e9d85d36323e extends Twig_Template
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
        $__internal_b830638cf7b718799f38084917af639c2a241104eb25497efad428e14b61c890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b830638cf7b718799f38084917af639c2a241104eb25497efad428e14b61c890->enter($__internal_b830638cf7b718799f38084917af639c2a241104eb25497efad428e14b61c890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c8979eccde1f7e26cc3e6c80093de1e257a66c1c1b059c6eb94aa1089ce3c9f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8979eccde1f7e26cc3e6c80093de1e257a66c1c1b059c6eb94aa1089ce3c9f6->enter($__internal_c8979eccde1f7e26cc3e6c80093de1e257a66c1c1b059c6eb94aa1089ce3c9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b830638cf7b718799f38084917af639c2a241104eb25497efad428e14b61c890->leave($__internal_b830638cf7b718799f38084917af639c2a241104eb25497efad428e14b61c890_prof);

        
        $__internal_c8979eccde1f7e26cc3e6c80093de1e257a66c1c1b059c6eb94aa1089ce3c9f6->leave($__internal_c8979eccde1f7e26cc3e6c80093de1e257a66c1c1b059c6eb94aa1089ce3c9f6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a86d7221df44476bad9e409cb8a0023893cbef09ef9aaf5f16ecf3ed24e26ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a86d7221df44476bad9e409cb8a0023893cbef09ef9aaf5f16ecf3ed24e26ddb->enter($__internal_a86d7221df44476bad9e409cb8a0023893cbef09ef9aaf5f16ecf3ed24e26ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ddb6d9b0d1e0558d7e805c2600c391920df4667e1bf6b6c2dbe08c222221e8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb6d9b0d1e0558d7e805c2600c391920df4667e1bf6b6c2dbe08c222221e8f6->enter($__internal_ddb6d9b0d1e0558d7e805c2600c391920df4667e1bf6b6c2dbe08c222221e8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ddb6d9b0d1e0558d7e805c2600c391920df4667e1bf6b6c2dbe08c222221e8f6->leave($__internal_ddb6d9b0d1e0558d7e805c2600c391920df4667e1bf6b6c2dbe08c222221e8f6_prof);

        
        $__internal_a86d7221df44476bad9e409cb8a0023893cbef09ef9aaf5f16ecf3ed24e26ddb->leave($__internal_a86d7221df44476bad9e409cb8a0023893cbef09ef9aaf5f16ecf3ed24e26ddb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_950383a5170faabd0a5054ae8bfba7b40eadfe4ab10a4d646601864659923a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_950383a5170faabd0a5054ae8bfba7b40eadfe4ab10a4d646601864659923a9a->enter($__internal_950383a5170faabd0a5054ae8bfba7b40eadfe4ab10a4d646601864659923a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_caf77f668b09dcdb293d2c89e11c65470e8c8c7ae9fe2f966869598e4df24df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf77f668b09dcdb293d2c89e11c65470e8c8c7ae9fe2f966869598e4df24df6->enter($__internal_caf77f668b09dcdb293d2c89e11c65470e8c8c7ae9fe2f966869598e4df24df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_caf77f668b09dcdb293d2c89e11c65470e8c8c7ae9fe2f966869598e4df24df6->leave($__internal_caf77f668b09dcdb293d2c89e11c65470e8c8c7ae9fe2f966869598e4df24df6_prof);

        
        $__internal_950383a5170faabd0a5054ae8bfba7b40eadfe4ab10a4d646601864659923a9a->leave($__internal_950383a5170faabd0a5054ae8bfba7b40eadfe4ab10a4d646601864659923a9a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ef4a7eb15ca121a80ba105211c8aabf3734cf540e17de2aed1cbf72d2e26fdd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef4a7eb15ca121a80ba105211c8aabf3734cf540e17de2aed1cbf72d2e26fdd0->enter($__internal_ef4a7eb15ca121a80ba105211c8aabf3734cf540e17de2aed1cbf72d2e26fdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7fb50420740faaada124b4263bbfe1aba5ad93a984f34723bf4eb55ccbfc7c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb50420740faaada124b4263bbfe1aba5ad93a984f34723bf4eb55ccbfc7c8a->enter($__internal_7fb50420740faaada124b4263bbfe1aba5ad93a984f34723bf4eb55ccbfc7c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7fb50420740faaada124b4263bbfe1aba5ad93a984f34723bf4eb55ccbfc7c8a->leave($__internal_7fb50420740faaada124b4263bbfe1aba5ad93a984f34723bf4eb55ccbfc7c8a_prof);

        
        $__internal_ef4a7eb15ca121a80ba105211c8aabf3734cf540e17de2aed1cbf72d2e26fdd0->leave($__internal_ef4a7eb15ca121a80ba105211c8aabf3734cf540e17de2aed1cbf72d2e26fdd0_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
