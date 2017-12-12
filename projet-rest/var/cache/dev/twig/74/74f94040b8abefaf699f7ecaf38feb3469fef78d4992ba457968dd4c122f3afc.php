<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_ffe472038ba32581a2bd43f9d35fafa1686b1e5c3bee75f33d65792ac9ae61c0 extends Twig_Template
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
        $__internal_16f377a999189c41328dbfbcbfe3dd78f1f2925f1ac5412c59d81c6d9f444ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f377a999189c41328dbfbcbfe3dd78f1f2925f1ac5412c59d81c6d9f444ec3->enter($__internal_16f377a999189c41328dbfbcbfe3dd78f1f2925f1ac5412c59d81c6d9f444ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_604f7f3bb8082dd040c84768ab365932994d4dac481af01c54e6703e200c30f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604f7f3bb8082dd040c84768ab365932994d4dac481af01c54e6703e200c30f0->enter($__internal_604f7f3bb8082dd040c84768ab365932994d4dac481af01c54e6703e200c30f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_16f377a999189c41328dbfbcbfe3dd78f1f2925f1ac5412c59d81c6d9f444ec3->leave($__internal_16f377a999189c41328dbfbcbfe3dd78f1f2925f1ac5412c59d81c6d9f444ec3_prof);

        
        $__internal_604f7f3bb8082dd040c84768ab365932994d4dac481af01c54e6703e200c30f0->leave($__internal_604f7f3bb8082dd040c84768ab365932994d4dac481af01c54e6703e200c30f0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
