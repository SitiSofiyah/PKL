<?php

/* C:\xampp\htdocs\octocms/themes/jtherczeg-multi/partials/profile.htm */
class __TwigTemplate_0d585d8eccfea581731e83483077a6290ae311ce5729ce7699a8ffc76dd383b5 extends Twig_Template
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
            <div class=\"section-header\">";
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
<ul class=\"record-list\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 11
            echo "     
            ";
            // line 13
            echo "            ";
            ob_start();
            // line 14
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 15
                echo "                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\">
                ";
            }
            // line 17
            echo "                
                <h2 class=\"section-title text-center wow fadeInDown\"> ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "name", array()), "html", null, true);
            echo "</h2>
                <font class=\"text-center wow fadeInDown\">";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["record"], "desc", array());
            echo "</font>
            </div>

            <div class=\"row\">
                <div class=\"features\">
                  ";
            // line 24
            $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "records", array());
            // line 25
            $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "displayColumn", array());
            // line 26
            $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "noRecordsMessage", array());
            // line 27
            $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "detailsPage", array());
            // line 28
            $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "detailsKeyColumn", array());
            // line 29
            $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "detailsUrlParameter", array());
            // line 30
            echo "

    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 33
                echo "      
            ";
                // line 35
                echo "            ";
                ob_start();
                // line 36
                echo "                ";
                if (($context["detailsPage"] ?? null)) {
                    // line 37
                    echo "                    <a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null))));
                    echo "\">
                ";
                }
                // line 39
                echo "                  <div class=\"col-md-4 col-sm-6 wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"0ms\">
                        <div class=\"media service-box\">
                            <div class=\"pull-left\">
                                <i class=\"fa fa-user\"></i>
                            </div>
                            <div class=\"media-body\">
                 <h4 class=\"media-heading\">  ";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", array()), "html", null, true);
                echo "</h4>
                  ";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["record"], "layanan", array());
                echo "
                     
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                

                ";
                // line 54
                if (($context["detailsPage"] ?? null)) {
                    // line 55
                    echo "                    </a>
                ";
                }
                // line 57
                echo "            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 58
                echo "       
    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 60
                echo "        <li class=\"no-data\">";
                echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "

";
            // line 64
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > 1)) {
                // line 65
                echo "    <ul class=\"pagination\">
        ";
                // line 66
                if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) > 1)) {
                    // line 67
                    echo "            <li><a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) - 1)));
                    echo "\">&larr; Prev</a></li>
        ";
                }
                // line 69
                echo "
        ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 71
                    echo "            <li class=\"";
                    echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                    echo "\">
                <a href=\"";
                    // line 72
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "
        ";
                // line 76
                if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()))) {
                    // line 77
                    echo "            <li><a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) + 1)));
                    echo "\">Next &rarr;</a></li>
        ";
                }
                // line 79
                echo "    </ul>
";
            }
            // line 81
            echo "                        
                   
                </div>
            </div><!--/.row-->    
        </div><!--/.container-->

               

                ";
            // line 89
            if (($context["detailsPage"] ?? null)) {
                // line 90
                echo "                    </a>
                ";
            }
            // line 92
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 93
            echo "
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 95
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "</ul>

";
        // line 99
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > 1)) {
            // line 100
            echo "    <ul class=\"pagination\">
        ";
            // line 101
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 102
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 104
            echo "
        ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 106
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 107
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "
        ";
            // line 111
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()))) {
                // line 112
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 114
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/partials/profile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 114,  294 => 112,  292 => 111,  289 => 110,  278 => 107,  273 => 106,  269 => 105,  266 => 104,  260 => 102,  258 => 101,  255 => 100,  253 => 99,  249 => 97,  240 => 95,  234 => 93,  231 => 92,  227 => 90,  225 => 89,  215 => 81,  211 => 79,  205 => 77,  203 => 76,  200 => 75,  189 => 72,  184 => 71,  180 => 70,  177 => 69,  171 => 67,  169 => 66,  166 => 65,  164 => 64,  160 => 62,  151 => 60,  145 => 58,  142 => 57,  138 => 55,  136 => 54,  125 => 46,  121 => 45,  113 => 39,  107 => 37,  104 => 36,  101 => 35,  98 => 33,  93 => 32,  89 => 30,  87 => 29,  85 => 28,  83 => 27,  81 => 26,  79 => 25,  77 => 24,  69 => 19,  65 => 18,  62 => 17,  56 => 15,  53 => 14,  50 => 13,  47 => 11,  42 => 10,  38 => 8,  36 => 7,  34 => 6,  32 => 5,  30 => 4,  28 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
            <div class=\"section-header\">{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<ul class=\"record-list\">
    {% for record in records %}
     
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}
                
                <h2 class=\"section-title text-center wow fadeInDown\"> {{ record.name }}</h2>
                <font class=\"text-center wow fadeInDown\">{{ record.desc|raw }}</font>
            </div>

            <div class=\"row\">
                <div class=\"features\">
                  {% set records = builderList2.records %}
{% set displayColumn = builderList2.displayColumn %}
{% set noRecordsMessage = builderList2.noRecordsMessage %}
{% set detailsPage = builderList2.detailsPage %}
{% set detailsKeyColumn = builderList2.detailsKeyColumn %}
{% set detailsUrlParameter = builderList2.detailsUrlParameter %}


    {% for record in records %}
      
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}
                  <div class=\"col-md-4 col-sm-6 wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"0ms\">
                        <div class=\"media service-box\">
                            <div class=\"pull-left\">
                                <i class=\"fa fa-user\"></i>
                            </div>
                            <div class=\"media-body\">
                 <h4 class=\"media-heading\">  {{ record.title }}</h4>
                  {{ record.layanan|raw }}
                     
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                

                {% if detailsPage %}
                    </a>
                {% endif %}
            {% endspaceless %}
       
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}


{% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}
                        
                   
                </div>
            </div><!--/.row-->    
        </div><!--/.container-->

               

                {% if detailsPage %}
                    </a>
                {% endif %}
            {% endspaceless %}

    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}
</ul>

{% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}", "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/partials/profile.htm", "");
    }
}
