<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_29a96dfd7f83c9c6601bee661f4741d501a06a767d845298b82738fbc61e78a9 extends Twig_Template
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
        $__internal_2891429bdc0badf47cd47cf0ad045b0b6ab8944ded7af966d0a4922798a71ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2891429bdc0badf47cd47cf0ad045b0b6ab8944ded7af966d0a4922798a71ee8->enter($__internal_2891429bdc0badf47cd47cf0ad045b0b6ab8944ded7af966d0a4922798a71ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_e8485614cbe9cd14d5fa88db175b6f0632d9a9fe62e297d656d706fb6ef79135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8485614cbe9cd14d5fa88db175b6f0632d9a9fe62e297d656d706fb6ef79135->enter($__internal_e8485614cbe9cd14d5fa88db175b6f0632d9a9fe62e297d656d706fb6ef79135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2891429bdc0badf47cd47cf0ad045b0b6ab8944ded7af966d0a4922798a71ee8->leave($__internal_2891429bdc0badf47cd47cf0ad045b0b6ab8944ded7af966d0a4922798a71ee8_prof);

        
        $__internal_e8485614cbe9cd14d5fa88db175b6f0632d9a9fe62e297d656d706fb6ef79135->leave($__internal_e8485614cbe9cd14d5fa88db175b6f0632d9a9fe62e297d656d706fb6ef79135_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
