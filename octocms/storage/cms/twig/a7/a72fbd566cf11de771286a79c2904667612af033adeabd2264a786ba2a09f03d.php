<?php

/* C:\xampp\htdocs\octocms/themes/jtherczeg-multi/partials/meta.htm */
class __TwigTemplate_5f9f8e227e87df6b25d68e791e311e162a43db581338c6bca91e99a4cc6f3941 extends Twig_Template
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
        echo "<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_keywords", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_author", array()), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>PT. Briliantmax Indonesia</title>
    <!-- core CSS -->
    <link href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/font-awesome.min.css", 2 => "assets/css/animate.min.css", 3 => "assets/css/owl.carousel.css", 4 => "assets/css/owl.transitions.css", 5 => "assets/css/prettyPhoto.css", 6 => "assets/css/main.css"));
        // line 18
        echo "\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
    <script src=\"assets/js/html5shiv.js\"></script>
    <script src=\"assets/js/respond.min.js\"></script>
    <![endif]-->       
    <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ico/logo.ico");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/ico/logo.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/ico/logo.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/ico/logo.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/ico/logo.png");
        echo "\">
</head><!--/head-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/partials/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 27,  64 => 26,  60 => 25,  56 => 24,  52 => 23,  45 => 18,  43 => 10,  36 => 6,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"keywords\" content=\"{{ this.page.meta_keywords }}\">
    <meta name=\"author\" content=\"{{ this.page.meta_author }}\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>PT. Briliantmax Indonesia</title>
    <!-- core CSS -->
    <link href=\"{{ [
            'assets/css/bootstrap.min.css',
            'assets/css/font-awesome.min.css',
            'assets/css/animate.min.css',
            'assets/css/owl.carousel.css',
            'assets/css/owl.transitions.css',
            'assets/css/prettyPhoto.css',
            'assets/css/main.css',
        ]|theme }}\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
    <script src=\"assets/js/html5shiv.js\"></script>
    <script src=\"assets/js/respond.min.js\"></script>
    <![endif]-->       
    <link rel=\"shortcut icon\" href=\"{{ 'assets/images/ico/logo.ico'|theme }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ 'images/ico/logo.png'|theme }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ 'images/ico/logo.png'|theme }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ 'images/ico/logo.png'|theme }}\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ 'images/ico/logo.png'|theme }}\">
</head><!--/head-->", "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/partials/meta.htm", "");
    }
}
