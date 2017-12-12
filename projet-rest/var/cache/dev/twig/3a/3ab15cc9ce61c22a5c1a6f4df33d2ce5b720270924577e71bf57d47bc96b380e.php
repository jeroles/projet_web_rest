<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_7a82c23de95f4c4a18c51aee97a52621db72ca19661ce7017623fba93fbb45b3 extends Twig_Template
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
        $__internal_f4e8e9a963e0ebf8f687c25834ef3e29c0a2a3df620389e42bd82e6c170d1944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e8e9a963e0ebf8f687c25834ef3e29c0a2a3df620389e42bd82e6c170d1944->enter($__internal_f4e8e9a963e0ebf8f687c25834ef3e29c0a2a3df620389e42bd82e6c170d1944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_c7cee9dd73c0b2c4d0d109edb2c4f62cfccbde97b080e5dbcadab9c91bec3b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7cee9dd73c0b2c4d0d109edb2c4f62cfccbde97b080e5dbcadab9c91bec3b10->enter($__internal_c7cee9dd73c0b2c4d0d109edb2c4f62cfccbde97b080e5dbcadab9c91bec3b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f4e8e9a963e0ebf8f687c25834ef3e29c0a2a3df620389e42bd82e6c170d1944->leave($__internal_f4e8e9a963e0ebf8f687c25834ef3e29c0a2a3df620389e42bd82e6c170d1944_prof);

        
        $__internal_c7cee9dd73c0b2c4d0d109edb2c4f62cfccbde97b080e5dbcadab9c91bec3b10->leave($__internal_c7cee9dd73c0b2c4d0d109edb2c4f62cfccbde97b080e5dbcadab9c91bec3b10_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
