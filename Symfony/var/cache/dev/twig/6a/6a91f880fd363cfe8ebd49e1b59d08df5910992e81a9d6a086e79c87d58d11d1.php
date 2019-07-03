<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_d4a03765763e859e242f661c9b4149ebc274e0a6a4f633460914d9a053b1cf2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_863c52e07fc96fb518ddf784f80fe70e979e8be3e4ddba0324012444ea97a465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_863c52e07fc96fb518ddf784f80fe70e979e8be3e4ddba0324012444ea97a465->enter($__internal_863c52e07fc96fb518ddf784f80fe70e979e8be3e4ddba0324012444ea97a465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_9469a838693d9960cce082a7282a6ab61b4d10a0fb62744fedbf79abfe00680c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9469a838693d9960cce082a7282a6ab61b4d10a0fb62744fedbf79abfe00680c->enter($__internal_9469a838693d9960cce082a7282a6ab61b4d10a0fb62744fedbf79abfe00680c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_863c52e07fc96fb518ddf784f80fe70e979e8be3e4ddba0324012444ea97a465->leave($__internal_863c52e07fc96fb518ddf784f80fe70e979e8be3e4ddba0324012444ea97a465_prof);

        
        $__internal_9469a838693d9960cce082a7282a6ab61b4d10a0fb62744fedbf79abfe00680c->leave($__internal_9469a838693d9960cce082a7282a6ab61b4d10a0fb62744fedbf79abfe00680c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e496fa1b50f5c253ee856c072c7b9af70e885d692fa01dde116b7df947b712cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e496fa1b50f5c253ee856c072c7b9af70e885d692fa01dde116b7df947b712cb->enter($__internal_e496fa1b50f5c253ee856c072c7b9af70e885d692fa01dde116b7df947b712cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd06780a23f1a6446430cc38180044669fea15aa356a3fd1b7391d32b1e2e36f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd06780a23f1a6446430cc38180044669fea15aa356a3fd1b7391d32b1e2e36f->enter($__internal_bd06780a23f1a6446430cc38180044669fea15aa356a3fd1b7391d32b1e2e36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bd06780a23f1a6446430cc38180044669fea15aa356a3fd1b7391d32b1e2e36f->leave($__internal_bd06780a23f1a6446430cc38180044669fea15aa356a3fd1b7391d32b1e2e36f_prof);

        
        $__internal_e496fa1b50f5c253ee856c072c7b9af70e885d692fa01dde116b7df947b712cb->leave($__internal_e496fa1b50f5c253ee856c072c7b9af70e885d692fa01dde116b7df947b712cb_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_aca01a5263de046d2c58136af106e1949c8360fd6169b6b1edddf7e1ba1e3656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca01a5263de046d2c58136af106e1949c8360fd6169b6b1edddf7e1ba1e3656->enter($__internal_aca01a5263de046d2c58136af106e1949c8360fd6169b6b1edddf7e1ba1e3656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_05570c33e169bef2bc81f2d410d534c65dbed4fe9ec65c51012f3be639c31575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05570c33e169bef2bc81f2d410d534c65dbed4fe9ec65c51012f3be639c31575->enter($__internal_05570c33e169bef2bc81f2d410d534c65dbed4fe9ec65c51012f3be639c31575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_05570c33e169bef2bc81f2d410d534c65dbed4fe9ec65c51012f3be639c31575->leave($__internal_05570c33e169bef2bc81f2d410d534c65dbed4fe9ec65c51012f3be639c31575_prof);

        
        $__internal_aca01a5263de046d2c58136af106e1949c8360fd6169b6b1edddf7e1ba1e3656->leave($__internal_aca01a5263de046d2c58136af106e1949c8360fd6169b6b1edddf7e1ba1e3656_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec67303fe072d4dfbdad803a2519ef88bef20a0056312c663dd713baf7ac5815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec67303fe072d4dfbdad803a2519ef88bef20a0056312c663dd713baf7ac5815->enter($__internal_ec67303fe072d4dfbdad803a2519ef88bef20a0056312c663dd713baf7ac5815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cebd57620d092de093bbd98cc1577d423d62044930f6170dea560673d0b35d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cebd57620d092de093bbd98cc1577d423d62044930f6170dea560673d0b35d2b->enter($__internal_cebd57620d092de093bbd98cc1577d423d62044930f6170dea560673d0b35d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cebd57620d092de093bbd98cc1577d423d62044930f6170dea560673d0b35d2b->leave($__internal_cebd57620d092de093bbd98cc1577d423d62044930f6170dea560673d0b35d2b_prof);

        
        $__internal_ec67303fe072d4dfbdad803a2519ef88bef20a0056312c663dd713baf7ac5815->leave($__internal_ec67303fe072d4dfbdad803a2519ef88bef20a0056312c663dd713baf7ac5815_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
