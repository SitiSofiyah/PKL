<?php

/* C:\xampp\htdocs\octocms/themes/jtherczeg-multi/pages/blog-detail.htm */
class __TwigTemplate_2a6ded8c0739b3bc8a7a43d643faa924f123e505769561a87832d78b2d34ba13 extends Twig_Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", array());
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", array());
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", array());
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "<div class=\"container\">
<div class=\"row\">
<div class=\"side\">
 <div class=\"col-md-3 col-sm-6\">
<div class='flex-container'>
 <h4> The Latest Blog </h4>
  ";
            // line 12
            $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", array());
            // line 13
            $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", array());
            // line 14
            $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", array());
            // line 15
            $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", array());
            // line 16
            $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", array());
            // line 17
            $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", array());
            // line 18
            echo "
<ul class=\"record-list\">
    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 21
                echo "        <li>
            ";
                // line 23
                echo "            ";
                ob_start();
                // line 24
                echo "                ";
                if (($context["detailsPage"] ?? null)) {
                    // line 25
                    echo "                    <a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null))));
                    echo "\">
                ";
                }
                // line 27
                echo "
                ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], ($context["displayColumn"] ?? null)), "html", null, true);
                echo "

                ";
                // line 30
                if (($context["detailsPage"] ?? null)) {
                    // line 31
                    echo "                    </a>
                ";
                }
                // line 33
                echo "            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 34
                echo "        </li>
    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 36
                echo "        <li class=\"no-data\">";
                echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "</ul>

";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > 1)) {
                // line 41
                echo "    <ul class=\"pagination\">
        ";
                // line 42
                if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) > 1)) {
                    // line 43
                    echo "            <li><a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) - 1)));
                    echo "\">&larr; Prev</a></li>
        ";
                }
                // line 45
                echo "
        ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 47
                    echo "            <li class=\"";
                    echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                    echo "\">
                <a href=\"";
                    // line 48
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
                // line 51
                echo "
        ";
                // line 52
                if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()))) {
                    // line 53
                    echo "            <li><a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) + 1)));
                    echo "\">Next &rarr;</a></li>
        ";
                }
                // line 55
                echo "    </ul>
";
            }
            // line 57
            echo "</div>
  </div>
  </div>
 <div class=\"col-md-9 col-sm-6\">
  <h2>  ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", array()), "html", null, true);
            echo "</h2>
    
     ";
            // line 63
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "post", array());
            echo "
  </div>
          </div>
               </div>
";
        } else {
            // line 68
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/pages/blog-detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 68,  176 => 63,  171 => 61,  165 => 57,  161 => 55,  155 => 53,  153 => 52,  150 => 51,  139 => 48,  134 => 47,  130 => 46,  127 => 45,  121 => 43,  119 => 42,  116 => 41,  114 => 40,  110 => 38,  101 => 36,  95 => 34,  92 => 33,  88 => 31,  86 => 30,  81 => 28,  78 => 27,  72 => 25,  69 => 24,  66 => 23,  63 => 21,  58 => 20,  54 => 18,  52 => 17,  50 => 16,  48 => 15,  46 => 14,  44 => 13,  42 => 12,  34 => 6,  32 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}
<div class=\"container\">
<div class=\"row\">
<div class=\"side\">
 <div class=\"col-md-3 col-sm-6\">
<div class='flex-container'>
 <h4> The Latest Blog </h4>
  {% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<ul class=\"record-list\">
    {% for record in records %}
        <li>
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}

                {{ attribute(record, displayColumn) }}

                {% if detailsPage %}
                    </a>
                {% endif %}
            {% endspaceless %}
        </li>
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
  </div>
  </div>
 <div class=\"col-md-9 col-sm-6\">
  <h2>  {{ record.title }}</h2>
    
     {{ record.post|raw }}
  </div>
          </div>
               </div>
{% else %}
    {{ notFoundMessage }}
{% endif %}", "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/pages/blog-detail.htm", "");
    }
}
