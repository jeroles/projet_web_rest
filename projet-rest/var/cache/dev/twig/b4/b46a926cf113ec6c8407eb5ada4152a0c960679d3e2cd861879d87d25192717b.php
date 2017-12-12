<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_e392ebadaa08d3653bf99d9b22c5299ccf9dbece9960d53519752151913a2adb extends Twig_Template
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
        $__internal_45eff8a0f986ad7ad4b401a3b3881f37572372f0313142bdc63015c16a2a1cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45eff8a0f986ad7ad4b401a3b3881f37572372f0313142bdc63015c16a2a1cd2->enter($__internal_45eff8a0f986ad7ad4b401a3b3881f37572372f0313142bdc63015c16a2a1cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_ffd5693409c3e472124621682b5d716a35ff04d413b09255de97babc33df2766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd5693409c3e472124621682b5d716a35ff04d413b09255de97babc33df2766->enter($__internal_ffd5693409c3e472124621682b5d716a35ff04d413b09255de97babc33df2766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_45eff8a0f986ad7ad4b401a3b3881f37572372f0313142bdc63015c16a2a1cd2->leave($__internal_45eff8a0f986ad7ad4b401a3b3881f37572372f0313142bdc63015c16a2a1cd2_prof);

        
        $__internal_ffd5693409c3e472124621682b5d716a35ff04d413b09255de97babc33df2766->leave($__internal_ffd5693409c3e472124621682b5d716a35ff04d413b09255de97babc33df2766_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
