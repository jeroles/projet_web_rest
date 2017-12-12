<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_2fa6c2d4356b67d0470b89b168cdcac5747e67884bba82358cd6321c156e1d50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c7453cc24feb23a4a11678bdf1c947b7a5d71e755294967424315c343122683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c7453cc24feb23a4a11678bdf1c947b7a5d71e755294967424315c343122683->enter($__internal_0c7453cc24feb23a4a11678bdf1c947b7a5d71e755294967424315c343122683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_a89310ca47c25a379c98069c1392b41c2e3ed9b1a6a49809f951d10c95cc9a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89310ca47c25a379c98069c1392b41c2e3ed9b1a6a49809f951d10c95cc9a18->enter($__internal_a89310ca47c25a379c98069c1392b41c2e3ed9b1a6a49809f951d10c95cc9a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_0c7453cc24feb23a4a11678bdf1c947b7a5d71e755294967424315c343122683->leave($__internal_0c7453cc24feb23a4a11678bdf1c947b7a5d71e755294967424315c343122683_prof);

        
        $__internal_a89310ca47c25a379c98069c1392b41c2e3ed9b1a6a49809f951d10c95cc9a18->leave($__internal_a89310ca47c25a379c98069c1392b41c2e3ed9b1a6a49809f951d10c95cc9a18_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
