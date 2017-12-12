<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_718ed7f740db6c6f0277b352db24c8f1c255697c9e4de30b6d0de97e0ef1ab54 extends Twig_Template
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
        $__internal_9308920d1db807a1c9e946afd6e278613ed886851c182a5e64e5c003b2232c68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9308920d1db807a1c9e946afd6e278613ed886851c182a5e64e5c003b2232c68->enter($__internal_9308920d1db807a1c9e946afd6e278613ed886851c182a5e64e5c003b2232c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_c39fc2fa11e5b356904bb2703a9514a1bf88f6cba14a513a2c61664c7497fdb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c39fc2fa11e5b356904bb2703a9514a1bf88f6cba14a513a2c61664c7497fdb4->enter($__internal_c39fc2fa11e5b356904bb2703a9514a1bf88f6cba14a513a2c61664c7497fdb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_9308920d1db807a1c9e946afd6e278613ed886851c182a5e64e5c003b2232c68->leave($__internal_9308920d1db807a1c9e946afd6e278613ed886851c182a5e64e5c003b2232c68_prof);

        
        $__internal_c39fc2fa11e5b356904bb2703a9514a1bf88f6cba14a513a2c61664c7497fdb4->leave($__internal_c39fc2fa11e5b356904bb2703a9514a1bf88f6cba14a513a2c61664c7497fdb4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
