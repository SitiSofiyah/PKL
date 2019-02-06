<?php

/* C:\xampp\htdocs\octocms/themes/jtherczeg-multi/partials/header2.htm */
class __TwigTemplate_97c1238d91e079a0f421e1a354251b812a59479728af4491a03918b233a5ae7b extends Twig_Template
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
        echo "<nav id=\"main-menu\" class=\"navbar navbar-default navbar-fixed-top\" role=\"banner\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    ";
        // line 10
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", array());
        // line 11
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", array());
        // line 12
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", array());
        // line 13
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", array());
        // line 14
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", array());
        // line 15
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", array());
        // line 16
        echo "
<ul class=\"record-list\">
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 19
            echo "      
            ";
            // line 21
            echo "            ";
            ob_start();
            // line 22
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 23
                echo "                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\">
                ";
            }
            // line 25
            echo "                <a class=\"navbar-brand\" href=\"../\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "logo", array()), "path", array()), "html", null, true);
            echo "\" alt=\"logo\"></a> 

                ";
            // line 27
            if (($context["detailsPage"] ?? null)) {
                // line 28
                echo "                    </a>
                ";
            }
            // line 30
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 31
            echo "     
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</ul>

";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > 1)) {
            // line 38
            echo "    <ul class=\"pagination\">
        ";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 40
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 42
            echo "
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 44
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 45
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
            // line 48
            echo "
        ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()))) {
                // line 50
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 52
            echo "    </ul>
";
        }
        // line 54
        echo "                    
                    
                </div>
\t\t\t\t
    </nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/partials/header2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 54,  151 => 52,  145 => 50,  143 => 49,  140 => 48,  129 => 45,  124 => 44,  120 => 43,  117 => 42,  111 => 40,  109 => 39,  106 => 38,  104 => 37,  100 => 35,  91 => 33,  85 => 31,  82 => 30,  78 => 28,  76 => 27,  70 => 25,  64 => 23,  61 => 22,  58 => 21,  55 => 19,  50 => 18,  46 => 16,  44 => 15,  42 => 14,  40 => 13,  38 => 12,  36 => 11,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav id=\"main-menu\" class=\"navbar navbar-default navbar-fixed-top\" role=\"banner\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    {% set records = builderList.records %}
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
                <a class=\"navbar-brand\" href=\"../\"><img src=\"{{ record.logo.path }}\" alt=\"logo\"></a> 

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
{% endif %}
                    
                    
                </div>
\t\t\t\t
    </nav>", "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/partials/header2.htm", "");
    }
}
