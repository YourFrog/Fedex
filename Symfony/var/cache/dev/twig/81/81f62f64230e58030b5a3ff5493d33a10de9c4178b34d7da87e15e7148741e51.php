<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_028acd2d4d20ec272c8ca7a937280fd9697151b4896918069072fd061aaf8165 extends Twig_Template
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
        $__internal_7cc6561ced95839551434823c4fc1601297db70071b1f088231aeb27a01eac98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cc6561ced95839551434823c4fc1601297db70071b1f088231aeb27a01eac98->enter($__internal_7cc6561ced95839551434823c4fc1601297db70071b1f088231aeb27a01eac98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_d57b5af4097e2384f364167557ad61d49d1159802481c12e8ece20b3cd92379a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57b5af4097e2384f364167557ad61d49d1159802481c12e8ece20b3cd92379a->enter($__internal_d57b5af4097e2384f364167557ad61d49d1159802481c12e8ece20b3cd92379a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
 <div>
      <a class=\"hiddenanchor\" id=\"signup\"></a>
      <a class=\"hiddenanchor\" id=\"signin\"></a>

      <div class=\"login_wrapper\">
        <div class=\"animate form login_form\">
          <section class=\"login_content\">
              ";
        // line 10
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 10, $this->getSourceContext()); })())) {
            // line 11
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 11, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 11, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                <br/>
              ";
        }
        // line 14
        echo "              <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"POST\">
              <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />              
              <h1>Login Form</h1>
              <div>
                <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" id=\"username\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"required\" />
              </div>
              <div>
                <input type=\"password\" class=\"form-control\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" id=\"password\" name=\"_password\" required=\"required\" />
              </div>              
              <div>
                <input class=\"btn btn-default submit\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />                
                <a class=\"reset_pass\" href=\"#\">Lost your password?</a>
              </div>

              <div class=\"clearfix\"></div>

              <div class=\"separator\">
                <p class=\"change_link\">New to site?
                  <a href=\"#signup\" class=\"to_register\"> Create Account </a>
                </p>

                <div class=\"clearfix\"></div>
                <br />

                <div>
                  <h1><i class=\"fa fa-paw\"></i> Gentelella</h1>
                  <p>©2016 All Rights Reserved.
                    <a href=\"\">Privacy and Terms</a>
                  </p> 
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id=\"register\" class=\"animate form registration_form\">
          <section class=\"login_content\">
              <form class=\"fos_user_registration_register\" action=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" method=\"POST\">
              <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 52, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />              
              <h1>Create Account</h1>
              <div>
                <input type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\" />
              </div>
              <div>
                <input type=\"email\" class=\"form-control\" placeholder=\"Email\" required=\"\" />
              </div>
              <div>
                <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\" />
              </div>
              <div>
              <input class=\"btn btn-default submit\" type=\"submit\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
              </div>

              <div class=\"clearfix\"></div>

              <div class=\"separator\">
                <p class=\"change_link\">Already a member ?
                  <a href=\"#signin\" class=\"to_register\"> Log in </a>
                </p>

                <div class=\"clearfix\"></div>
                <br />

                <div>
                  <h1><i class=\"fa fa-paw\"></i> Gentelella</h1>
                  <p>©2016 All Rights Reserved. <a href=\"\">Privacy and Terms</a></p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
";
        
        $__internal_7cc6561ced95839551434823c4fc1601297db70071b1f088231aeb27a01eac98->leave($__internal_7cc6561ced95839551434823c4fc1601297db70071b1f088231aeb27a01eac98_prof);

        
        $__internal_d57b5af4097e2384f364167557ad61d49d1159802481c12e8ece20b3cd92379a->leave($__internal_d57b5af4097e2384f364167557ad61d49d1159802481c12e8ece20b3cd92379a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 64,  103 => 52,  99 => 51,  69 => 24,  63 => 21,  55 => 18,  49 => 15,  44 => 14,  37 => 11,  35 => 10,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

 <div>
      <a class=\"hiddenanchor\" id=\"signup\"></a>
      <a class=\"hiddenanchor\" id=\"signin\"></a>

      <div class=\"login_wrapper\">
        <div class=\"animate form login_form\">
          <section class=\"login_content\">
              {% if error %}
                <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                <br/>
              {% endif %}
              <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"POST\">
              <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />              
              <h1>Login Form</h1>
              <div>
                <input type=\"text\" class=\"form-control\" placeholder=\"{{ 'security.login.username'|trans }}\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
              </div>
              <div>
                <input type=\"password\" class=\"form-control\" placeholder=\"{{ 'security.login.password'|trans }}\" id=\"password\" name=\"_password\" required=\"required\" />
              </div>              
              <div>
                <input class=\"btn btn-default submit\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />                
                <a class=\"reset_pass\" href=\"#\">Lost your password?</a>
              </div>

              <div class=\"clearfix\"></div>

              <div class=\"separator\">
                <p class=\"change_link\">New to site?
                  <a href=\"#signup\" class=\"to_register\"> Create Account </a>
                </p>

                <div class=\"clearfix\"></div>
                <br />

                <div>
                  <h1><i class=\"fa fa-paw\"></i> Gentelella</h1>
                  <p>©2016 All Rights Reserved.
                    <a href=\"\">Privacy and Terms</a>
                  </p> 
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id=\"register\" class=\"animate form registration_form\">
          <section class=\"login_content\">
              <form class=\"fos_user_registration_register\" action=\"{{ path('fos_user_registration_register') }}\" method=\"POST\">
              <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />              
              <h1>Create Account</h1>
              <div>
                <input type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\" />
              </div>
              <div>
                <input type=\"email\" class=\"form-control\" placeholder=\"Email\" required=\"\" />
              </div>
              <div>
                <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\" />
              </div>
              <div>
              <input class=\"btn btn-default submit\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
              </div>

              <div class=\"clearfix\"></div>

              <div class=\"separator\">
                <p class=\"change_link\">Already a member ?
                  <a href=\"#signin\" class=\"to_register\"> Log in </a>
                </p>

                <div class=\"clearfix\"></div>
                <br />

                <div>
                  <h1><i class=\"fa fa-paw\"></i> Gentelella</h1>
                  <p>©2016 All Rights Reserved. <a href=\"\">Privacy and Terms</a></p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
", "@FOSUser/Security/login_content.html.twig", "C:\\xampp\\htdocs\\Symfony\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
