<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_75015868de6895df0175aff3262bf73640c28630830f1fc2d5df38901a86e76e extends Twig_Template
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
        $__internal_c5bf1bbb8459359640ab2203dbd4c1a47676607618f350c37e8c400a2443480b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5bf1bbb8459359640ab2203dbd4c1a47676607618f350c37e8c400a2443480b->enter($__internal_c5bf1bbb8459359640ab2203dbd4c1a47676607618f350c37e8c400a2443480b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_34b50bd35982a1dc40bcb8a52c09c92b3b797777edc1fe9242d943dd6d3fe9f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b50bd35982a1dc40bcb8a52c09c92b3b797777edc1fe9242d943dd6d3fe9f3->enter($__internal_34b50bd35982a1dc40bcb8a52c09c92b3b797777edc1fe9242d943dd6d3fe9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_c5bf1bbb8459359640ab2203dbd4c1a47676607618f350c37e8c400a2443480b->leave($__internal_c5bf1bbb8459359640ab2203dbd4c1a47676607618f350c37e8c400a2443480b_prof);

        
        $__internal_34b50bd35982a1dc40bcb8a52c09c92b3b797777edc1fe9242d943dd6d3fe9f3->leave($__internal_34b50bd35982a1dc40bcb8a52c09c92b3b797777edc1fe9242d943dd6d3fe9f3_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_17cc61dbd1083c471715b4fbbec0bfc9361adbab47e36465bd03a3a49c196260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17cc61dbd1083c471715b4fbbec0bfc9361adbab47e36465bd03a3a49c196260->enter($__internal_17cc61dbd1083c471715b4fbbec0bfc9361adbab47e36465bd03a3a49c196260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d5f544d89da79143bf78ee4778cbff630ec2b0d7f0df588a70db3620bc34aa3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f544d89da79143bf78ee4778cbff630ec2b0d7f0df588a70db3620bc34aa3d->enter($__internal_d5f544d89da79143bf78ee4778cbff630ec2b0d7f0df588a70db3620bc34aa3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
\t
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "email", array()), 'row', array("attr" => array("class" => "text-left")));
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "username", array()), 'row', array("attr" => array("class" => "text-left")));
        echo "
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "plainPassword", array()), 'row', array("attr" => array("class" => "text-left")));
        echo "
    
    <div class=\"mt-3\">
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary ml-auto float-right")));
        echo "
    </div>

";
        
        $__internal_d5f544d89da79143bf78ee4778cbff630ec2b0d7f0df588a70db3620bc34aa3d->leave($__internal_d5f544d89da79143bf78ee4778cbff630ec2b0d7f0df588a70db3620bc34aa3d_prof);

        
        $__internal_17cc61dbd1083c471715b4fbbec0bfc9361adbab47e36465bd03a3a49c196260->leave($__internal_17cc61dbd1083c471715b4fbbec0bfc9361adbab47e36465bd03a3a49c196260_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  73 => 14,  69 => 13,  65 => 12,  59 => 9,  54 => 7,  49 => 5,  44 => 2,  26 => 1,);
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
\t
    {{ form_row(form.email, {'attr': {'class': 'text-left'}}) }}
    {{ form_row(form.username, {'attr': {'class': 'text-left'}}) }}
    {{ form_row(form.plainPassword, {'attr': {'class': 'text-left'}}) }}
    
    <div class=\"mt-3\">
        {{ form_widget(form.submit, {'attr': {'class': 'btn btn-primary ml-auto float-right'}}) }}
    </div>

{% endblock %}", "@FOSUser/Registration/register_content.html.twig", "/windows/symfony/example/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
