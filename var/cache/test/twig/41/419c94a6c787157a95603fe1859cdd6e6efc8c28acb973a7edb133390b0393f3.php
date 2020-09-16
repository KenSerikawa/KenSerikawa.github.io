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

    // line 216
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 217
        echo "    ";
        // line 218
        echo "    ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 218, $this->source); })()), "status", [], "any", false, false, false, 218), "ok"))) {
            // line 219
            echo "        <div class=\"container\">
            ";
            // line 220
            $context["color"] = twig_call_macro($macros["_self"], "macro_airQualityColorSetter", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 220, $this->source); })()), "data", [], "any", false, false, false, 220), "aqi", [], "any", false, false, false, 220)], 220, $context, $this->getSourceContext());
            // line 221
            echo "            ";
            echo twig_call_macro($macros["_self"], "macro_displayMain", [(isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 221, $this->source); })()), (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 221, $this->source); })())], 221, $context, $this->getSourceContext());
            echo "
            ";
            // line 222
            echo twig_call_macro($macros["_self"], "macro_airQualityDescription", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 222, $this->source); })()), "data", [], "any", false, false, false, 222), "aqi", [], "any", false, false, false, 222), (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 222, $this->source); })())], 222, $context, $this->getSourceContext());
            echo "
            ";
            // line 223
            echo twig_call_macro($macros["_self"], "macro_setGases", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 223, $this->source); })()), "data", [], "any", false, false, false, 223), "iaqi", [], "any", false, false, false, 223)], 223, $context, $this->getSourceContext());
            echo "
            ";
            // line 224
            echo twig_call_macro($macros["_self"], "macro_setWeather", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 224, $this->source); })()), "data", [], "any", false, false, false, 224), "iaqi", [], "any", false, false, false, 224)], 224, $context, $this->getSourceContext());
            echo "
            ";
            // line 225
            echo twig_call_macro($macros["_self"], "macro_displayUrlSource", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 225, $this->source); })()), "data", [], "any", false, false, false, 225), "city", [], "any", false, false, false, 225), "url", [], "any", false, false, false, 225)], 225, $context, $this->getSourceContext());
            echo "
        </div>
    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 227
(isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 227, $this->source); })()), "status", [], "any", false, false, false, 227), "error"))) {
            // line 228
            echo "        <div class=\"text-center\">
            <h1> ERROR CITY NOT FOUND </h1>
            <em>Message: ";
            // line 230
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 230, $this->source); })()), "data", [], "any", false, false, false, 230), "html", null, true);
            echo "</em>
        </div>
        <div id=\"map\" style=\"height:100%;\"></div>

    ";
        }
        // line 235
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 236
        echo "    <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAEQGPMeAPIKEY9zgHRZoR-zsmwYobl4ebKRbAEY&callback=initMap\"
        type=\"text/javascript\"></script>
    <script>\t
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 43.5293, lng: -5.6773},
            zoom: 13,
        });
        var marker = new google.maps.Marker({
            position: {lat: 43.542194, lng: -5.676875},
            map: map,
        title: 'Acuario de Gijón'
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
        <div class=\"text-white p-5 mr-3 border rounded\" style=\"background-color: ";
            // line 6
            echo twig_escape_filter($this->env, twig_trim_filter((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 6, $this->source); })())), "html", null, true);
            echo "\">
            <h1 class=\"\">";
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
                ";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["airPollutionLevel"]) || array_key_exists("airPollutionLevel", $context) ? $context["airPollutionLevel"] : (function () { throw new RuntimeError('Variable "airPollutionLevel" does not exist.', 76, $this->source); })()), "html", null, true);
            echo "
            </div>
            <div class=\"col-5\">
                ";
            // line 79
            echo twig_escape_filter($this->env, (isset($context["healthImplication"]) || array_key_exists("healthImplication", $context) ? $context["healthImplication"] : (function () { throw new RuntimeError('Variable "healthImplication" does not exist.', 79, $this->source); })()), "html", null, true);
            echo "
            </div>
            <div class=\"col-4\">
                ";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["cautionaryStatement"]) || array_key_exists("cautionaryStatement", $context) ? $context["cautionaryStatement"] : (function () { throw new RuntimeError('Variable "cautionaryStatement" does not exist.', 82, $this->source); })()), "html", null, true);
            echo "
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

    // line 87
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

            // line 88
            echo "    ";
            if ((0 >= twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 88, $this->source); })()), 50))) {
                // line 89
                echo "        ";
                $context["color"] = "#449A66";
                // line 90
                echo "    ";
            } elseif (((0 <= twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 90, $this->source); })()), 50)) && (-1 === twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 90, $this->source); })()), 100)))) {
                // line 91
                echo "        ";
                $context["color"] = "#1DA488";
                // line 92
                echo "    ";
            } elseif (((0 <= twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 92, $this->source); })()), 100)) && (-1 === twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 92, $this->source); })()), 150)))) {
                // line 93
                echo "        ";
                $context["color"] = "#F99932";
                // line 94
                echo "    ";
            } elseif (((0 <= twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 94, $this->source); })()), 150)) && (-1 === twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 94, $this->source); })()), 200)))) {
                // line 95
                echo "        ";
                $context["color"] = "#CE3B34";
                // line 96
                echo "    ";
            } elseif (((0 <= twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 96, $this->source); })()), 200)) && (-1 === twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 96, $this->source); })()), 300)))) {
                // line 97
                echo "        ";
                $context["color"] = "#6A4299";
                // line 98
                echo "    ";
            } elseif (((0 <= twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 98, $this->source); })()), 300)) && (-1 === twig_compare((isset($context["aqi"]) || array_key_exists("aqi", $context) ? $context["aqi"] : (function () { throw new RuntimeError('Variable "aqi" does not exist.', 98, $this->source); })()), 500)))) {
                // line 99
                echo "        ";
                $context["color"] = "#7F2223";
                // line 100
                echo "    ";
            }
            // line 101
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 101, $this->source); })()), "html", null, true);
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 103
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

            // line 104
            echo "    <div class=\"container mt-5 pr-3 pl-3 border rounded box-shadow\">
        ";
            // line 105
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["iaqi"] ?? null), "pm25", [], "any", false, true, false, 105), "v", [], "any", true, true, false, 105)) {
                // line 106
                echo "            <div class=\"row  p-3\">
                <div class=\"col-6\">
                    <h6>PM2.5</h6>
                </div>
                <div class=\"col-6\">
                    <h6>";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["iaqi"]) || array_key_exists("iaqi", $context) ? $context["iaqi"] : (function () { throw new RuntimeError('Variable "iaqi" does not exist.', 111, $this->source); })()), "pm25", [], "any", false, false, false, 111), "v", [], "any", false, false, false, 111), "html", null, true);
                echo "</h6>
                </div>
            </div>
        ";
            }
            // line 115
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["iaqi"] ?? null), "pm10", [], "any", false, true, false, 115), "v", [], "any", true, true, false, 115)) {
                // line 116
                echo "            <div class=\"row border-top p-3\">
                <div class=\"col-6\">
                    <h6>PM10</h6>
                </div>
                <div class=\"col-6\">
                    <h6>";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["iaqi"]) || array_key_exists("iaqi", $context) ? $context["iaqi"] : (function () { throw new RuntimeError('Variable "iaqi" does not exist.', 121, $this->source); })()), "pm10", [], "any", false, false, false, 121), "v", [], "any", false, false, false, 121), "html", null, true);
                echo "</h6>
                </div>
            </div>
        ";
            }
            // line 125
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["iaqi"] ?? null), "o3", [], "any", false, true, false, 125), "v", [], "any", true, true, false, 125)) {
                // line 126
                echo "            <div class=\"row border-top p-3\">
                <div class=\"col-6\">
                    <h6>03</h6>
                </div>
                <div class=\"col-6\">
                    <h6>";
                // line 131
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["iaqi"]) || array_key_exists("iaqi", $context) ? $context["iaqi"] : (function () { throw new RuntimeError('Variable "iaqi" does not exist.', 131, $this->source); })()), "o3", [], "any", false, false, false, 131), "v", [], "any", false, false, false, 131), "html", null, true);
                echo "</h6>
                </div>
            </div>        
        ";
            }
            // line 135
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["iaqi"] ?? null), "no2", [], "any", false, true, false, 135), "v", [], "any", true, true, false, 135)) {
                // line 136
                echo "            <div class=\"row border-top p-3\">
                <div class=\"col-6\">
                    <h6>NO2</h6>
                </div>
                <div class=\"col-6\">
                    <h6>";
                // line 141
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["iaqi"]) || array_key_exists("iaqi", $context) ? $context["iaqi"] : (function () { throw new RuntimeError('Variable "iaqi" does not exist.', 141, $this->source); })()), "no2", [], "any", false, false, false, 141), "v", [], "any", false, false, false, 141), "html", null, true);
                echo "</h6>
                </div>
            </div>
        ";
            }
            // line 145
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["iaqi"] ?? null), "so2", [], "any", false, true, false, 145), "v", [], "any", true, true, false, 145)) {
                // line 146
                echo "            <div class=\"row border-top p-3\">
                <div class=\"col-6\">
                    <h6>SO2</h6>
                </div>
                <div class=\"col-6\">
                    <h6>";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["iaqi"]) || array_key_exists("iaqi", $context) ? $context["iaqi"] : (function () { throw new RuntimeError('Variable "iaqi" does not exist.', 151, $this->source); })()), "so2", [], "any", false, false, false, 151), "v", [], "any", false, false, false, 151), "html", null, true);
                echo "</h6>
                </div>
            </div>
        ";
            }
            // line 155
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["iaqi"] ?? null), "co", [], "any", false, true, false, 155), "v", [], "any", true, true, false, 155)) {
                // line 156
                echo "            <div class=\"row border-top p-3\">
                <div class=\"col-6\">
                    <h6>CO</h6>
                </div>
                <div class=\"col-6\">
                    <h6>";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["iaqi"]) || array_key_exists("iaqi", $context) ? $context["iaqi"] : (function () { throw new RuntimeError('Variable "iaqi" does not exist.', 161, $this->source); })()), "co", [], "any", false, false, false, 161), "v", [], "any", false, false, false, 161), "html", null, true);
                echo "</h6>
                </div>
            </div>
        ";
            }
            // line 165
            echo "    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 167
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

            // line 168
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
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["iaqi"]) || array_key_exists("iaqi", $context) ? $context["iaqi"] : (function () { throw new RuntimeError('Variable "iaqi" does not exist.', 179, $this->source); })()), "p", [], "any", false, false, false, 179), "v", [], "any", false, false, false, 179), "html", null, true);
            echo " PA</h6>
            </div>
        </div>
        <div class=\"row border-top p-3\">
            <div class=\"col-6\">
                <h6>Temperature</h6>
            </div>
            <div class=\"col-6\">
                <h6>";
            // line 187
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["iaqi"]) || array_key_exists("iaqi", $context) ? $context["iaqi"] : (function () { throw new RuntimeError('Variable "iaqi" does not exist.', 187, $this->source); })()), "t", [], "any", false, false, false, 187), "v", [], "any", false, false, false, 187), "html", null, true);
            echo " ºC</h6>
            </div>
        </div>
        <div class=\"row border-top p-3\">
            <div class=\"col-6\">
                <h6>Air humidity</h6>
            </div>
            <div class=\"col-6\">
                <h6>";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["iaqi"]) || array_key_exists("iaqi", $context) ? $context["iaqi"] : (function () { throw new RuntimeError('Variable "iaqi" does not exist.', 195, $this->source); })()), "h", [], "any", false, false, false, 195), "v", [], "any", false, false, false, 195), "html", null, true);
            echo "%</h6>
            </div>
        </div>
        <div class=\"row border-top p-3\">
            <div class=\"col-6\">
                <h6>Wind</h6>
            </div>
            <div class=\"col-6\">
                <h6>";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["iaqi"]) || array_key_exists("iaqi", $context) ? $context["iaqi"] : (function () { throw new RuntimeError('Variable "iaqi" does not exist.', 203, $this->source); })()), "w", [], "any", false, false, false, 203), "v", [], "any", false, false, false, 203), "html", null, true);
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

    // line 208
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

            // line 209
            echo "     <em class=\"float-right mt-3 mb-5\">
        Source from: 
        <a class=\"text-decoration-none\" 
            href=\"";
            // line 212
            echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 212, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 212, $this->source); })()), "html", null, true);
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
        return array (  723 => 212,  718 => 209,  699 => 208,  679 => 203,  668 => 195,  657 => 187,  646 => 179,  633 => 168,  614 => 167,  598 => 165,  591 => 161,  584 => 156,  581 => 155,  574 => 151,  567 => 146,  564 => 145,  557 => 141,  550 => 136,  547 => 135,  540 => 131,  533 => 126,  530 => 125,  523 => 121,  516 => 116,  513 => 115,  506 => 111,  499 => 106,  497 => 105,  494 => 104,  475 => 103,  457 => 101,  454 => 100,  451 => 99,  448 => 98,  445 => 97,  442 => 96,  439 => 95,  436 => 94,  433 => 93,  430 => 92,  427 => 91,  424 => 90,  421 => 89,  418 => 88,  399 => 87,  379 => 82,  373 => 79,  367 => 76,  349 => 62,  327 => 61,  310 => 58,  308 => 57,  306 => 53,  304 => 52,  301 => 51,  299 => 50,  297 => 46,  295 => 45,  292 => 44,  290 => 43,  288 => 39,  286 => 38,  283 => 37,  281 => 36,  279 => 32,  277 => 31,  274 => 30,  272 => 29,  270 => 25,  268 => 24,  265 => 23,  263 => 22,  261 => 18,  258 => 17,  238 => 16,  219 => 12,  214 => 10,  208 => 7,  204 => 6,  201 => 5,  181 => 4,  155 => 236,  135 => 235,  127 => 230,  123 => 228,  121 => 227,  116 => 225,  112 => 224,  108 => 223,  104 => 222,  99 => 221,  97 => 220,  94 => 219,  91 => 218,  89 => 217,  79 => 216,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}
{% macro displayMain(object, color) %}
     <div class=\"d-flex mb-2\">
        <div class=\"text-white p-5 mr-3 border rounded\" style=\"background-color: {{color|trim}}\">
            <h1 class=\"\">{{object.data.aqi}}</h1>
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
                {{airPollutionLevel}}
            </div>
            <div class=\"col-5\">
                {{healthImplication}}
            </div>
            <div class=\"col-4\">
                {{cautionaryStatement}}
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
        {% if iaqi.pm25.v is defined %}
            <div class=\"row  p-3\">
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
    {# {{dump(object)}} #}
    {% if object.status == \"ok\" %}
        <div class=\"container\">
            {% set color = _self.airQualityColorSetter(object.data.aqi)%}
            {{_self.displayMain(object, color)}}
            {{_self.airQualityDescription(object.data.aqi, color)}}
            {{_self.setGases(object.data.iaqi)}}
            {{_self.setWeather(object.data.iaqi)}}
            {{_self.displayUrlSource(object.data.city.url)}}
        </div>
    {% elseif object.status == \"error\" %}
        <div class=\"text-center\">
            <h1> ERROR CITY NOT FOUND </h1>
            <em>Message: {{object.data}}</em>
        </div>
        <div id=\"map\" style=\"height:100%;\"></div>

    {% endif %}
    {% block javascripts %}
    <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAEQGPMeAPIKEY9zgHRZoR-zsmwYobl4ebKRbAEY&callback=initMap\"
        type=\"text/javascript\"></script>
    <script>\t
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 43.5293, lng: -5.6773},
            zoom: 13,
        });
        var marker = new google.maps.Marker({
            position: {lat: 43.542194, lng: -5.676875},
            map: map,
        title: 'Acuario de Gijón'
        });
    }
    </script>
    {% endblock %}
{% endblock %}
", "home/search.html.twig", "/var/www/html/airQualy/templates/home/search.html.twig");
    }
}
