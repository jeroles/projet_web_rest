<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_fc10962cbf16ffb23e6df8e6927732c4ee1fb9d971232d0a222c31f532bd340d extends Twig_Template
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
        $__internal_0370d94711e8632f6a1a0de1122a76bca1b519e374f7b0d2b7006329d1ca1281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0370d94711e8632f6a1a0de1122a76bca1b519e374f7b0d2b7006329d1ca1281->enter($__internal_0370d94711e8632f6a1a0de1122a76bca1b519e374f7b0d2b7006329d1ca1281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_a42fec107822f2497987b8c19440dee4ffe2d3376c310daf858934afedfe2b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42fec107822f2497987b8c19440dee4ffe2d3376c310daf858934afedfe2b15->enter($__internal_a42fec107822f2497987b8c19440dee4ffe2d3376c310daf858934afedfe2b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_0370d94711e8632f6a1a0de1122a76bca1b519e374f7b0d2b7006329d1ca1281->leave($__internal_0370d94711e8632f6a1a0de1122a76bca1b519e374f7b0d2b7006329d1ca1281_prof);

        
        $__internal_a42fec107822f2497987b8c19440dee4ffe2d3376c310daf858934afedfe2b15->leave($__internal_a42fec107822f2497987b8c19440dee4ffe2d3376c310daf858934afedfe2b15_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
