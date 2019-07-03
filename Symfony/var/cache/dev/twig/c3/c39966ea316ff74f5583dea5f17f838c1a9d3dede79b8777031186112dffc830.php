<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_c135a0889051def3698392aa3280d5fbc20af6ce515247067d8d0a0c5180e363 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_349bf92b021229ae39734146276a18e65bede5de3b14713ce0897b717bccd475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_349bf92b021229ae39734146276a18e65bede5de3b14713ce0897b717bccd475->enter($__internal_349bf92b021229ae39734146276a18e65bede5de3b14713ce0897b717bccd475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_4cd6b33ee1fa83a1da59b41bd7e708f93d93a5668f7a27ebfe85349eb167d2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd6b33ee1fa83a1da59b41bd7e708f93d93a5668f7a27ebfe85349eb167d2c4->enter($__internal_4cd6b33ee1fa83a1da59b41bd7e708f93d93a5668f7a27ebfe85349eb167d2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_349bf92b021229ae39734146276a18e65bede5de3b14713ce0897b717bccd475->leave($__internal_349bf92b021229ae39734146276a18e65bede5de3b14713ce0897b717bccd475_prof);

        
        $__internal_4cd6b33ee1fa83a1da59b41bd7e708f93d93a5668f7a27ebfe85349eb167d2c4->leave($__internal_4cd6b33ee1fa83a1da59b41bd7e708f93d93a5668f7a27ebfe85349eb167d2c4_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_117c3696afea61f5a186b17f81dd79fec54f8d178ca5172d3b791b1f9fb89fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_117c3696afea61f5a186b17f81dd79fec54f8d178ca5172d3b791b1f9fb89fc8->enter($__internal_117c3696afea61f5a186b17f81dd79fec54f8d178ca5172d3b791b1f9fb89fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0eada8dbbce2d8fb5f383b854ad7a4a9c15463b722400bde46df52e240aea7b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eada8dbbce2d8fb5f383b854ad7a4a9c15463b722400bde46df52e240aea7b7->enter($__internal_0eada8dbbce2d8fb5f383b854ad7a4a9c15463b722400bde46df52e240aea7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "
    <h1>Rejestracja</h1>

    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

    <input type=\"hidden\" name=\"fos_user_registration_form[_token]\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("registration"), "html", null, true);
        echo "\" />
    <div class=\"form-error\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        echo "
    </div>
    <div class=\"col-12\">
        <div class=\"row\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "email", array()), 'label');
        echo "</div>
        <div class=\"row\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
    </div>

    <div class=\"col-12 mt-3\">
        <div class=\"row\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "username", array()), 'label');
        echo "</div>
        <div class=\"row\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
    </div>

    <div class=\"col-12 mt-3\">
        <div class=\"row\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'label');
        echo "</div>
        <div class=\"row\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
    </div>

    <div class=\"col-12 mt-3\">
        <div class=\"row\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'label');
        echo "</div>
        <div class=\"row\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
    </div>

    <div class=\"mt-3\">
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary ml-auto float-right")));
        echo "
    </div>

";
        
        $__internal_0eada8dbbce2d8fb5f383b854ad7a4a9c15463b722400bde46df52e240aea7b7->leave($__internal_0eada8dbbce2d8fb5f383b854ad7a4a9c15463b722400bde46df52e240aea7b7_prof);

        
        $__internal_117c3696afea61f5a186b17f81dd79fec54f8d178ca5172d3b791b1f9fb89fc8->leave($__internal_117c3696afea61f5a186b17f81dd79fec54f8d178ca5172d3b791b1f9fb89fc8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  109 => 32,  102 => 28,  98 => 27,  91 => 23,  87 => 22,  80 => 18,  76 => 17,  69 => 13,  65 => 12,  59 => 9,  54 => 7,  49 => 5,  44 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block content %}

    <h1>Rejestracja</h1>

    {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}

    <input type=\"hidden\" name=\"fos_user_registration_form[_token]\" value=\"{{ csrf_token('registration') }}\" />
    <div class=\"form-error\">
        {{ form_errors(form) }}
    </div>
    <div class=\"col-12\">
        <div class=\"row\">{{ form_label(form.email) }}</div>
        <div class=\"row\">{{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}</div>
    </div>

    <div class=\"col-12 mt-3\">
        <div class=\"row\">{{ form_label(form.username) }}</div>
        <div class=\"row\">{{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}</div>
    </div>

    <div class=\"col-12 mt-3\">
        <div class=\"row\">{{ form_label(form.plainPassword.first) }}</div>
        <div class=\"row\">{{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control'}}) }}</div>
    </div>

    <div class=\"col-12 mt-3\">
        <div class=\"row\">{{ form_label(form.plainPassword.second) }}</div>
        <div class=\"row\">{{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control'}}) }}</div>
    </div>

    <div class=\"mt-3\">
        {{ form_widget(form.submit, {'attr': {'class': 'btn btn-primary ml-auto float-right'}}) }}
    </div>

{% endblock %}", "@FOSUser/Registration/register_content.html.twig", "C:\\xampp\\htdocs\\Symfony\\app\\Resources\\FOSUserBundle\\views\\Registration\\register_content.html.twig");
    }
}
