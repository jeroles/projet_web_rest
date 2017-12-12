<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_e4bebe63a9c7ca89841209000cfe4b5e6c5c072ec6e73a3bc3d8f2657e8f06e4 extends Twig_Template
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
        $__internal_99a0fbd5d0000c03aba20e53e43a993901baced7f8fd7649c6f3a51b01d9e0f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99a0fbd5d0000c03aba20e53e43a993901baced7f8fd7649c6f3a51b01d9e0f3->enter($__internal_99a0fbd5d0000c03aba20e53e43a993901baced7f8fd7649c6f3a51b01d9e0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_df45f355c92deb60819285ec28ea1c25b5fa838fdab25c286c408d7f9e2a1d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df45f355c92deb60819285ec28ea1c25b5fa838fdab25c286c408d7f9e2a1d20->enter($__internal_df45f355c92deb60819285ec28ea1c25b5fa838fdab25c286c408d7f9e2a1d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_99a0fbd5d0000c03aba20e53e43a993901baced7f8fd7649c6f3a51b01d9e0f3->leave($__internal_99a0fbd5d0000c03aba20e53e43a993901baced7f8fd7649c6f3a51b01d9e0f3_prof);

        
        $__internal_df45f355c92deb60819285ec28ea1c25b5fa838fdab25c286c408d7f9e2a1d20->leave($__internal_df45f355c92deb60819285ec28ea1c25b5fa838fdab25c286c408d7f9e2a1d20_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
