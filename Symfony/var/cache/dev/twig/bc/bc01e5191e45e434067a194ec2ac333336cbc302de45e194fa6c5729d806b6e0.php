<?php

/* app/layout.html.twig */
class __TwigTemplate_fbfee0e9af88aee91311d2ce590f32c78db0664c868da351b8518b2f6f513a88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a909e8f415ee0f966e60869e5287aebc385a9a9c8732b3eaff74d1fec13b294e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a909e8f415ee0f966e60869e5287aebc385a9a9c8732b3eaff74d1fec13b294e->enter($__internal_a909e8f415ee0f966e60869e5287aebc385a9a9c8732b3eaff74d1fec13b294e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/layout.html.twig"));

        $__internal_88763394ddd37145f3940b8b4ce6c189bccccd960539ddc2cee3723087ccc768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88763394ddd37145f3940b8b4ce6c189bccccd960539ddc2cee3723087ccc768->enter($__internal_88763394ddd37145f3940b8b4ce6c189bccccd960539ddc2cee3723087ccc768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/layout.html.twig"));

        // line 2
        echo "
<!doctype html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/website/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                asd
            </div>
        </div>
        <div class=\"row mt-5\">
            <div class=\"col-2\">
                <form action=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"POST\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" />

                    <div class=\"row\">
                        Login
                    </div>
                    <div class=\"row mt-2\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" id=\"username\" name=\"_username\" value=\"\" required=\"required\" />
                    </div>

                    <div class=\"row mt-3\">
                        Password
                    </div>
                    <div class=\"row mt-2\">
                        <input type=\"password\" class=\"form-control\" placeholder=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" id=\"password\" name=\"_password\" required=\"required\" />
                    </div>

                    <div class=\"row mt-2\">
                        <input class=\"btn btn-primary submit float-right ml-auto\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </div>

                    <div class=\"row\">
                        <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Create Account</a>
                    </div>
                </form>
            </div>

            <div class=\"col-10\">
                ";
        // line 52
        if ((array_key_exists("error", $context) && (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 52, $this->getSourceContext()); })()))) {
            // line 53
            echo "                    <div class=\"p-3 mb-2 bg-danger text-white\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 53, $this->getSourceContext()); })()), "html", null, true);
            echo "</div>
                ";
        }
        // line 55
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "            </div>
        </div>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/website/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/website/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/website/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_a909e8f415ee0f966e60869e5287aebc385a9a9c8732b3eaff74d1fec13b294e->leave($__internal_a909e8f415ee0f966e60869e5287aebc385a9a9c8732b3eaff74d1fec13b294e_prof);

        
        $__internal_88763394ddd37145f3940b8b4ce6c189bccccd960539ddc2cee3723087ccc768->leave($__internal_88763394ddd37145f3940b8b4ce6c189bccccd960539ddc2cee3723087ccc768_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_e997c5cc4bac9e64a296f37b6dae240d6bb54ba1b41e5b0346542a41c0619e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e997c5cc4bac9e64a296f37b6dae240d6bb54ba1b41e5b0346542a41c0619e62->enter($__internal_e997c5cc4bac9e64a296f37b6dae240d6bb54ba1b41e5b0346542a41c0619e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4547fee53635f0e7ede43604576dbbe1f1d241be2e69e832ac7008e7afa4f11f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4547fee53635f0e7ede43604576dbbe1f1d241be2e69e832ac7008e7afa4f11f->enter($__internal_4547fee53635f0e7ede43604576dbbe1f1d241be2e69e832ac7008e7afa4f11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Homepage";
        
        $__internal_4547fee53635f0e7ede43604576dbbe1f1d241be2e69e832ac7008e7afa4f11f->leave($__internal_4547fee53635f0e7ede43604576dbbe1f1d241be2e69e832ac7008e7afa4f11f_prof);

        
        $__internal_e997c5cc4bac9e64a296f37b6dae240d6bb54ba1b41e5b0346542a41c0619e62->leave($__internal_e997c5cc4bac9e64a296f37b6dae240d6bb54ba1b41e5b0346542a41c0619e62_prof);

    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        $__internal_af1453bf0ae6348844c3eb71118f867528ce82c3704385aba1406a6400845d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af1453bf0ae6348844c3eb71118f867528ce82c3704385aba1406a6400845d09->enter($__internal_af1453bf0ae6348844c3eb71118f867528ce82c3704385aba1406a6400845d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4749404ae4c057d007c27da94af0f756e71994640ddb44f7a1772c6983e9205c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4749404ae4c057d007c27da94af0f756e71994640ddb44f7a1772c6983e9205c->enter($__internal_4749404ae4c057d007c27da94af0f756e71994640ddb44f7a1772c6983e9205c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_4749404ae4c057d007c27da94af0f756e71994640ddb44f7a1772c6983e9205c->leave($__internal_4749404ae4c057d007c27da94af0f756e71994640ddb44f7a1772c6983e9205c_prof);

        
        $__internal_af1453bf0ae6348844c3eb71118f867528ce82c3704385aba1406a6400845d09->leave($__internal_af1453bf0ae6348844c3eb71118f867528ce82c3704385aba1406a6400845d09_prof);

    }

    public function getTemplateName()
    {
        return "app/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 55,  143 => 13,  130 => 64,  126 => 63,  122 => 62,  114 => 56,  111 => 55,  105 => 53,  103 => 52,  94 => 46,  87 => 42,  80 => 38,  70 => 31,  61 => 25,  57 => 24,  43 => 13,  38 => 11,  27 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<!doctype html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/website/bootstrap/css/bootstrap.min.css') }}\">

    <title>{% block title %}Homepage{% endblock %}</title>
</head>
<body>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                asd
            </div>
        </div>
        <div class=\"row mt-5\">
            <div class=\"col-2\">
                <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"POST\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\" />

                    <div class=\"row\">
                        Login
                    </div>
                    <div class=\"row mt-2\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"{{ 'security.login.username'|trans }}\" id=\"username\" name=\"_username\" value=\"\" required=\"required\" />
                    </div>

                    <div class=\"row mt-3\">
                        Password
                    </div>
                    <div class=\"row mt-2\">
                        <input type=\"password\" class=\"form-control\" placeholder=\"{{ 'security.login.password'|trans }}\" id=\"password\" name=\"_password\" required=\"required\" />
                    </div>

                    <div class=\"row mt-2\">
                        <input class=\"btn btn-primary submit float-right ml-auto\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
                    </div>

                    <div class=\"row\">
                        <a href=\"{{ path('fos_user_registration_register') }}\">Create Account</a>
                    </div>
                </form>
            </div>

            <div class=\"col-10\">
                {% if error is defined and error %}
                    <div class=\"p-3 mb-2 bg-danger text-white\">{{ error }}</div>
                {% endif %}
                {% block content %}{% endblock %}
            </div>
        </div>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"{{ asset('assets/website/js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('assets/website/js/popper.min.js') }}\"></script>
    <script src=\"{{ asset('assets/website/bootstrap/js/bootstrap.min.js') }}\"></script>
</body>
</html>", "app/layout.html.twig", "C:\\xampp\\htdocs\\Symfony\\app\\Resources\\views\\app\\layout.html.twig");
    }
}
