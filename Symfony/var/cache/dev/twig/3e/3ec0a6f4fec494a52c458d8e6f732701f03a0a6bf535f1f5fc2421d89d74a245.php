<?php

/* app/index/index.html.twig */
class __TwigTemplate_e4ed73bd83cf4b27db8b7a3ea8db482e9e6a2debb4860bf06a53bcb75e30ac27 extends Twig_Template
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
        $__internal_75338d904f857b674bcc0663f14d66a00a2125cb98dba66d2badefe931950bbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75338d904f857b674bcc0663f14d66a00a2125cb98dba66d2badefe931950bbe->enter($__internal_75338d904f857b674bcc0663f14d66a00a2125cb98dba66d2badefe931950bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/index/index.html.twig"));

        $__internal_bfde645b7a12d6c8179344960172f9f5de8abf5b0bed43840347bd73398b2f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfde645b7a12d6c8179344960172f9f5de8abf5b0bed43840347bd73398b2f98->enter($__internal_bfde645b7a12d6c8179344960172f9f5de8abf5b0bed43840347bd73398b2f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/index/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75338d904f857b674bcc0663f14d66a00a2125cb98dba66d2badefe931950bbe->leave($__internal_75338d904f857b674bcc0663f14d66a00a2125cb98dba66d2badefe931950bbe_prof);

        
        $__internal_bfde645b7a12d6c8179344960172f9f5de8abf5b0bed43840347bd73398b2f98->leave($__internal_bfde645b7a12d6c8179344960172f9f5de8abf5b0bed43840347bd73398b2f98_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1fb0b1e86e4dbefcdd89067a876a4baa9b0240f00675d7bfb48d02f2efa87a81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb0b1e86e4dbefcdd89067a876a4baa9b0240f00675d7bfb48d02f2efa87a81->enter($__internal_1fb0b1e86e4dbefcdd89067a876a4baa9b0240f00675d7bfb48d02f2efa87a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9e4854db5e2bdfea022ff415dc2defd4ac81055e8743c197135c1a5bdc8d42f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4854db5e2bdfea022ff415dc2defd4ac81055e8743c197135c1a5bdc8d42f1->enter($__internal_9e4854db5e2bdfea022ff415dc2defd4ac81055e8743c197135c1a5bdc8d42f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    Treść strony głównej
";
        
        $__internal_9e4854db5e2bdfea022ff415dc2defd4ac81055e8743c197135c1a5bdc8d42f1->leave($__internal_9e4854db5e2bdfea022ff415dc2defd4ac81055e8743c197135c1a5bdc8d42f1_prof);

        
        $__internal_1fb0b1e86e4dbefcdd89067a876a4baa9b0240f00675d7bfb48d02f2efa87a81->leave($__internal_1fb0b1e86e4dbefcdd89067a876a4baa9b0240f00675d7bfb48d02f2efa87a81_prof);

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
{% endblock %}", "app/index/index.html.twig", "/windows/symfony/example/app/Resources/views/app/index/index.html.twig");
    }
}
