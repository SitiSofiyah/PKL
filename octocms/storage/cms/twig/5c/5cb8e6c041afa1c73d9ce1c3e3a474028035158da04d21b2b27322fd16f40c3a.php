<?php

/* C:\xampp\htdocs\octocms/themes/jtherczeg-multi/layouts/coba.htm */
class __TwigTemplate_142960dfe7efd51c69c1ba09e0c27fdd917603607bd3af842be9c708bb37d4a6 extends Twig_Template
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
        // line 4
        echo "

<body id=\"home\" class=\"homepage\">

<header id=\"header\">
    ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header2"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "</header><!--/header-->


<section class=\"content\">
    ";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 15
        echo "</section><!--/#blog-->



<footer id=\"footer\">
    ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "</footer><!--/#footer-->
  
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/mousescroll.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/smoothscroll.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.prettyPhoto.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.isotope.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.inview.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
";
        // line 34
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
        // line 35
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 36
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/layouts/coba.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 36,  121 => 35,  106 => 34,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  70 => 25,  66 => 24,  61 => 21,  57 => 20,  50 => 15,  48 => 14,  42 => 10,  38 => 9,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    {% partial \"meta\" %}


<body id=\"home\" class=\"homepage\">

<header id=\"header\">
    {% partial \"header2\" %}
</header><!--/header-->


<section class=\"content\">
    {% page %}
</section><!--/#blog-->



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
</html>", "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/layouts/coba.htm", "");
    }
}
