<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/search.html.twig */
class __TwigTemplate_1d01be8ba14add0b00d2bc8ee2393b42dadcaaa5ec0ef3b2530c3b2c3726e09b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/search.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 227
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 228
        echo "    ";
        echo twig_call_macro($macros["_self"], "macro_displayNavbar", [], 228, $context, $this->getSourceContext());
        echo "
    ";
        // line 229
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 229, $this->source); })()), "status", [], "any", false, false, false, 229), "ok"))) {
            // line 230
            echo "        <div class=\"container\">
            ";
            // line 231
            $context["color"] = twig_call_macro($macros["_self"], "macro_airQualityColorSetter", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 231, $this->source); })()), "data", [], "any", false, false, false, 231), "aqi", [], "any", false, false, false, 231)], 231, $context, $this->getSourceContext());
            // line 232
            echo "            ";
            echo twig_call_macro($macros["_self"], "macro_displayMain", [(isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 232, $this->source); })()), (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 232, $this->source); })())], 232, $context, $this->getSourceContext());
            echo "
            ";
            // line 233
            echo twig_call_macro($macros["_self"], "macro_airQualityDescription", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 233, $this->source); })()), "data", [], "any", false, false, false, 233), "aqi", [], "any", false, false, false, 233), (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 233, $this->source); })())], 233, $context, $this->getSourceContext());
            echo "
            ";
            // line 234
            echo twig_call_macro($macros["_self"], "macro_setGases", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 234, $this->source); })()), "data", [], "any", false, false, false, 234), "iaqi", [], "any", false, false, false, 234)], 234, $context, $this->getSourceContext());
            echo "
            ";
            // line 235
            echo twig_call_macro($macros["_self"], "macro_setWeather", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 235, $this->source); })()), "data", [], "any", false, false, false, 235), "iaqi", [], "any", false, false, false, 235)], 235, $context, $this->getSourceContext());
            echo "
            ";
            // line 236
            echo twig_call_macro($macros["_self"], "macro_displayUrlSource", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 236, $this->source); })()), "data", [], "any", false, false, false, 236), "city", [], "any", false, false, false, 236), "url", [], "any", false, false, false, 236)], 236, $context, $this->getSourceContext());
            echo "
        </div>
        <div id=\"map\" class=\"h-100 w-100 border-rounded rounded mb-5 box-shadow\" ><div>
        <input type=\"hidden\" id=\"lat\" value=\"";
            // line 239
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 239, $this->source); })()), "data", [], "any", false, false, false, 239), "city", [], "any", false, false, false, 239), "geo", [], "any", false, false, false, 239), 0, [], "array", false, false, false, 239), "html", null, true);
            echo "\">
        <input type=\"hidden\" id=\"long\" value=\"";
            // line 240
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 240, $this->source); })()), "data", [], "any", false, false, false, 240), "city", [], "any", false, false, false, 240), "geo", [], "any", false, false, false, 240), 1, [], "array", false, false, false, 240), "html", null, true);
            echo "\">
    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 241
(isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 241, $this->source); })()), "status", [], "any", false, false, false, 241), "error"))) {
            // line 242
            echo "        <div class=\"text-center\">
            <h1 class=\"display-2\">That's bad!</h1>
            <h1>The city you're trying to find is not registered on <a href=\"https://aqicn.org/\">aqicn.org</a></h1>
            <p>Maybe there's no form to calculate the data, or not resources to know it.</p>
            <em>Message: ";
            // line 246
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 246, $this->source); })()), "data", [], "any", false, false, false, 246), "html", null, true);
            echo "</em>
        </div>
    ";
        }
        // line 249
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 256
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 249
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 250
        echo "        <style>
            body {
                background-color: white !important;
            }
        </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 256
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 257
        echo "    <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAEQGPMe9zgHRZoR-zsmwYobl4ebKRbAEY&callback=initMap\"
        type=\"text/javascript\"></script>
    <script>\t
    var map;
    var latitude = parseFloat(document.getElementById('lat').value);
    var long = parseFloat(document.getElementById('long').value);
    console.log(latitude, long)

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: latitude, lng: long},
            zoom: 13,
        });
        var marker = new google.maps.Marker({
            position: {lat: latitude, lng: long},
            map: map,
        title: 'Your city'
        });
    }
    </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function macro_displayMain($__object__ = null, $__color__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "object" => $__object__,
            "color" => $__color__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "displayMain"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "displayMain"));

            // line 5
            echo "     <div class=\"d-flex mb-2\">
        <div class=\"text-white p-4 mr-3 border rounded\" style=\"background-color: ";
            // line 6
            echo twig_escape_filter($this->env, twig_trim_filter((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 6, $this->source); })())), "html", null, true);
            echo "\">
            <h1 class=\"display-4\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 7, $this->source); })()), "data", [], "any", false, false, false, 7), "aqi", [], "any", false, false, false, 7), "html", null, true);
            echo "</h1>
        </div>
        <div class=\"align-middle my-auto w-100\">
            <h1 class=\"align-middle my-auto \">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 10, $this->source); })()), "data", [], "any", false, false, false, 10), "city", [], "any", false, false, false, 10), "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</h1>
            <br>
            <em class=\"\">Updated at ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 12, $this->source); })()), "data", [], "any", false, false, false, 12), "time", [], "any", false, false, false, 12), "s", [], "any", false, false, false, 12), "html", null, true);
            echo "</em>
        </div>
    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 16
    public function macro_airQualityDescription($__aqi__ = null, $__color__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "aqi" => $__aqi__,
            "color" => $__color__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "airQualityDescription"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "airQualityDescription"));

            // line 17
            echo "    ";
            if ((0 >= twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 17, $this->source); })()), 50))) {
                // line 18
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_airPollutionStatus", ["Good", "Air quality is considered satisfactory, and air pollution poses little or no risk", "None",                 // line 22
(isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 22, $this->source); })())], 18, $context, $this->getSourceContext());
                // line 23
                echo "
    ";
            } elseif (((0 <= twig_compare(            // line 24
(isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 24, $this->source); })()), 50)) && (-1 === twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 24, $this->source); })()), 100)))) {
                // line 25
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_airPollutionStatus", ["Moderate", "Air quality is acceptable; however, for some pollutants there may be a moderate health concern for a very small number of people who are unusually sensitive to air pollution.", "Active children and adults, and people with respiratory disease, such as asthma, should limit prolonged outdoor exertion.",                 // line 29
(isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 29, $this->source); })())], 25, $context, $this->getSourceContext());
                // line 30
                echo "
    ";
            } elseif (((0 <= twig_compare(            // line 31
(isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 31, $this->source); })()), 100)) && (-1 === twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 31, $this->source); })()), 150)))) {
                // line 32
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_airPollutionStatus", ["Unhealthy for Sensitive Groups", "Members of sensitive groups may experience health effects. The general public is not likely to be affected.", "Active children and adults, and people with respiratory disease, such as asthma, should limit prolonged outdoor exertion.",                 // line 36
(isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 36, $this->source); })())], 32, $context, $this->getSourceContext());
                // line 37
                echo "
    ";
            } elseif (((0 <= twig_compare(            // line 38
(isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 38, $this->source); })()), 150)) && (-1 === twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 38, $this->source); })()), 200)))) {
                // line 39
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_airPollutionStatus", ["Unhealthy", "Everyone may begin to experience health effects; members of sensitive groups may experience more serious health effects", "Active children and adults, and people with respiratory disease, such as asthma, should avoid prolonged outdoor exertion; everyone else, especially children, should limit prolonged outdoor exertion",                 // line 43
(isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 43, $this->source); })())], 39, $context, $this->getSourceContext());
                // line 44
                echo "
    ";
            } elseif (((0 <= twig_compare(            // line 45
(isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 45, $this->source); })()), 200)) && (-1 === twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 45, $this->source); })()), 300)))) {
                // line 46
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_airPollutionStatus", ["Very Unhealthy", "Health warnings of emergency conditions. The entire population is more likely to be affected.", "Active children and adults, and people with respiratory disease, such as asthma, should avoid all outdoor exertion; everyone else, especially children, should limit outdoor exertion.",                 // line 50
(isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 50, $this->source); })())], 46, $context, $this->getSourceContext());
                // line 51
                echo "
    ";
            } elseif (((0 <= twig_compare(            // line 52
(isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 52, $this->source); })()), 300)) && (-1 === twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 52, $this->source); })()), 500)))) {
                // line 53
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_airPollutionStatus", ["Hazardous", "Health alert: everyone may experience more serious health effects", "Everyone should avoid all outdoor exertion",                 // line 57
(isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 57, $this->source); })())], 53, $context, $this->getSourceContext());
                // line 58
                echo "
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 61
    public function macro_airPollutionStatus($__airPollutionLevel__ = null, $__healthImplication__ = null, $__cautionaryStatement__ = null, $__color__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "airPollutionLevel" => $__airPollutionLevel__,
            "healthImplication" => $__healthImplication__,
            "cautionaryStatement" => $__cautionaryStatement__,
            "color" => $__color__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "airPollutionStatus"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "airPollutionStatus"));

            // line 62
            echo "    <div class=\"container text-white border rounded box-shadow\" style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_trim_filter((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 62, $this->source); })())), "html", null, true);
            echo "\">
        <div class=\"row border-bottom rounded pb-3 pt-3\">
            <div class=\"col-3 font-weight-bold\">
                Air Pollution Level
            </div>
            <div class=\"col-5 font-weight-bold\">
                Health Implications
            </div>
            <div class=\"col-4 font-weight-bold\">
                Cautionary Statement (for PM2.5)
            </div>
        </div>
        <div class=\"row border-0 rounded pb-4 pt-4\">
            <div class=\"col-3\">
                <strong>
                ";
            // line 77
            echo twig_escape_filter($this->env, (isset($context["airPollutionLevel"]) || array_key_exists("airPollutionLevel", $context) ? $context["airPollutionLevel"] : (function () { throw new RuntimeError('Variable "airPollutionLevel" does not exist.', 77, $this->source); })()), "html", null, true);
            echo "
                </strong>
            </div>
            <div class=\"col-5\">
                <strong>
                ";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["healthImplication"]) || array_key_exists("healthImplication", $context) ? $context["healthImplication"] : (function () { throw new RuntimeError('Variable "healthImplication" does not exist.', 82, $this->source); })()), "html", null, true);
            echo "
                </strong>
            </div>
            <div class=\"col-4\">
                <strong>
                ";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["cautionaryStatement"]) || array_key_exists("cautionaryStatement", $context) ? $context["cautionaryStatement"] : (function () { throw new RuntimeError('Variable "cautionaryStatement" does not exist.', 87, $this->source); })()), "html", null, true);
            echo "
                </strong>
            </div>
        </div>
    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 93
    public function macro_airQualityColorSetter($__aqi__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "aqi" => $__aqi__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "airQualityColorSetter"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "airQualityColorSetter"));

            // line 94
            echo "    ";
            if ((0 >= twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 94, $this->source); })()), 50))) {
                // line 95
                echo "        ";
                $context["color"] = "#449A66";
                // line 96
                echo "    ";
            } elseif (((0 <= twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 96, $this->source); })()), 50)) && (-1 === twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 96, $this->source); })()), 100)))) {
                // line 97
                echo "        ";
                $context["color"] = "#1DA488";
                // line 98
                echo "    ";
            } elseif (((0 <= twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 98, $this->source); })()), 100)) && (-1 === twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 98, $this->source); })()), 150)))) {
                // line 99
                echo "        ";
                $context["color"] = "#F99932";
                // line 100
                echo "    ";
            } elseif (((0 <= twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 100, $this->source); })()), 150)) && (-1 === twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 100, $this->source); })()), 200)))) {
                // line 101
                echo "        ";
                $context["color"] = "#CE3B34";
                // line 102
                echo "    ";
            } elseif (((0 <= twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 102, $this->source); })()), 200)) && (-1 === twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 102, $this->source); })()), 300)))) {
                // line 103
                echo "        ";
                $context["color"] = "#6A4299";
                // line 104
                echo "    ";
            } elseif (((0 <= twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 104, $this->source); })()), 300)) && (-1 === twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 104, $this->source); })()), 500)))) {
                // line 105
                echo "        ";
                $context["color"] = "#7F2223";
                // line 106
                echo "    ";
            }
            // line 107
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 107, $this->source); })()), "html", null, true);
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 109
    public function macro_setGases($__iaqi__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "iaqi" => $__iaqi__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "setGases"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "setGases"));

            // line 110
            echo "    <div class=\"container mt-5 pr-3 pl-3 border rounded box-shadow\">
        <div class=\"row p-2\">
            <div class=\"col-12\">
                <h4>Air particles</h4>
            </div>
        </div>
        ";
            // line 116
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["iaqi"] ?? null), "pm25", [], "any", false, true, false, 116), "v", [], "any", true, true, false, 116)) {
                // line 117
                echo "            <div class=\"row border-top p-3\">
                <div class=\"col-6\">
                    <h6>PM2.5</h6>
                </div>
                <div class=\"col-6\">
                    <h6>";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["iaqi"]) || array_key_exists("iaqi", $context) ? $context["iaqi"] : (function () { throw new RuntimeError('Variable "iaqi" does not exist.', 122, $this->source); })()), "pm25", [], "any", false, false, false, 122), "v", [], "any", false, false, false, 122), "html", null, true);
                echo "</h6>
                </div>
            </div>
        ";
            }
            // line 126
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["iaqi"] ?? null), "pm10", [], "any", false, true, false, 126), "v", [], "any", true, true, false, 126)) {
                // line 127
                echo "            <div class=\"row border-top p-3\">
                <div class=\"col-6\">
                    <h6>PM10</h6>
                </div>
                <div class=\"col-6\">
                    <h6>";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["iaqi"]) || array_key_exists("iaqi", $context) ? $context["iaqi"] : (function () { throw new RuntimeError('Variable "iaqi" does not exist.', 132, $this->source); })()), "pm10", [], "any", false, false, false, 132), "v", [], "any", false, false, false, 132), "html", null, true);
                echo "</h6>
                </div>
            </div>
        ";
            }
            // line 136
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["iaqi"] ?? null), "o3", [], "any", false, true, false, 136), "v", [], "any", true, true, false, 136)) {
                // line 137
                echo "            <div class=\"row border-top p-3\">
                <div class=\"col-6\">
                    <h6>03</h6>
                </div>
                <div class=\"col-6\">
                    <h6>";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["iaqi"]) || array_key_exists("iaqi", $context) ? $context["iaqi"] : (function () { throw new RuntimeError('Variable "iaqi" does not exist.', 142, $this->source); })()), "o3", [], "any", false, false, false, 142), "v", [], "any", false, false, false, 142), "html", null, true);
                echo "</h6>
                </div>
            </div>        
        ";
            }
            // line 146
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["iaqi"] ?? null), "no2", [], "any", false, true, false, 146), "v", [], "any", true, true, false, 146)) {
                // line 147
                echo "            <div class=\"row border-top p-3\">
                <div class=\"col-6\">
                    <h6>NO2</h6>
                </div>
                <div class=\"col-6\">
                    <h6>";
                // line 152
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["iaqi"]) || array_key_exists("iaqi", $context) ? $context["iaqi"] : (function () { throw new RuntimeError('Variable "iaqi" does not exist.', 152, $this->source); })()), "no2", [], "any", false, false, false, 152), "v", [], "any", false, false, false, 152), "html", null, true);
                echo "</h6>
                </div>
            </div>
        ";
            }
            // line 156
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["iaqi"] ?? null), "so2", [], "any", false, true, false, 156), "v", [], "any", true, true, false, 156)) {
                // line 157
                echo "            <div class=\"row border-top p-3\">
                <div class=\"col-6\">
                    <h6>SO2</h6>
                </div>
                <div class=\"col-6\">
                    <h6>";
                // line 162
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["iaqi"]) || array_key_exists("iaqi", $context) ? $context["iaqi"] : (function () { throw new RuntimeError('Variable "iaqi" does not exist.', 162, $this->source); })()), "so2", [], "any", false, false, false, 162), "v", [], "any", false, false, false, 162), "html", null, true);
                echo "</h6>
                </div>
            </div>
        ";
            }
            // line 166
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["iaqi"] ?? null), "co", [], "any", false, true, false, 166), "v", [], "any", true, true, false, 166)) {
                // line 167
                echo "            <div class=\"row border-top p-3\">
                <div class=\"col-6\">
                    <h6>CO</h6>
                </div>
                <div class=\"col-6\">
                    <h6>";
                // line 172
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["iaqi"]) || array_key_exists("iaqi", $context) ? $context["iaqi"] : (function () { throw new RuntimeError('Variable "iaqi" does not exist.', 172, $this->source); })()), "co", [], "any", false, false, false, 172), "v", [], "any", false, false, false, 172), "html", null, true);
                echo "</h6>
                </div>
            </div>
        ";
            }
            // line 176
            echo "    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 178
    public function macro_setWeather($__iaqi__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "iaqi" => $__iaqi__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "setWeather"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "setWeather"));

            // line 179
            echo "    <div class=\"container mt-5 mb-2  pr-3 pl-3 border rounded box-shadow\">
        <div class=\"row p-2\">
            <div class=\"col-12\">
                <h4>Weather data</h4>
            </div>
        </div>
         <div class=\"row border-top p-3\">
            <div class=\"col-6\">
                <h6>Pressure</h6>
            </div>
            <div class=\"col-6\">
                <h6>";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["iaqi"]) || array_key_exists("iaqi", $context) ? $context["iaqi"] : (function () { throw new RuntimeError('Variable "iaqi" does not exist.', 190, $this->source); })()), "p", [], "any", false, false, false, 190), "v", [], "any", false, false, false, 190), "html", null, true);
            echo " PA</h6>
            </div>
        </div>
        <div class=\"row border-top p-3\">
            <div class=\"col-6\">
                <h6>Temperature</h6>
            </div>
            <div class=\"col-6\">
                <h6>";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["iaqi"]) || array_key_exists("iaqi", $context) ? $context["iaqi"] : (function () { throw new RuntimeError('Variable "iaqi" does not exist.', 198, $this->source); })()), "t", [], "any", false, false, false, 198), "v", [], "any", false, false, false, 198), "html", null, true);
            echo " ºC</h6>
            </div>
        </div>
        <div class=\"row border-top p-3\">
            <div class=\"col-6\">
                <h6>Air humidity</h6>
            </div>
            <div class=\"col-6\">
                <h6>";
            // line 206
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["iaqi"]) || array_key_exists("iaqi", $context) ? $context["iaqi"] : (function () { throw new RuntimeError('Variable "iaqi" does not exist.', 206, $this->source); })()), "h", [], "any", false, false, false, 206), "v", [], "any", false, false, false, 206), "html", null, true);
            echo "%</h6>
            </div>
        </div>
        <div class=\"row border-top p-3\">
            <div class=\"col-6\">
                <h6>Wind</h6>
            </div>
            <div class=\"col-6\">
                <h6>";
            // line 214
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["iaqi"]) || array_key_exists("iaqi", $context) ? $context["iaqi"] : (function () { throw new RuntimeError('Variable "iaqi" does not exist.', 214, $this->source); })()), "w", [], "any", false, false, false, 214), "v", [], "any", false, false, false, 214), "html", null, true);
            echo " km/h</h6>
            </div>
        </div>
    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 219
    public function macro_displayUrlSource($__city__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "city" => $__city__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "displayUrlSource"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "displayUrlSource"));

            // line 220
            echo "     <em class=\"float-right mt-3 mb-5\">
        Source from: 
        <a class=\"text-decoration-none\" 
            href=\"";
            // line 223
            echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 223, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 223, $this->source); })()), "html", null, true);
            echo "
        </a>
    </em>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "home/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  779 => 223,  774 => 220,  755 => 219,  735 => 214,  724 => 206,  713 => 198,  702 => 190,  689 => 179,  670 => 178,  654 => 176,  647 => 172,  640 => 167,  637 => 166,  630 => 162,  623 => 157,  620 => 156,  613 => 152,  606 => 147,  603 => 146,  596 => 142,  589 => 137,  586 => 136,  579 => 132,  572 => 127,  569 => 126,  562 => 122,  555 => 117,  553 => 116,  545 => 110,  526 => 109,  508 => 107,  505 => 106,  502 => 105,  499 => 104,  496 => 103,  493 => 102,  490 => 101,  487 => 100,  484 => 99,  481 => 98,  478 => 97,  475 => 96,  472 => 95,  469 => 94,  450 => 93,  429 => 87,  421 => 82,  413 => 77,  394 => 62,  372 => 61,  355 => 58,  353 => 57,  351 => 53,  349 => 52,  346 => 51,  344 => 50,  342 => 46,  340 => 45,  337 => 44,  335 => 43,  333 => 39,  331 => 38,  328 => 37,  326 => 36,  324 => 32,  322 => 31,  319 => 30,  317 => 29,  315 => 25,  313 => 24,  310 => 23,  308 => 22,  306 => 18,  303 => 17,  283 => 16,  264 => 12,  259 => 10,  253 => 7,  249 => 6,  246 => 5,  226 => 4,  196 => 257,  186 => 256,  171 => 250,  161 => 249,  150 => 256,  147 => 249,  141 => 246,  135 => 242,  133 => 241,  129 => 240,  125 => 239,  119 => 236,  115 => 235,  111 => 234,  107 => 233,  102 => 232,  100 => 231,  97 => 230,  95 => 229,  90 => 228,  80 => 227,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}
{% macro displayMain(object, color) %}
     <div class=\"d-flex mb-2\">
        <div class=\"text-white p-4 mr-3 border rounded\" style=\"background-color: {{color|trim}}\">
            <h1 class=\"display-4\">{{object.data.aqi}}</h1>
        </div>
        <div class=\"align-middle my-auto w-100\">
            <h1 class=\"align-middle my-auto \">{{object.data.city.name}}</h1>
            <br>
            <em class=\"\">Updated at {{object.data.time.s}}</em>
        </div>
    </div>
{% endmacro %}
{% macro airQualityDescription(aqi, color) %}
    {% if aqi <= 50 %}
        {{_self.airPollutionStatus(
            'Good', 
            'Air quality is considered satisfactory, and air pollution poses little or no risk',
            'None',
            color
        )}}
    {% elseif aqi >= 50 and aqi < 100 %}
        {{_self.airPollutionStatus(
            'Moderate',
            'Air quality is acceptable; however, for some pollutants there may be a moderate health concern for a very small number of people who are unusually sensitive to air pollution.',
            'Active children and adults, and people with respiratory disease, such as asthma, should limit prolonged outdoor exertion.',
            color
        )}}
    {% elseif aqi >= 100 and aqi < 150 %}
        {{_self.airPollutionStatus(
            'Unhealthy for Sensitive Groups',
            'Members of sensitive groups may experience health effects. The general public is not likely to be affected.',
            'Active children and adults, and people with respiratory disease, such as asthma, should limit prolonged outdoor exertion.',
            color
        )}}
    {% elseif aqi >= 150 and aqi < 200 %}
        {{_self.airPollutionStatus(
            'Unhealthy',
            'Everyone may begin to experience health effects; members of sensitive groups may experience more serious health effects',
            'Active children and adults, and people with respiratory disease, such as asthma, should avoid prolonged outdoor exertion; everyone else, especially children, should limit prolonged outdoor exertion',
            color
        )}}
    {% elseif aqi >= 200 and aqi < 300 %}
        {{_self.airPollutionStatus(
            'Very Unhealthy',
            'Health warnings of emergency conditions. The entire population is more likely to be affected.',
            'Active children and adults, and people with respiratory disease, such as asthma, should avoid all outdoor exertion; everyone else, especially children, should limit outdoor exertion.',
            color
        )}}
    {% elseif aqi >= 300 and aqi < 500 %}
        {{_self.airPollutionStatus(
            'Hazardous',
            'Health alert: everyone may experience more serious health effects',
            'Everyone should avoid all outdoor exertion',
            color
        )}}
    {% endif %}
{% endmacro %}
{% macro airPollutionStatus(airPollutionLevel, healthImplication, cautionaryStatement, color) %}
    <div class=\"container text-white border rounded box-shadow\" style=\"background-color: {{color|trim}}\">
        <div class=\"row border-bottom rounded pb-3 pt-3\">
            <div class=\"col-3 font-weight-bold\">
                Air Pollution Level
            </div>
            <div class=\"col-5 font-weight-bold\">
                Health Implications
            </div>
            <div class=\"col-4 font-weight-bold\">
                Cautionary Statement (for PM2.5)
            </div>
        </div>
        <div class=\"row border-0 rounded pb-4 pt-4\">
            <div class=\"col-3\">
                <strong>
                {{airPollutionLevel}}
                </strong>
            </div>
            <div class=\"col-5\">
                <strong>
                {{healthImplication}}
                </strong>
            </div>
            <div class=\"col-4\">
                <strong>
                {{cautionaryStatement}}
                </strong>
            </div>
        </div>
    </div>
{% endmacro %}
{% macro airQualityColorSetter(aqi) %}
    {% if aqi <= 50 %}
        {% set color = '#449A66' %}
    {% elseif aqi >= 50 and aqi < 100 %}
        {% set color = '#1DA488' %}
    {% elseif aqi >= 100 and aqi < 150 %}
        {% set color = '#F99932' %}
    {% elseif aqi >= 150 and aqi < 200 %}
        {% set color = '#CE3B34' %}
    {% elseif aqi >= 200 and aqi < 300 %}
        {% set color = '#6A4299' %}
    {% elseif aqi >= 300 and aqi < 500 %}
        {% set color = '#7F2223' %}
    {% endif %}
    {{color}}
{% endmacro %}
{% macro setGases(iaqi) %}
    <div class=\"container mt-5 pr-3 pl-3 border rounded box-shadow\">
        <div class=\"row p-2\">
            <div class=\"col-12\">
                <h4>Air particles</h4>
            </div>
        </div>
        {% if iaqi.pm25.v is defined %}
            <div class=\"row border-top p-3\">
                <div class=\"col-6\">
                    <h6>PM2.5</h6>
                </div>
                <div class=\"col-6\">
                    <h6>{{iaqi.pm25.v}}</h6>
                </div>
            </div>
        {% endif %}
        {% if iaqi.pm10.v is defined %}
            <div class=\"row border-top p-3\">
                <div class=\"col-6\">
                    <h6>PM10</h6>
                </div>
                <div class=\"col-6\">
                    <h6>{{iaqi.pm10.v}}</h6>
                </div>
            </div>
        {% endif %}
        {% if iaqi.o3.v is defined %}
            <div class=\"row border-top p-3\">
                <div class=\"col-6\">
                    <h6>03</h6>
                </div>
                <div class=\"col-6\">
                    <h6>{{iaqi.o3.v}}</h6>
                </div>
            </div>        
        {% endif %}
        {% if iaqi.no2.v is defined %}
            <div class=\"row border-top p-3\">
                <div class=\"col-6\">
                    <h6>NO2</h6>
                </div>
                <div class=\"col-6\">
                    <h6>{{iaqi.no2.v}}</h6>
                </div>
            </div>
        {% endif %}
        {% if iaqi.so2.v is defined %}
            <div class=\"row border-top p-3\">
                <div class=\"col-6\">
                    <h6>SO2</h6>
                </div>
                <div class=\"col-6\">
                    <h6>{{iaqi.so2.v}}</h6>
                </div>
            </div>
        {% endif %}
        {% if iaqi.co.v is defined %}
            <div class=\"row border-top p-3\">
                <div class=\"col-6\">
                    <h6>CO</h6>
                </div>
                <div class=\"col-6\">
                    <h6>{{iaqi.co.v}}</h6>
                </div>
            </div>
        {% endif %}
    </div>
{% endmacro %}
{% macro setWeather(iaqi) %}
    <div class=\"container mt-5 mb-2  pr-3 pl-3 border rounded box-shadow\">
        <div class=\"row p-2\">
            <div class=\"col-12\">
                <h4>Weather data</h4>
            </div>
        </div>
         <div class=\"row border-top p-3\">
            <div class=\"col-6\">
                <h6>Pressure</h6>
            </div>
            <div class=\"col-6\">
                <h6>{{iaqi.p.v}} PA</h6>
            </div>
        </div>
        <div class=\"row border-top p-3\">
            <div class=\"col-6\">
                <h6>Temperature</h6>
            </div>
            <div class=\"col-6\">
                <h6>{{iaqi.t.v}} ºC</h6>
            </div>
        </div>
        <div class=\"row border-top p-3\">
            <div class=\"col-6\">
                <h6>Air humidity</h6>
            </div>
            <div class=\"col-6\">
                <h6>{{iaqi.h.v}}%</h6>
            </div>
        </div>
        <div class=\"row border-top p-3\">
            <div class=\"col-6\">
                <h6>Wind</h6>
            </div>
            <div class=\"col-6\">
                <h6>{{iaqi.w.v}} km/h</h6>
            </div>
        </div>
    </div>
{% endmacro %}
{% macro displayUrlSource(city) %}
     <em class=\"float-right mt-3 mb-5\">
        Source from: 
        <a class=\"text-decoration-none\" 
            href=\"{{city}}\">{{city}}
        </a>
    </em>
{% endmacro %}
{% block body %}
    {{_self.displayNavbar()}}
    {% if object.status == \"ok\" %}
        <div class=\"container\">
            {% set color = _self.airQualityColorSetter(object.data.aqi)%}
            {{_self.displayMain(object, color)}}
            {{_self.airQualityDescription(object.data.aqi, color)}}
            {{_self.setGases(object.data.iaqi)}}
            {{_self.setWeather(object.data.iaqi)}}
            {{_self.displayUrlSource(object.data.city.url)}}
        </div>
        <div id=\"map\" class=\"h-100 w-100 border-rounded rounded mb-5 box-shadow\" ><div>
        <input type=\"hidden\" id=\"lat\" value=\"{{object.data.city.geo[0]}}\">
        <input type=\"hidden\" id=\"long\" value=\"{{object.data.city.geo[1]}}\">
    {% elseif object.status == \"error\" %}
        <div class=\"text-center\">
            <h1 class=\"display-2\">That's bad!</h1>
            <h1>The city you're trying to find is not registered on <a href=\"https://aqicn.org/\">aqicn.org</a></h1>
            <p>Maybe there's no form to calculate the data, or not resources to know it.</p>
            <em>Message: {{object.data}}</em>
        </div>
    {% endif %}
    {% block stylesheets %}
        <style>
            body {
                background-color: white !important;
            }
        </style>
    {% endblock %}
    {% block javascripts %}
    <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAEQGPMe9zgHRZoR-zsmwYobl4ebKRbAEY&callback=initMap\"
        type=\"text/javascript\"></script>
    <script>\t
    var map;
    var latitude = parseFloat(document.getElementById('lat').value);
    var long = parseFloat(document.getElementById('long').value);
    console.log(latitude, long)

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: latitude, lng: long},
            zoom: 13,
        });
        var marker = new google.maps.Marker({
            position: {lat: latitude, lng: long},
            map: map,
        title: 'Your city'
        });
    }
    </script>
    {% endblock %}
{% endblock %}
", "home/search.html.twig", "/var/www/html/airQualy/templates/home/search.html.twig");
    }
}
