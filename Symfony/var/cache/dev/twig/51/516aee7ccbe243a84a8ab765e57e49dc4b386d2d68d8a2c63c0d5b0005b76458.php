<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_e2f67ed2ad99649fba874d3a02f91f071263283f958e58dd08d7029cc6e6f35b extends Twig_Template
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
        $__internal_bfb7ad45fb9c80750c62ea3af2b807a48f1e033873679df244d010ac35c5f5a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb7ad45fb9c80750c62ea3af2b807a48f1e033873679df244d010ac35c5f5a7->enter($__internal_bfb7ad45fb9c80750c62ea3af2b807a48f1e033873679df244d010ac35c5f5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_b06a343661395474b905cc9a073f53adfb9effe80427aefe40b213353cddd264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06a343661395474b905cc9a073f53adfb9effe80427aefe40b213353cddd264->enter($__internal_b06a343661395474b905cc9a073f53adfb9effe80427aefe40b213353cddd264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bfb7ad45fb9c80750c62ea3af2b807a48f1e033873679df244d010ac35c5f5a7->leave($__internal_bfb7ad45fb9c80750c62ea3af2b807a48f1e033873679df244d010ac35c5f5a7_prof);

        
        $__internal_b06a343661395474b905cc9a073f53adfb9effe80427aefe40b213353cddd264->leave($__internal_b06a343661395474b905cc9a073f53adfb9effe80427aefe40b213353cddd264_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f3339b63b9733c38921bbf64e09c9885dba3ead07c77843ff14ca057390c3f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3339b63b9733c38921bbf64e09c9885dba3ead07c77843ff14ca057390c3f46->enter($__internal_f3339b63b9733c38921bbf64e09c9885dba3ead07c77843ff14ca057390c3f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_171ef6d3389b15bb98ac46a36532661183cac5abdc789a654720906157c45dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171ef6d3389b15bb98ac46a36532661183cac5abdc789a654720906157c45dc1->enter($__internal_171ef6d3389b15bb98ac46a36532661183cac5abdc789a654720906157c45dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_171ef6d3389b15bb98ac46a36532661183cac5abdc789a654720906157c45dc1->leave($__internal_171ef6d3389b15bb98ac46a36532661183cac5abdc789a654720906157c45dc1_prof);

        
        $__internal_f3339b63b9733c38921bbf64e09c9885dba3ead07c77843ff14ca057390c3f46->leave($__internal_f3339b63b9733c38921bbf64e09c9885dba3ead07c77843ff14ca057390c3f46_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1bc2b51ab118fa3e06869a76cb356e78cf6e88624a0bf6b1008f35b4c4e29140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc2b51ab118fa3e06869a76cb356e78cf6e88624a0bf6b1008f35b4c4e29140->enter($__internal_1bc2b51ab118fa3e06869a76cb356e78cf6e88624a0bf6b1008f35b4c4e29140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_d1a16780b47e277bdb1079c6c20b97067f9adf585844136ae8ddc36819e71044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a16780b47e277bdb1079c6c20b97067f9adf585844136ae8ddc36819e71044->enter($__internal_d1a16780b47e277bdb1079c6c20b97067f9adf585844136ae8ddc36819e71044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_d1a16780b47e277bdb1079c6c20b97067f9adf585844136ae8ddc36819e71044->leave($__internal_d1a16780b47e277bdb1079c6c20b97067f9adf585844136ae8ddc36819e71044_prof);

        
        $__internal_1bc2b51ab118fa3e06869a76cb356e78cf6e88624a0bf6b1008f35b4c4e29140->leave($__internal_1bc2b51ab118fa3e06869a76cb356e78cf6e88624a0bf6b1008f35b4c4e29140_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a6a42b7061f5e7bb3bd8f548b4b997e9d73a236c2f9ab66489af99515036a574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6a42b7061f5e7bb3bd8f548b4b997e9d73a236c2f9ab66489af99515036a574->enter($__internal_a6a42b7061f5e7bb3bd8f548b4b997e9d73a236c2f9ab66489af99515036a574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_db9fe7b77001d010c8cc435f31d5980035ddab5f900ab54187dc8d32e5f9cb56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db9fe7b77001d010c8cc435f31d5980035ddab5f900ab54187dc8d32e5f9cb56->enter($__internal_db9fe7b77001d010c8cc435f31d5980035ddab5f900ab54187dc8d32e5f9cb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_db9fe7b77001d010c8cc435f31d5980035ddab5f900ab54187dc8d32e5f9cb56->leave($__internal_db9fe7b77001d010c8cc435f31d5980035ddab5f900ab54187dc8d32e5f9cb56_prof);

        
        $__internal_a6a42b7061f5e7bb3bd8f548b4b997e9d73a236c2f9ab66489af99515036a574->leave($__internal_a6a42b7061f5e7bb3bd8f548b4b997e9d73a236c2f9ab66489af99515036a574_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "/windows/symfony/example/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
