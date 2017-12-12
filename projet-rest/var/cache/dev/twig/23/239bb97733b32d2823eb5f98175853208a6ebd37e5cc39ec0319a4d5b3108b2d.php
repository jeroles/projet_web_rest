<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_d03008b79f4f48c799eaf82d612b7e59ed61d3c8d22d54ac3aba539abc7c4db7 extends Twig_Template
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
        $__internal_d50f797e4682b2cb141c651b1d7c7fe1509ce00e86ba04e2b661b8164fb88560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d50f797e4682b2cb141c651b1d7c7fe1509ce00e86ba04e2b661b8164fb88560->enter($__internal_d50f797e4682b2cb141c651b1d7c7fe1509ce00e86ba04e2b661b8164fb88560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_68a4f9ec72bf94fe872646a1b4749da175369d2ab1fb10cdb9575713bb0d33a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a4f9ec72bf94fe872646a1b4749da175369d2ab1fb10cdb9575713bb0d33a7->enter($__internal_68a4f9ec72bf94fe872646a1b4749da175369d2ab1fb10cdb9575713bb0d33a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_d50f797e4682b2cb141c651b1d7c7fe1509ce00e86ba04e2b661b8164fb88560->leave($__internal_d50f797e4682b2cb141c651b1d7c7fe1509ce00e86ba04e2b661b8164fb88560_prof);

        
        $__internal_68a4f9ec72bf94fe872646a1b4749da175369d2ab1fb10cdb9575713bb0d33a7->leave($__internal_68a4f9ec72bf94fe872646a1b4749da175369d2ab1fb10cdb9575713bb0d33a7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
