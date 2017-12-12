<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_a7977dcf3f5b6e795787a1ec3f729ebe6f492ead9f84ccea5b3821ea0ce41ab3 extends Twig_Template
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
        $__internal_2e6a0793bd2bca4632c6af4a2e124f954d2e59dc9e31f90873037bbd6132ef5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e6a0793bd2bca4632c6af4a2e124f954d2e59dc9e31f90873037bbd6132ef5d->enter($__internal_2e6a0793bd2bca4632c6af4a2e124f954d2e59dc9e31f90873037bbd6132ef5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_68c53ab250228a28df45f334a42484018ad60d7db3b983f2d8976c36d366cea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c53ab250228a28df45f334a42484018ad60d7db3b983f2d8976c36d366cea9->enter($__internal_68c53ab250228a28df45f334a42484018ad60d7db3b983f2d8976c36d366cea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_2e6a0793bd2bca4632c6af4a2e124f954d2e59dc9e31f90873037bbd6132ef5d->leave($__internal_2e6a0793bd2bca4632c6af4a2e124f954d2e59dc9e31f90873037bbd6132ef5d_prof);

        
        $__internal_68c53ab250228a28df45f334a42484018ad60d7db3b983f2d8976c36d366cea9->leave($__internal_68c53ab250228a28df45f334a42484018ad60d7db3b983f2d8976c36d366cea9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
