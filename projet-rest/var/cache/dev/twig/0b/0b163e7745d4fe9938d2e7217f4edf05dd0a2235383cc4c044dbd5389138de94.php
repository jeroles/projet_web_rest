<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_54b3fe19f2dbe19501d878b5e43e759353d0779f8f63ef08b697a74a8d8c7999 extends Twig_Template
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
        $__internal_2fd080675d99f1036896744e03c271851881d3ec4541d5eff44905d514c81aba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd080675d99f1036896744e03c271851881d3ec4541d5eff44905d514c81aba->enter($__internal_2fd080675d99f1036896744e03c271851881d3ec4541d5eff44905d514c81aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_c03348eca2426e108be47fb2361c4e070aa6150f316b33daac325f5b7a6c87ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c03348eca2426e108be47fb2361c4e070aa6150f316b33daac325f5b7a6c87ce->enter($__internal_c03348eca2426e108be47fb2361c4e070aa6150f316b33daac325f5b7a6c87ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2fd080675d99f1036896744e03c271851881d3ec4541d5eff44905d514c81aba->leave($__internal_2fd080675d99f1036896744e03c271851881d3ec4541d5eff44905d514c81aba_prof);

        
        $__internal_c03348eca2426e108be47fb2361c4e070aa6150f316b33daac325f5b7a6c87ce->leave($__internal_c03348eca2426e108be47fb2361c4e070aa6150f316b33daac325f5b7a6c87ce_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
