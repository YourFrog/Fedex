<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_ceb0953be23bd8a6a428353de33e80ceafa64163ca906a20a52a00d165ad9f3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_1ce90f2e22b40b95a91f10dab920ea93f91aecabf575774b5378c537f66493e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ce90f2e22b40b95a91f10dab920ea93f91aecabf575774b5378c537f66493e5->enter($__internal_1ce90f2e22b40b95a91f10dab920ea93f91aecabf575774b5378c537f66493e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_233c20c6785d989877e2980a4e116021d2a7042524c8e421f487eb6f2a3dd010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233c20c6785d989877e2980a4e116021d2a7042524c8e421f487eb6f2a3dd010->enter($__internal_233c20c6785d989877e2980a4e116021d2a7042524c8e421f487eb6f2a3dd010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ce90f2e22b40b95a91f10dab920ea93f91aecabf575774b5378c537f66493e5->leave($__internal_1ce90f2e22b40b95a91f10dab920ea93f91aecabf575774b5378c537f66493e5_prof);

        
        $__internal_233c20c6785d989877e2980a4e116021d2a7042524c8e421f487eb6f2a3dd010->leave($__internal_233c20c6785d989877e2980a4e116021d2a7042524c8e421f487eb6f2a3dd010_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a8e68d972c1898a50adfc9f8f3c566b2b9232502b063ee421cd0bffc7831a6b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8e68d972c1898a50adfc9f8f3c566b2b9232502b063ee421cd0bffc7831a6b7->enter($__internal_a8e68d972c1898a50adfc9f8f3c566b2b9232502b063ee421cd0bffc7831a6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0c8a7bd40c8b0006b46cb06014b68e6f75e73c57c29ad45789f38e423f0b3a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c8a7bd40c8b0006b46cb06014b68e6f75e73c57c29ad45789f38e423f0b3a9c->enter($__internal_0c8a7bd40c8b0006b46cb06014b68e6f75e73c57c29ad45789f38e423f0b3a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0c8a7bd40c8b0006b46cb06014b68e6f75e73c57c29ad45789f38e423f0b3a9c->leave($__internal_0c8a7bd40c8b0006b46cb06014b68e6f75e73c57c29ad45789f38e423f0b3a9c_prof);

        
        $__internal_a8e68d972c1898a50adfc9f8f3c566b2b9232502b063ee421cd0bffc7831a6b7->leave($__internal_a8e68d972c1898a50adfc9f8f3c566b2b9232502b063ee421cd0bffc7831a6b7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "/windows/symfony/example/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
