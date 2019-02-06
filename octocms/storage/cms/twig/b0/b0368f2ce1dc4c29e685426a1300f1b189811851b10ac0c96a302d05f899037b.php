<?php

/* C:\xampp\htdocs\octocms/themes/jtherczeg-multi/partials/product.htm */
class __TwigTemplate_7abc0d75a353215bf690f79176660e060630247a7df4e2a7bba7512a671f9297 extends Twig_Template
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
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Our Products</h2>
                <p class=\"text-center wow fadeInDown\"> ";
        // line 4
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "records", array());
        // line 5
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "displayColumn", array());
        // line 6
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "noRecordsMessage", array());
        // line 7
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "detailsPage", array());
        // line 8
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "detailsKeyColumn", array());
        // line 9
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "detailsUrlParameter", array());
        // line 10
        echo "
<ul class=\"record-list\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 13
            echo "       
            ";
            // line 15
            echo "            ";
            ob_start();
            // line 16
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 17
                echo "                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\">
                ";
            }
            // line 19
            echo "
                ";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["record"], "product", array());
            echo "

                ";
            // line 22
            if (($context["detailsPage"] ?? null)) {
                // line 23
                echo "                    </a>
                ";
            }
            // line 25
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 26
            echo "       
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</ul>

";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > 1)) {
            // line 33
            echo "    <ul class=\"pagination\">
        ";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 35
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 37
            echo "
        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 39
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 40
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
            // line 43
            echo "
        ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()))) {
                // line 45
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 47
            echo "    </ul>
";
        }
        // line 48
        echo "</p>
            </div>

            <div class=\"text-center\">
                
                
                    ";
        // line 54
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", array());
        // line 55
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", array());
        // line 56
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", array());
        // line 57
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", array());
        // line 58
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", array());
        // line 59
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", array());
        // line 60
        echo "
    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 62
            echo "   
            ";
            // line 64
            echo "            ";
            ob_start();
            // line 65
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 66
                echo "                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\">
                ";
            }
            // line 68
            echo "                <ul class=\"portfolio-filter\">
                <li><a  href=\"#\" data-filter=\".a";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", array()), "html", null, true);
            echo "\">  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", array()), "html", null, true);
            echo "</a></li>
              </ul>

                ";
            // line 72
            if (($context["detailsPage"] ?? null)) {
                // line 73
                echo "                    </a>
                ";
            }
            // line 75
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 76
            echo "    
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 78
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "

";
        // line 82
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > 1)) {
            // line 83
            echo "    <ul class=\"pagination\">
        ";
            // line 84
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 85
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 87
            echo "
        ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 89
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 90
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
            // line 93
            echo "
        ";
            // line 94
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()))) {
                // line 95
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 97
            echo "    </ul>
";
        }
        // line 99
        echo "                    
            </div>
";
        // line 101
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList3"] ?? null), "records", array());
        // line 102
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList3"] ?? null), "displayColumn", array());
        // line 103
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList3"] ?? null), "noRecordsMessage", array());
        // line 104
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList3"] ?? null), "detailsPage", array());
        // line 105
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList3"] ?? null), "detailsKeyColumn", array());
        // line 106
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList3"] ?? null), "detailsUrlParameter", array());
        // line 107
        echo "
<ul class=\"record-list\">
 <div class=\"portfolio-items\">
    ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 111
            echo "         ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "product_gallery", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 112
                echo "            ";
                // line 113
                echo "            ";
                ob_start();
                // line 114
                echo "                ";
                if (($context["detailsPage"] ?? null)) {
                    // line 115
                    echo "                    <a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null))));
                    echo "\">
                ";
                }
                // line 117
                echo "            
               <div class=\"portfolio-item a";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", array()), "html", null, true);
                echo "\">
                  <div class=\"portfolio-item-inner\">
                      <img class=\"img-responsive\" src=\"";
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", array()), "html", null, true);
                echo "\" alt=\"\">
                  </div>
                </div><!--/.portfolio-item-->
        
                ";
                // line 124
                if (($context["detailsPage"] ?? null)) {
                    // line 125
                    echo "                    </a>
                ";
                }
                // line 127
                echo "            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 128
                echo "       
    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 130
                echo "        <li class=\"no-data\">";
                echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
                echo "</li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "    </div>
</ul>

";
        // line 136
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > 1)) {
            // line 137
            echo "    <ul class=\"pagination\">
        ";
            // line 138
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 139
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 141
            echo "
        ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 143
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 144
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
            // line 147
            echo "
        ";
            // line 148
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()))) {
                // line 149
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 151
            echo "    </ul>
";
        }
        // line 153
        echo "           

                
            </div>
        </div><!--/.container-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/partials/product.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 153,  426 => 151,  420 => 149,  418 => 148,  415 => 147,  404 => 144,  399 => 143,  395 => 142,  392 => 141,  386 => 139,  384 => 138,  381 => 137,  379 => 136,  374 => 133,  368 => 132,  359 => 130,  353 => 128,  350 => 127,  346 => 125,  344 => 124,  337 => 120,  332 => 118,  329 => 117,  323 => 115,  320 => 114,  317 => 113,  315 => 112,  309 => 111,  305 => 110,  300 => 107,  298 => 106,  296 => 105,  294 => 104,  292 => 103,  290 => 102,  288 => 101,  284 => 99,  280 => 97,  274 => 95,  272 => 94,  269 => 93,  258 => 90,  253 => 89,  249 => 88,  246 => 87,  240 => 85,  238 => 84,  235 => 83,  233 => 82,  229 => 80,  220 => 78,  214 => 76,  211 => 75,  207 => 73,  205 => 72,  197 => 69,  194 => 68,  188 => 66,  185 => 65,  182 => 64,  179 => 62,  174 => 61,  171 => 60,  169 => 59,  167 => 58,  165 => 57,  163 => 56,  161 => 55,  159 => 54,  151 => 48,  147 => 47,  141 => 45,  139 => 44,  136 => 43,  125 => 40,  120 => 39,  116 => 38,  113 => 37,  107 => 35,  105 => 34,  102 => 33,  100 => 32,  96 => 30,  87 => 28,  81 => 26,  78 => 25,  74 => 23,  72 => 22,  67 => 20,  64 => 19,  58 => 17,  55 => 16,  52 => 15,  49 => 13,  44 => 12,  40 => 10,  38 => 9,  36 => 8,  34 => 7,  32 => 6,  30 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Our Products</h2>
                <p class=\"text-center wow fadeInDown\"> {% set records = builderList2.records %}
{% set displayColumn = builderList2.displayColumn %}
{% set noRecordsMessage = builderList2.noRecordsMessage %}
{% set detailsPage = builderList2.detailsPage %}
{% set detailsKeyColumn = builderList2.detailsKeyColumn %}
{% set detailsUrlParameter = builderList2.detailsUrlParameter %}

<ul class=\"record-list\">
    {% for record in records %}
       
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}

                {{ record.product|raw }}

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
{% endif %}</p>
            </div>

            <div class=\"text-center\">
                
                
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
                <ul class=\"portfolio-filter\">
                <li><a  href=\"#\" data-filter=\".a{{ record.id }}\">  {{ record.title }}</a></li>
              </ul>

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
{% set records = builderList3.records %}
{% set displayColumn = builderList3.displayColumn %}
{% set noRecordsMessage = builderList3.noRecordsMessage %}
{% set detailsPage = builderList3.detailsPage %}
{% set detailsKeyColumn = builderList3.detailsKeyColumn %}
{% set detailsUrlParameter = builderList3.detailsUrlParameter %}

<ul class=\"record-list\">
 <div class=\"portfolio-items\">
    {% for record in records %}
         {% for image in record.product_gallery %}
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}
            
               <div class=\"portfolio-item a{{ record.id }}\">
                  <div class=\"portfolio-item-inner\">
                      <img class=\"img-responsive\" src=\"{{ image.path }}\" alt=\"\">
                  </div>
                </div><!--/.portfolio-item-->
        
                {% if detailsPage %}
                    </a>
                {% endif %}
            {% endspaceless %}
       
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
          {% endfor %}
    {% endfor %}
    </div>
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
        </div><!--/.container-->", "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/partials/product.htm", "");
    }
}
