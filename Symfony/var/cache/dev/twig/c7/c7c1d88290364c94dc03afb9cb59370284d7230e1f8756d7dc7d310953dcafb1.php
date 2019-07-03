<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_6371df67024f487ddac8849f70e6ccc62eff04272de2a5c159c510078aec443c extends Twig_Template
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
        $__internal_5773b434b3c3ef046a948d9447c7ab4c52db8be45636f72a4fbc03c507e94941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5773b434b3c3ef046a948d9447c7ab4c52db8be45636f72a4fbc03c507e94941->enter($__internal_5773b434b3c3ef046a948d9447c7ab4c52db8be45636f72a4fbc03c507e94941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ae03297b7fa7734a36ec6e0c8442eb988beeabaca4b172767682be2a44c91c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae03297b7fa7734a36ec6e0c8442eb988beeabaca4b172767682be2a44c91c58->enter($__internal_ae03297b7fa7734a36ec6e0c8442eb988beeabaca4b172767682be2a44c91c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_5773b434b3c3ef046a948d9447c7ab4c52db8be45636f72a4fbc03c507e94941->leave($__internal_5773b434b3c3ef046a948d9447c7ab4c52db8be45636f72a4fbc03c507e94941_prof);

        
        $__internal_ae03297b7fa7734a36ec6e0c8442eb988beeabaca4b172767682be2a44c91c58->leave($__internal_ae03297b7fa7734a36ec6e0c8442eb988beeabaca4b172767682be2a44c91c58_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbaa156f2c7f8d0a18db8bb9dc6c8425ea2eda23a8a072c9b46f20a82e683cbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbaa156f2c7f8d0a18db8bb9dc6c8425ea2eda23a8a072c9b46f20a82e683cbb->enter($__internal_fbaa156f2c7f8d0a18db8bb9dc6c8425ea2eda23a8a072c9b46f20a82e683cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_90b1406c9c361cda12c6e48cc1b90d916d477ccb579cef72050302427e27914c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b1406c9c361cda12c6e48cc1b90d916d477ccb579cef72050302427e27914c->enter($__internal_90b1406c9c361cda12c6e48cc1b90d916d477ccb579cef72050302427e27914c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_90b1406c9c361cda12c6e48cc1b90d916d477ccb579cef72050302427e27914c->leave($__internal_90b1406c9c361cda12c6e48cc1b90d916d477ccb579cef72050302427e27914c_prof);

        
        $__internal_fbaa156f2c7f8d0a18db8bb9dc6c8425ea2eda23a8a072c9b46f20a82e683cbb->leave($__internal_fbaa156f2c7f8d0a18db8bb9dc6c8425ea2eda23a8a072c9b46f20a82e683cbb_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_025ce1213ed65dd7d2a0e23efc1b0fa21166e7dba7ac5b0649186747c7de81b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_025ce1213ed65dd7d2a0e23efc1b0fa21166e7dba7ac5b0649186747c7de81b8->enter($__internal_025ce1213ed65dd7d2a0e23efc1b0fa21166e7dba7ac5b0649186747c7de81b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9c263fb67591034fadb61e53f43d48057622eaf3ee0f3e780ad0944094af4891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c263fb67591034fadb61e53f43d48057622eaf3ee0f3e780ad0944094af4891->enter($__internal_9c263fb67591034fadb61e53f43d48057622eaf3ee0f3e780ad0944094af4891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9c263fb67591034fadb61e53f43d48057622eaf3ee0f3e780ad0944094af4891->leave($__internal_9c263fb67591034fadb61e53f43d48057622eaf3ee0f3e780ad0944094af4891_prof);

        
        $__internal_025ce1213ed65dd7d2a0e23efc1b0fa21166e7dba7ac5b0649186747c7de81b8->leave($__internal_025ce1213ed65dd7d2a0e23efc1b0fa21166e7dba7ac5b0649186747c7de81b8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e45f0658a15bd19255cfb85904458ab94406396fe32e83ae4e29b3ce92bf410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e45f0658a15bd19255cfb85904458ab94406396fe32e83ae4e29b3ce92bf410->enter($__internal_7e45f0658a15bd19255cfb85904458ab94406396fe32e83ae4e29b3ce92bf410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01706cd4c65a5f3e39d0c510380ac23e5a751652de9fb904905260aac1d689df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01706cd4c65a5f3e39d0c510380ac23e5a751652de9fb904905260aac1d689df->enter($__internal_01706cd4c65a5f3e39d0c510380ac23e5a751652de9fb904905260aac1d689df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_01706cd4c65a5f3e39d0c510380ac23e5a751652de9fb904905260aac1d689df->leave($__internal_01706cd4c65a5f3e39d0c510380ac23e5a751652de9fb904905260aac1d689df_prof);

        
        $__internal_7e45f0658a15bd19255cfb85904458ab94406396fe32e83ae4e29b3ce92bf410->leave($__internal_7e45f0658a15bd19255cfb85904458ab94406396fe32e83ae4e29b3ce92bf410_prof);

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
", "@Twig/layout.html.twig", "/windows/symfony/example/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
