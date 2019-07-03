<?php

/* app/layout.html.twig */
class __TwigTemplate_5a7d7e8b3ef983c4603e259bff50e947f7d5353b43f7d9b1e412c1e1e3c6eca5 extends Twig_Template
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
        $__internal_b972cb43752cf7c885bbb161b3aa4ea1c603204290a54e84325248c6962a5aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b972cb43752cf7c885bbb161b3aa4ea1c603204290a54e84325248c6962a5aa4->enter($__internal_b972cb43752cf7c885bbb161b3aa4ea1c603204290a54e84325248c6962a5aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/layout.html.twig"));

        $__internal_ed0a54810f0fdd2fac62c4d6905aa384d0e3e9c5da82aef8e675816a6ed9dc57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0a54810f0fdd2fac62c4d6905aa384d0e3e9c5da82aef8e675816a6ed9dc57->enter($__internal_ed0a54810f0fdd2fac62c4d6905aa384d0e3e9c5da82aef8e675816a6ed9dc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/layout.html.twig"));

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
                <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Stronga główna</a>
            </div>
        </div>
        <div class=\"row mt-5\">
            <div class=\"col-2\">
                ";
        // line 24
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 25
            echo "                    <div class=\"row\">
                        <a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Logout</a>
                    </div>
                ";
        } else {
            // line 29
            echo "                    <form action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
            echo "\" method=\"POST\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\" />

                        <div class=\"row\">
                            Login
                        </div>
                        <div class=\"row mt-2\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
            echo "\" id=\"username\" name=\"_username\" value=\"\" required=\"required\" />
                        </div>

                        <div class=\"row mt-3\">
                            Password
                        </div>
                        <div class=\"row mt-2\">
                            <input type=\"password\" class=\"form-control\" placeholder=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
            echo "\" id=\"password\" name=\"_password\" required=\"required\" />
                        </div>

                        <div class=\"row mt-2\">
                            <input class=\"btn btn-primary submit float-right ml-auto\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "\" />
                        </div>

                        <div class=\"row\">
                            <a href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Create Account</a>
                        </div>

                        <div class=\"row\">
                            <a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
            echo "\">Forgot Password</a>
                        </div>
                    </form>
               ";
        }
        // line 59
        echo "            </div>

            <div class=\"col-10\">
                ";
        // line 62
        if ((array_key_exists("error", $context) && (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 62, $this->getSourceContext()); })()))) {
            // line 63
            echo "                    <div class=\"p-3 mb-2 bg-danger text-white\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 63, $this->getSourceContext()); })()), "html", null, true);
            echo "</div>
                ";
        }
        // line 65
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "            </div>
        </div>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/website/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/website/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/website/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_b972cb43752cf7c885bbb161b3aa4ea1c603204290a54e84325248c6962a5aa4->leave($__internal_b972cb43752cf7c885bbb161b3aa4ea1c603204290a54e84325248c6962a5aa4_prof);

        
        $__internal_ed0a54810f0fdd2fac62c4d6905aa384d0e3e9c5da82aef8e675816a6ed9dc57->leave($__internal_ed0a54810f0fdd2fac62c4d6905aa384d0e3e9c5da82aef8e675816a6ed9dc57_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_61024a7696c9e82f95fde9f00aef2fa27686180cb7eab270f38d0fd956ea0d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61024a7696c9e82f95fde9f00aef2fa27686180cb7eab270f38d0fd956ea0d08->enter($__internal_61024a7696c9e82f95fde9f00aef2fa27686180cb7eab270f38d0fd956ea0d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7f765474d9068b42b80e9d9c54a6395fd7770d28355d88724f98770d7f1952ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f765474d9068b42b80e9d9c54a6395fd7770d28355d88724f98770d7f1952ad->enter($__internal_7f765474d9068b42b80e9d9c54a6395fd7770d28355d88724f98770d7f1952ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Homepage";
        
        $__internal_7f765474d9068b42b80e9d9c54a6395fd7770d28355d88724f98770d7f1952ad->leave($__internal_7f765474d9068b42b80e9d9c54a6395fd7770d28355d88724f98770d7f1952ad_prof);

        
        $__internal_61024a7696c9e82f95fde9f00aef2fa27686180cb7eab270f38d0fd956ea0d08->leave($__internal_61024a7696c9e82f95fde9f00aef2fa27686180cb7eab270f38d0fd956ea0d08_prof);

    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        $__internal_df234367e8fa428aa45f7f08d99eb19c1ed94e8a6de81fc6117a5fd82c1864a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df234367e8fa428aa45f7f08d99eb19c1ed94e8a6de81fc6117a5fd82c1864a9->enter($__internal_df234367e8fa428aa45f7f08d99eb19c1ed94e8a6de81fc6117a5fd82c1864a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cc6b1c3346eeb379e77032dc0522ba8500c83f723024728b01c8f08578ecc9dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6b1c3346eeb379e77032dc0522ba8500c83f723024728b01c8f08578ecc9dd->enter($__internal_cc6b1c3346eeb379e77032dc0522ba8500c83f723024728b01c8f08578ecc9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_cc6b1c3346eeb379e77032dc0522ba8500c83f723024728b01c8f08578ecc9dd->leave($__internal_cc6b1c3346eeb379e77032dc0522ba8500c83f723024728b01c8f08578ecc9dd_prof);

        
        $__internal_df234367e8fa428aa45f7f08d99eb19c1ed94e8a6de81fc6117a5fd82c1864a9->leave($__internal_df234367e8fa428aa45f7f08d99eb19c1ed94e8a6de81fc6117a5fd82c1864a9_prof);

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
        return array (  186 => 65,  168 => 13,  155 => 74,  151 => 73,  147 => 72,  139 => 66,  136 => 65,  130 => 63,  128 => 62,  123 => 59,  116 => 55,  109 => 51,  102 => 47,  95 => 43,  85 => 36,  76 => 30,  71 => 29,  65 => 26,  62 => 25,  60 => 24,  52 => 19,  43 => 13,  38 => 11,  27 => 2,);
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
                <a href=\"{{ path('homepage') }}\">Stronga główna</a>
            </div>
        </div>
        <div class=\"row mt-5\">
            <div class=\"col-2\">
                {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                    <div class=\"row\">
                        <a href=\"{{ path('fos_user_security_logout') }}\">Logout</a>
                    </div>
                {% else %}
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

                        <div class=\"row\">
                            <a href=\"{{ path('fos_user_resetting_request') }}\">Forgot Password</a>
                        </div>
                    </form>
               {% endif %}
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
</html>", "app/layout.html.twig", "/windows/symfony/example/app/Resources/views/app/layout.html.twig");
    }
}
