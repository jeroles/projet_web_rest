<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_35cf6abe3a29c8dce06630053699906a106efe70007a04e25f9efedd52da8592 extends Twig_Template
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
        $__internal_890a9237da7791a66fee51c2b61941a1731f8269e194f3baa51c1bbdf8c1878d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_890a9237da7791a66fee51c2b61941a1731f8269e194f3baa51c1bbdf8c1878d->enter($__internal_890a9237da7791a66fee51c2b61941a1731f8269e194f3baa51c1bbdf8c1878d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_f0e32c6f049f5b49eee711c70fef7e5043569fb120de5078e31527a6a2f49486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e32c6f049f5b49eee711c70fef7e5043569fb120de5078e31527a6a2f49486->enter($__internal_f0e32c6f049f5b49eee711c70fef7e5043569fb120de5078e31527a6a2f49486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_890a9237da7791a66fee51c2b61941a1731f8269e194f3baa51c1bbdf8c1878d->leave($__internal_890a9237da7791a66fee51c2b61941a1731f8269e194f3baa51c1bbdf8c1878d_prof);

        
        $__internal_f0e32c6f049f5b49eee711c70fef7e5043569fb120de5078e31527a6a2f49486->leave($__internal_f0e32c6f049f5b49eee711c70fef7e5043569fb120de5078e31527a6a2f49486_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
