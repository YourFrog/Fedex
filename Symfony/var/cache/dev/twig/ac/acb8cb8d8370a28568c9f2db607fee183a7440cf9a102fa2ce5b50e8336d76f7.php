<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_1334687ea30f178f308fa0051b22019444ce82a494b0450a605d648950313d36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_257d523eac0a4cc8559a2b854635240b796b9cdda948799d5c102aae93f8bb2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_257d523eac0a4cc8559a2b854635240b796b9cdda948799d5c102aae93f8bb2d->enter($__internal_257d523eac0a4cc8559a2b854635240b796b9cdda948799d5c102aae93f8bb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_38636ab9d0bb8e7d0a9adaf40cdb44a15f421a7cddd7f6bb6d5130b7ea992c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38636ab9d0bb8e7d0a9adaf40cdb44a15f421a7cddd7f6bb6d5130b7ea992c1a->enter($__internal_38636ab9d0bb8e7d0a9adaf40cdb44a15f421a7cddd7f6bb6d5130b7ea992c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_257d523eac0a4cc8559a2b854635240b796b9cdda948799d5c102aae93f8bb2d->leave($__internal_257d523eac0a4cc8559a2b854635240b796b9cdda948799d5c102aae93f8bb2d_prof);

        
        $__internal_38636ab9d0bb8e7d0a9adaf40cdb44a15f421a7cddd7f6bb6d5130b7ea992c1a->leave($__internal_38636ab9d0bb8e7d0a9adaf40cdb44a15f421a7cddd7f6bb6d5130b7ea992c1a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_54de1c95e09e4d962b52ac7a9e2ec1f05d4b6033d32946b84f9f50ca60905da6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54de1c95e09e4d962b52ac7a9e2ec1f05d4b6033d32946b84f9f50ca60905da6->enter($__internal_54de1c95e09e4d962b52ac7a9e2ec1f05d4b6033d32946b84f9f50ca60905da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8bdc1021eb0d0e264ce6d6ec5f5b3509eba07097fcad2e1496f1b0bd411be5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bdc1021eb0d0e264ce6d6ec5f5b3509eba07097fcad2e1496f1b0bd411be5b5->enter($__internal_8bdc1021eb0d0e264ce6d6ec5f5b3509eba07097fcad2e1496f1b0bd411be5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_8bdc1021eb0d0e264ce6d6ec5f5b3509eba07097fcad2e1496f1b0bd411be5b5->leave($__internal_8bdc1021eb0d0e264ce6d6ec5f5b3509eba07097fcad2e1496f1b0bd411be5b5_prof);

        
        $__internal_54de1c95e09e4d962b52ac7a9e2ec1f05d4b6033d32946b84f9f50ca60905da6->leave($__internal_54de1c95e09e4d962b52ac7a9e2ec1f05d4b6033d32946b84f9f50ca60905da6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/windows/symfony/example/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
