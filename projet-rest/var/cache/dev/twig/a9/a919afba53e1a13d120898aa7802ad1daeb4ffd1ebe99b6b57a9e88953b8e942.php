<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_fa128ea7f83acd9e04af4dd2896e679bc85a3395f9d7cc4f333dcb276c252ee7 extends Twig_Template
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
        $__internal_add2259924bcc12bb907e41a92b70c2108c87652646dbada6495e9e88fbcc484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add2259924bcc12bb907e41a92b70c2108c87652646dbada6495e9e88fbcc484->enter($__internal_add2259924bcc12bb907e41a92b70c2108c87652646dbada6495e9e88fbcc484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_aa8c2947c667f758717dc27c62c1a170c3c33103a004742c9f635ea319b8bad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8c2947c667f758717dc27c62c1a170c3c33103a004742c9f635ea319b8bad9->enter($__internal_aa8c2947c667f758717dc27c62c1a170c3c33103a004742c9f635ea319b8bad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_add2259924bcc12bb907e41a92b70c2108c87652646dbada6495e9e88fbcc484->leave($__internal_add2259924bcc12bb907e41a92b70c2108c87652646dbada6495e9e88fbcc484_prof);

        
        $__internal_aa8c2947c667f758717dc27c62c1a170c3c33103a004742c9f635ea319b8bad9->leave($__internal_aa8c2947c667f758717dc27c62c1a170c3c33103a004742c9f635ea319b8bad9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
