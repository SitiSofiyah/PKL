<?php

/* C:\xampp\htdocs\octocms/themes/jtherczeg-multi/pages/Contact.htm */
class __TwigTemplate_ee6bdd0650ec3da778aeec080f9f487245efe9d498305f950401ac2e5accaf73 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div style=\"height:650px\" data-latitude=\"52.365629\" data-longitude=\"4.871331\">
 ";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("googleMap"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "</div>
      <div class=\"container-wrapper\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-4 col-sm-offset-8\">
                        <div class=\"contact-form\">
                        <h3>Contact Info</h3>
                            <address>
                              <strong>PT. BriliantMax Indonesia</strong><br>
                              Jl. Kripton Kav. 24, Malang, Indonesia<br>
                              Email   : indana.98.z@gmail.com<br>
                              <abbr title=\"Phone\">Phone:</abbr> +62341 – 474898 <br>
                              <abbr title=\"Phone\">Phone:</abbr> +62341 – 474897 <br>
                              <abbr title=\"Phone\">Fax   :</abbr> +62341 – 475882
                            </address><div class=\"confirm-container\">
    <!--This will contain the confirmation when the email is successfully sent-->

<form class=\"ContactUsForm\" role=\"form\"
      data-request=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["contactForm"] ?? null), "html", null, true);
        echo "::onMailSent\"
      data-request-update=\"'";
        // line 22
        echo twig_escape_filter($this->env, ($context["contactForm"] ?? null), "html", null, true);
        echo "::confirm': '.confirm-container'\">

    <div class=\"form-groups\">
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\"  name=\"name\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["name_input"] ?? null), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"email\" placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["email_input"] ?? null), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"subject\" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["subject_input"] ?? null), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <textarea class=\"form-control\" value=\"\" name=\"body\" placeholder=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["message_input"] ?? null), "html", null, true);
        echo "\" cols=\"30\" rows=\"10\"></textarea>
        </div>
        ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "enableCaptcha", array())) {
            // line 38
            echo "            <div class=\"form-group\">
                <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "siteKey", array()), "html", null, true);
            echo "\"></div>
            </div>
        ";
        }
        // line 42
        echo "        <button type=\"submit\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, ($context["send_button"] ?? null), "html", null, true);
        echo "</button>
    </div>
</form>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <br>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/pages/Contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 42,  89 => 39,  86 => 38,  84 => 37,  79 => 35,  73 => 32,  67 => 29,  61 => 26,  54 => 22,  50 => 21,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div style=\"height:650px\" data-latitude=\"52.365629\" data-longitude=\"4.871331\">
 {% component 'googleMap' %}
</div>
      <div class=\"container-wrapper\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-4 col-sm-offset-8\">
                        <div class=\"contact-form\">
                        <h3>Contact Info</h3>
                            <address>
                              <strong>PT. BriliantMax Indonesia</strong><br>
                              Jl. Kripton Kav. 24, Malang, Indonesia<br>
                              Email   : indana.98.z@gmail.com<br>
                              <abbr title=\"Phone\">Phone:</abbr> +62341 – 474898 <br>
                              <abbr title=\"Phone\">Phone:</abbr> +62341 – 474897 <br>
                              <abbr title=\"Phone\">Fax   :</abbr> +62341 – 475882
                            </address><div class=\"confirm-container\">
    <!--This will contain the confirmation when the email is successfully sent-->

<form class=\"ContactUsForm\" role=\"form\"
      data-request=\"{{ contactForm }}::onMailSent\"
      data-request-update=\"'{{ contactForm }}::confirm': '.confirm-container'\">

    <div class=\"form-groups\">
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\"  name=\"name\" placeholder=\"{{name_input}}\">
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"email\" placeholder=\"{{email_input}}\">
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"subject\" placeholder=\"{{subject_input}}\">
        </div>
        <div class=\"form-group\">
            <textarea class=\"form-control\" value=\"\" name=\"body\" placeholder=\"{{message_input}}\" cols=\"30\" rows=\"10\"></textarea>
        </div>
        {% if contactForm.enableCaptcha %}
            <div class=\"form-group\">
                <div class=\"g-recaptcha\" data-sitekey=\"{{ contactForm.siteKey }}\"></div>
            </div>
        {% endif %}
        <button type=\"submit\" class=\"btn btn-primary\">{{send_button}}</button>
    </div>
</form>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <br>", "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/pages/Contact.htm", "");
    }
}
