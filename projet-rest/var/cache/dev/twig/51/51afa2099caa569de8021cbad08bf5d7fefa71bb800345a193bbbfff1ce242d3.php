<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_84a87db265e2aa39a786bee5f9d855b0c7b3f35be8c295f6b41be32077de6708 extends Twig_Template
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
        $__internal_62790c7c283eddcec91a2ad9eddf1b33683329c389808046bcf9ab9b393ff47d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62790c7c283eddcec91a2ad9eddf1b33683329c389808046bcf9ab9b393ff47d->enter($__internal_62790c7c283eddcec91a2ad9eddf1b33683329c389808046bcf9ab9b393ff47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_a24a881179380b981ec3f54a995be6dc1637e37f02fa27b44369e13019f60f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24a881179380b981ec3f54a995be6dc1637e37f02fa27b44369e13019f60f8b->enter($__internal_a24a881179380b981ec3f54a995be6dc1637e37f02fa27b44369e13019f60f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_62790c7c283eddcec91a2ad9eddf1b33683329c389808046bcf9ab9b393ff47d->leave($__internal_62790c7c283eddcec91a2ad9eddf1b33683329c389808046bcf9ab9b393ff47d_prof);

        
        $__internal_a24a881179380b981ec3f54a995be6dc1637e37f02fa27b44369e13019f60f8b->leave($__internal_a24a881179380b981ec3f54a995be6dc1637e37f02fa27b44369e13019f60f8b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
