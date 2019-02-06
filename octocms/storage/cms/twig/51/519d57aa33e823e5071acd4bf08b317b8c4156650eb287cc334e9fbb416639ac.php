<?php

/* C:\xampp\htdocs\octocms/themes/jtherczeg-multi/partials/footer.htm */
class __TwigTemplate_a819e668c8aec7e741f44d5e5d0b110da2ec386164407d23683584fdd12abd1b extends Twig_Template
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
        echo "<div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                   Copyright &copy;  ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " PT. Briliantmax Indonesia 
                </div>
                
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                   Copyright &copy;  {{ \"now\"|date(\"Y\") }} PT. Briliantmax Indonesia 
                </div>
                
            </div>
        </div>", "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/partials/footer.htm", "");
    }
}
