<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_7a4d1816b3aa13074c6d78d699a70bdd4e9fd10c324e6e7cf8051c47fe98d839 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22eb885e5b8984ee7abac57fa90139db73ea76b6bf07dd4882c55c0b216a930a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22eb885e5b8984ee7abac57fa90139db73ea76b6bf07dd4882c55c0b216a930a->enter($__internal_22eb885e5b8984ee7abac57fa90139db73ea76b6bf07dd4882c55c0b216a930a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_ceae3c186e219af2a8556f753fdd6d4b36eb5666c21a85364c6a5e426a310b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceae3c186e219af2a8556f753fdd6d4b36eb5666c21a85364c6a5e426a310b58->enter($__internal_ceae3c186e219af2a8556f753fdd6d4b36eb5666c21a85364c6a5e426a310b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22eb885e5b8984ee7abac57fa90139db73ea76b6bf07dd4882c55c0b216a930a->leave($__internal_22eb885e5b8984ee7abac57fa90139db73ea76b6bf07dd4882c55c0b216a930a_prof);

        
        $__internal_ceae3c186e219af2a8556f753fdd6d4b36eb5666c21a85364c6a5e426a310b58->leave($__internal_ceae3c186e219af2a8556f753fdd6d4b36eb5666c21a85364c6a5e426a310b58_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7daeeb0ef6bdacd191c24046d5753c2bd0533e0f0d0adb26e8c2366ac3653fba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7daeeb0ef6bdacd191c24046d5753c2bd0533e0f0d0adb26e8c2366ac3653fba->enter($__internal_7daeeb0ef6bdacd191c24046d5753c2bd0533e0f0d0adb26e8c2366ac3653fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_74cab59755086756921d9efdc6ed871e28ee9a8bc6370700060002f8ed9d3152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74cab59755086756921d9efdc6ed871e28ee9a8bc6370700060002f8ed9d3152->enter($__internal_74cab59755086756921d9efdc6ed871e28ee9a8bc6370700060002f8ed9d3152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_74cab59755086756921d9efdc6ed871e28ee9a8bc6370700060002f8ed9d3152->leave($__internal_74cab59755086756921d9efdc6ed871e28ee9a8bc6370700060002f8ed9d3152_prof);

        
        $__internal_7daeeb0ef6bdacd191c24046d5753c2bd0533e0f0d0adb26e8c2366ac3653fba->leave($__internal_7daeeb0ef6bdacd191c24046d5753c2bd0533e0f0d0adb26e8c2366ac3653fba_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_753da31316a7a17727b9971e7c470d0d66afce963a38070b8ee206d549749769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_753da31316a7a17727b9971e7c470d0d66afce963a38070b8ee206d549749769->enter($__internal_753da31316a7a17727b9971e7c470d0d66afce963a38070b8ee206d549749769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c64ce3685f2099cc2dd87cb9d3db2467a7d72a57146dfdef3648edeb052c3fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64ce3685f2099cc2dd87cb9d3db2467a7d72a57146dfdef3648edeb052c3fd3->enter($__internal_c64ce3685f2099cc2dd87cb9d3db2467a7d72a57146dfdef3648edeb052c3fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_c64ce3685f2099cc2dd87cb9d3db2467a7d72a57146dfdef3648edeb052c3fd3->leave($__internal_c64ce3685f2099cc2dd87cb9d3db2467a7d72a57146dfdef3648edeb052c3fd3_prof);

        
        $__internal_753da31316a7a17727b9971e7c470d0d66afce963a38070b8ee206d549749769->leave($__internal_753da31316a7a17727b9971e7c470d0d66afce963a38070b8ee206d549749769_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
