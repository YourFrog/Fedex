<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_255012eccbbff6a8f641b6db4e275c63af93a4f4f2f87d672edc066f25a91084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_925e5c149a0e04a2197565e8fcc4efa9d2c7ac115604a2b25cc12c7ebcd22eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925e5c149a0e04a2197565e8fcc4efa9d2c7ac115604a2b25cc12c7ebcd22eda->enter($__internal_925e5c149a0e04a2197565e8fcc4efa9d2c7ac115604a2b25cc12c7ebcd22eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_b86ed1013b2fefad34ccac6514015bef1fd7e6a04a622919445eb2895a41b40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86ed1013b2fefad34ccac6514015bef1fd7e6a04a622919445eb2895a41b40c->enter($__internal_b86ed1013b2fefad34ccac6514015bef1fd7e6a04a622919445eb2895a41b40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_925e5c149a0e04a2197565e8fcc4efa9d2c7ac115604a2b25cc12c7ebcd22eda->leave($__internal_925e5c149a0e04a2197565e8fcc4efa9d2c7ac115604a2b25cc12c7ebcd22eda_prof);

        
        $__internal_b86ed1013b2fefad34ccac6514015bef1fd7e6a04a622919445eb2895a41b40c->leave($__internal_b86ed1013b2fefad34ccac6514015bef1fd7e6a04a622919445eb2895a41b40c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2a71ec0012c6aabbdb5dfeb7c6bfcf7918dfc33f0a13765baca58fd9e5e7eb84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a71ec0012c6aabbdb5dfeb7c6bfcf7918dfc33f0a13765baca58fd9e5e7eb84->enter($__internal_2a71ec0012c6aabbdb5dfeb7c6bfcf7918dfc33f0a13765baca58fd9e5e7eb84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_edf054bb0f2b7a21171413eb7508167704c024521f53b734bd64027b9cc32796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf054bb0f2b7a21171413eb7508167704c024521f53b734bd64027b9cc32796->enter($__internal_edf054bb0f2b7a21171413eb7508167704c024521f53b734bd64027b9cc32796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_edf054bb0f2b7a21171413eb7508167704c024521f53b734bd64027b9cc32796->leave($__internal_edf054bb0f2b7a21171413eb7508167704c024521f53b734bd64027b9cc32796_prof);

        
        $__internal_2a71ec0012c6aabbdb5dfeb7c6bfcf7918dfc33f0a13765baca58fd9e5e7eb84->leave($__internal_2a71ec0012c6aabbdb5dfeb7c6bfcf7918dfc33f0a13765baca58fd9e5e7eb84_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_282058e9f734ade2842df9aaf688105ace23955342b4daa03f1296b7196f5cb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_282058e9f734ade2842df9aaf688105ace23955342b4daa03f1296b7196f5cb3->enter($__internal_282058e9f734ade2842df9aaf688105ace23955342b4daa03f1296b7196f5cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_120f3dc53c3d6a6a1a8eb37112af03cb78f11189571e72a36f05f9855025fc8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120f3dc53c3d6a6a1a8eb37112af03cb78f11189571e72a36f05f9855025fc8c->enter($__internal_120f3dc53c3d6a6a1a8eb37112af03cb78f11189571e72a36f05f9855025fc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_120f3dc53c3d6a6a1a8eb37112af03cb78f11189571e72a36f05f9855025fc8c->leave($__internal_120f3dc53c3d6a6a1a8eb37112af03cb78f11189571e72a36f05f9855025fc8c_prof);

        
        $__internal_282058e9f734ade2842df9aaf688105ace23955342b4daa03f1296b7196f5cb3->leave($__internal_282058e9f734ade2842df9aaf688105ace23955342b4daa03f1296b7196f5cb3_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7fc842f27d188ecc6b508e64dac4983913015d9f0d057b9abc7844f792c4a4e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fc842f27d188ecc6b508e64dac4983913015d9f0d057b9abc7844f792c4a4e4->enter($__internal_7fc842f27d188ecc6b508e64dac4983913015d9f0d057b9abc7844f792c4a4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d18e4399c7169063519f78a1696c8164c04654ebd0a6d472f4ec3eb1859b8319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18e4399c7169063519f78a1696c8164c04654ebd0a6d472f4ec3eb1859b8319->enter($__internal_d18e4399c7169063519f78a1696c8164c04654ebd0a6d472f4ec3eb1859b8319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d18e4399c7169063519f78a1696c8164c04654ebd0a6d472f4ec3eb1859b8319->leave($__internal_d18e4399c7169063519f78a1696c8164c04654ebd0a6d472f4ec3eb1859b8319_prof);

        
        $__internal_7fc842f27d188ecc6b508e64dac4983913015d9f0d057b9abc7844f792c4a4e4->leave($__internal_7fc842f27d188ecc6b508e64dac4983913015d9f0d057b9abc7844f792c4a4e4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "/windows/symfony/example/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
