<?php

/* C:\xampp\htdocs\octocms/themes/jtherczeg-multi/partials/slides.htm */
class __TwigTemplate_bf586ac8e72ff3c697fa31e50af90604fe63ade43ef29bb94596924a2e1938e1 extends Twig_Template
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
        echo "<div class=\"owl-carousel\">
";
        // line 2
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", array());
        // line 3
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", array());
        // line 4
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", array());
        // line 5
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", array());
        // line 6
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", array());
        // line 7
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", array());
        // line 8
        echo "
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 10
            echo "       
            ";
            // line 12
            echo "            ";
            ob_start();
            // line 13
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 14
                echo "                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\">
                ";
            }
            // line 16
            echo "                <div class=\"item\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "slider", array()), "path", array()), "html", null, true);
            echo ");\">
                <div class=\"slider-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                              <!--   <div class=\"carousel-content\">
                                  <h2><span>Multi</span> is the best Onepage html template</h2>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua. </p>
                                  <a class=\"btn btn-primary btn-lg\" href=\"#\">Read More</a>
                              </div> -->
                            </div>
                            <div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
               

               
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 38
            echo "     
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
            
 </div><!--/.owl-carousel-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/partials/slides.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 42,  93 => 40,  87 => 38,  61 => 16,  55 => 14,  52 => 13,  49 => 12,  46 => 10,  41 => 9,  38 => 8,  36 => 7,  34 => 6,  32 => 5,  30 => 4,  28 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"owl-carousel\">
{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

    {% for record in records %}
       
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}
                <div class=\"item\" style=\"background-image: url({{ record.slider.path }});\">
                <div class=\"slider-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                              <!--   <div class=\"carousel-content\">
                                  <h2><span>Multi</span> is the best Onepage html template</h2>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua. </p>
                                  <a class=\"btn btn-primary btn-lg\" href=\"#\">Read More</a>
                              </div> -->
                            </div>
                            <div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
               

               
            {% endspaceless %}
     
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}

            
 </div><!--/.owl-carousel-->", "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/partials/slides.htm", "");
    }
}
