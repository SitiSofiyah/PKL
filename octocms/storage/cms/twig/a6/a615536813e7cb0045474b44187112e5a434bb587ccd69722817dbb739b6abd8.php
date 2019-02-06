<?php

/* C:\xampp\htdocs\octocms/themes/jtherczeg-multi/partials/blogs.htm */
class __TwigTemplate_1b990cc32ec812eeb73aa3c05796fb2735c8e71b6d1ae12adecf996f36a759f8 extends Twig_Template
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
                <h2 class=\"section-title text-center wow fadeInDown\">Latest Blogs</h2>
                 </div>

           ";
        // line 6
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", array());
        // line 7
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", array());
        // line 8
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", array());
        // line 9
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", array());
        // line 10
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", array());
        // line 11
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", array());
        // line 12
        echo "

    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 15
            echo "         <div class=\"column\">
                <div class=\"col-md-4\">
                    <div class=\"blog-post blog-large wow fadeInLeft\" data-wow-duration=\"300ms\" data-wow-delay=\"0ms\">
                 <article>
                           <header class=\"entry-header\"> 
                               <div class=\"entry-thumbnail\">
                                  <!--  <img class=\"img-responsive\" src=\"";
            // line 21
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/01.jpg");
            echo "\" alt=\"\">
                                  -->
                               </div>
                               <div class=\"entry-date\"> </div>
                               <h2 class=\"entry-title\"> 
        
            ";
            // line 28
            echo "            ";
            ob_start();
            // line 29
            echo "              

                ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", array()), "html", null, true);
            echo "
                 </h2>
                  </header>
                              <div class=\"entry-content\">
                               ";
            // line 35
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->source, $context["record"], "post", array()), 150));
            echo "
                               
                                 ";
            // line 37
            if (($context["detailsPage"] ?? null)) {
                // line 38
                echo "                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\">
                ";
            }
            // line 40
            echo "                               <button class=\"btn btn-primary\">Read More</button>
                               
                              ";
            // line 42
            if (($context["detailsPage"] ?? null)) {
                // line 43
                echo "  
                    </a>
                ";
            }
            // line 45
            echo "  
                           </div>
                           
                           <footer class=\"entry-meta\">
                               <span class=\"entry-author\"><i class=\"fa fa-pencil\"></i>   ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "date", array()), "html", null, true);
            echo "</span>
                           
                           </footer>
               
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 54
            echo "        
       
                          
                         
                        </article>
                    </div>
                </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 63
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "</ul>

";
        // line 67
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > 1)) {
            // line 68
            echo "    <ul class=\"pagination\">
        ";
            // line 69
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 70
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 72
            echo "
        ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 74
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 75
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
            // line 78
            echo "
        ";
            // line 79
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()))) {
                // line 80
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 82
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/partials/blogs.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 82,  187 => 80,  185 => 79,  182 => 78,  171 => 75,  166 => 74,  162 => 73,  159 => 72,  153 => 70,  151 => 69,  148 => 68,  146 => 67,  142 => 65,  133 => 63,  120 => 54,  112 => 49,  106 => 45,  101 => 43,  99 => 42,  95 => 40,  89 => 38,  87 => 37,  82 => 35,  75 => 31,  71 => 29,  68 => 28,  59 => 21,  51 => 15,  46 => 14,  42 => 12,  40 => 11,  38 => 10,  36 => 9,  34 => 8,  32 => 7,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Latest Blogs</h2>
                 </div>

           {% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}


    {% for record in records %}
         <div class=\"column\">
                <div class=\"col-md-4\">
                    <div class=\"blog-post blog-large wow fadeInLeft\" data-wow-duration=\"300ms\" data-wow-delay=\"0ms\">
                 <article>
                           <header class=\"entry-header\"> 
                               <div class=\"entry-thumbnail\">
                                  <!--  <img class=\"img-responsive\" src=\"{{ 'assets/images/blog/01.jpg'|theme }}\" alt=\"\">
                                  -->
                               </div>
                               <div class=\"entry-date\"> </div>
                               <h2 class=\"entry-title\"> 
        
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
              

                {{ record.title }}
                 </h2>
                  </header>
                              <div class=\"entry-content\">
                               {{ html_limit(record.post,150|raw) }}
                               
                                 {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}
                               <button class=\"btn btn-primary\">Read More</button>
                               
                              {% if detailsPage %}
  
                    </a>
                {% endif %}  
                           </div>
                           
                           <footer class=\"entry-meta\">
                               <span class=\"entry-author\"><i class=\"fa fa-pencil\"></i>   {{ record.date }}</span>
                           
                           </footer>
               
            {% endspaceless %}
        
       
                          
                         
                        </article>
                    </div>
                </div>
        </div>
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
{% endif %}", "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/partials/blogs.htm", "");
    }
}
