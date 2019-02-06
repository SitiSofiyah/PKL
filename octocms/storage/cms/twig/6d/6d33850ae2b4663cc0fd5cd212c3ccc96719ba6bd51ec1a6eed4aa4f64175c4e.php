<?php

/* C:\xampp\htdocs\octocms/themes/jtherczeg-multi/layouts/default.htm */
class __TwigTemplate_9b0c38c5874f4d2ffb3ed43629f283dd8b666c8c92a502ab568b492c531a4602 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 


<body id=\"home\" class=\"homepage\">

<header id=\"header\">
    ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "</header><!--/header-->


<section id=\"main-slider\">
    ";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("slides"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "</section><!--/#main-slider-->
    
<section id=\"profile\" >
    ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("profile"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "</section><!--/#services-->
<section id=\"cta2\">
    <div class=\"container\">
        <div class=\"text-center\">
            ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cta2"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "        </div>
    </div>
</section>

<section id=\"product\">
    ";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "</section><!--/#portfolio-->

<section id=\"blog\">
    ";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blogs"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "</section><!--/#blog-->

<section id=\"get-in-touch\">
    <div class=\"container\">
        <div class=\"section-header\">
           ";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("contact"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "        </div>
    </div>
</section><!--/#get-in-touch-->

<section id=\"contact\">
    ";
        // line 45
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 46
        echo "</section><!--/#contact-->

<footer id=\"footer\">
    ";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "</footer><!--/#footer-->

    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/mousescroll.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/smoothscroll.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.prettyPhoto.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.isotope.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.inview.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
";
        // line 63
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 64
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 65
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 65,  180 => 64,  165 => 63,  161 => 62,  157 => 61,  153 => 60,  149 => 59,  145 => 58,  141 => 57,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  120 => 50,  116 => 49,  111 => 46,  109 => 45,  102 => 40,  98 => 39,  91 => 34,  87 => 33,  82 => 30,  78 => 29,  71 => 24,  67 => 23,  61 => 19,  57 => 18,  52 => 15,  48 => 14,  42 => 10,  38 => 9,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    {% partial \"meta\" %} 


<body id=\"home\" class=\"homepage\">

<header id=\"header\">
    {% partial \"nav\" %}
</header><!--/header-->


<section id=\"main-slider\">
    {% partial \"slides\" %}
</section><!--/#main-slider-->
    
<section id=\"profile\" >
    {% partial \"profile\" %}
</section><!--/#services-->
<section id=\"cta2\">
    <div class=\"container\">
        <div class=\"text-center\">
            {% partial \"cta2\" %}
        </div>
    </div>
</section>

<section id=\"product\">
    {% partial \"product\" %}
</section><!--/#portfolio-->

<section id=\"blog\">
    {% partial \"blogs\" %}
</section><!--/#blog-->

<section id=\"get-in-touch\">
    <div class=\"container\">
        <div class=\"section-header\">
           {% partial \"contact\" %}
        </div>
    </div>
</section><!--/#get-in-touch-->

<section id=\"contact\">
    {% page %}
</section><!--/#contact-->

<footer id=\"footer\">
    {% partial \"footer\" %}
</footer><!--/#footer-->

    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/owl.carousel.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/mousescroll.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/smoothscroll.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.prettyPhoto.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.isotope.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.inview.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/wow.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/main.js'|theme }}\"></script>
{% framework extras %}
{% scripts %}

</body>
</html>", "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/layouts/default.htm", "");
    }
}
