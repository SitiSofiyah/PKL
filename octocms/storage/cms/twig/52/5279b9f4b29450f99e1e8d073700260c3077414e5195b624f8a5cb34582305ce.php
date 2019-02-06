<?php

/* C:\xampp\htdocs\octocms/plugins/jiri/map/components/googlemap/default.htm */
class __TwigTemplate_3fdb0c752d450292abd890a7769178a458f748f6945b0011abb64e9f2b68235d extends Twig_Template
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
        echo "<!-- Map -->
<div id=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"google-map\" style=\"height: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "height"), "method"), "html", null, true);
        echo "; width: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "width"), "method"), "html", null, true);
        echo ";\"></div>

<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&key=";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "apiKey"), "method"), "html", null, true);
        echo "\"></script>
<script>
// This example adds a marker to indicate the position
// of Bondi Beach in Sydney, Australia
function initialize() {
    var center = new google.maps.LatLng(";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "latitude"), "method"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "longitude"), "method"), "html", null, true);
        echo ");
    
    var mapOptions = {
      zoom: ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "zoom"), "method"), "html", null, true);
        echo ",
      center: center,
      mapTypeId: google.maps.MapTypeId.";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "mapTypeId"), "method"), "html", null, true);
        echo "
    }
    var map = new google.maps.Map(document.getElementById('";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "id", array()), "html", null, true);
        echo "'),
                                    mapOptions);

    ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "showMarker"), "method")) {
            // line 20
            echo "        var beachMarker = new google.maps.Marker({
            position: center,
            map: map
        });
    ";
        }
        // line 25
        echo "}

google.maps.event.addDomListener(window, 'load', initialize);
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octocms/plugins/jiri/map/components/googlemap/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 25,  69 => 20,  67 => 19,  61 => 16,  56 => 14,  51 => 12,  43 => 9,  35 => 4,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Map -->
<div id=\"{{__SELF__.id}}\" class=\"google-map\" style=\"height: {{__SELF__.property('height')}}; width: {{__SELF__.property('width')}};\"></div>

<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&key={{__SELF__.property('apiKey')}}\"></script>
<script>
// This example adds a marker to indicate the position
// of Bondi Beach in Sydney, Australia
function initialize() {
    var center = new google.maps.LatLng({{__SELF__.property('latitude')}}, {{__SELF__.property('longitude')}});
    
    var mapOptions = {
      zoom: {{__SELF__.property('zoom')}},
      center: center,
      mapTypeId: google.maps.MapTypeId.{{__SELF__.property('mapTypeId')}}
    }
    var map = new google.maps.Map(document.getElementById('{{__SELF__.id}}'),
                                    mapOptions);

    {% if (__SELF__.property('showMarker')) %}
        var beachMarker = new google.maps.Marker({
            position: center,
            map: map
        });
    {% endif %}
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>", "C:\\xampp\\htdocs\\octocms/plugins/jiri/map/components/googlemap/default.htm", "");
    }
}
