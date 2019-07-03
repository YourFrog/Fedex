<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_e45d23c7a87032aa1505cbaacdea0d1bd69f1807d56b79361804a249a320bb27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be85637397e8dfdb17caf465b45e9d148f7a0f4670d444c8ba07c964bbefccff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be85637397e8dfdb17caf465b45e9d148f7a0f4670d444c8ba07c964bbefccff->enter($__internal_be85637397e8dfdb17caf465b45e9d148f7a0f4670d444c8ba07c964bbefccff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        $__internal_f442495e3bb21fa6b53af7965cb79301ee1b2887705cc31f5c79c8bea46901c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f442495e3bb21fa6b53af7965cb79301ee1b2887705cc31f5c79c8bea46901c3->enter($__internal_f442495e3bb21fa6b53af7965cb79301ee1b2887705cc31f5c79c8bea46901c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_be85637397e8dfdb17caf465b45e9d148f7a0f4670d444c8ba07c964bbefccff->leave($__internal_be85637397e8dfdb17caf465b45e9d148f7a0f4670d444c8ba07c964bbefccff_prof);

        
        $__internal_f442495e3bb21fa6b53af7965cb79301ee1b2887705cc31f5c79c8bea46901c3->leave($__internal_f442495e3bb21fa6b53af7965cb79301ee1b2887705cc31f5c79c8bea46901c3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "@FOSUser/Resetting/request_content.html.twig", "/windows/symfony/example/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
