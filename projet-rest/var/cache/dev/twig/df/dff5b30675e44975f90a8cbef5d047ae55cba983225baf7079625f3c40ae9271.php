<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_e4ea258f69df2200c10ade6b7d0523c9de15ff6e602cb34836e830c05e9c9620 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cfceb8ed16232cbb45c3a58e900fe681416cdb7cc813b54c558b9b7f0383095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cfceb8ed16232cbb45c3a58e900fe681416cdb7cc813b54c558b9b7f0383095->enter($__internal_3cfceb8ed16232cbb45c3a58e900fe681416cdb7cc813b54c558b9b7f0383095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_a572a11cc592c6d82afd3ca522f3f5b6a99af26a5cdc3e64aa7af6d4773d75c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a572a11cc592c6d82afd3ca522f3f5b6a99af26a5cdc3e64aa7af6d4773d75c5->enter($__internal_a572a11cc592c6d82afd3ca522f3f5b6a99af26a5cdc3e64aa7af6d4773d75c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cfceb8ed16232cbb45c3a58e900fe681416cdb7cc813b54c558b9b7f0383095->leave($__internal_3cfceb8ed16232cbb45c3a58e900fe681416cdb7cc813b54c558b9b7f0383095_prof);

        
        $__internal_a572a11cc592c6d82afd3ca522f3f5b6a99af26a5cdc3e64aa7af6d4773d75c5->leave($__internal_a572a11cc592c6d82afd3ca522f3f5b6a99af26a5cdc3e64aa7af6d4773d75c5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_895e5c825ceb1c3fcfe6d6771d97b4ddb220907e31128ffcc01ae9af031cdece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_895e5c825ceb1c3fcfe6d6771d97b4ddb220907e31128ffcc01ae9af031cdece->enter($__internal_895e5c825ceb1c3fcfe6d6771d97b4ddb220907e31128ffcc01ae9af031cdece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dd6a422888d633e3eb9a731f2f5bb6c723f8eb68cc5ebdab76373ed7635d80c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6a422888d633e3eb9a731f2f5bb6c723f8eb68cc5ebdab76373ed7635d80c3->enter($__internal_dd6a422888d633e3eb9a731f2f5bb6c723f8eb68cc5ebdab76373ed7635d80c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_dd6a422888d633e3eb9a731f2f5bb6c723f8eb68cc5ebdab76373ed7635d80c3->leave($__internal_dd6a422888d633e3eb9a731f2f5bb6c723f8eb68cc5ebdab76373ed7635d80c3_prof);

        
        $__internal_895e5c825ceb1c3fcfe6d6771d97b4ddb220907e31128ffcc01ae9af031cdece->leave($__internal_895e5c825ceb1c3fcfe6d6771d97b4ddb220907e31128ffcc01ae9af031cdece_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_66f74426aa2f26fa58c71b5a0b52f7099d8d5c62782e1343d22effdb7ac05116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66f74426aa2f26fa58c71b5a0b52f7099d8d5c62782e1343d22effdb7ac05116->enter($__internal_66f74426aa2f26fa58c71b5a0b52f7099d8d5c62782e1343d22effdb7ac05116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f3b77154c552739aae944742df9696869d76d92fe8fe229e189b01ba5c8ef7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3b77154c552739aae944742df9696869d76d92fe8fe229e189b01ba5c8ef7b->enter($__internal_2f3b77154c552739aae944742df9696869d76d92fe8fe229e189b01ba5c8ef7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2f3b77154c552739aae944742df9696869d76d92fe8fe229e189b01ba5c8ef7b->leave($__internal_2f3b77154c552739aae944742df9696869d76d92fe8fe229e189b01ba5c8ef7b_prof);

        
        $__internal_66f74426aa2f26fa58c71b5a0b52f7099d8d5c62782e1343d22effdb7ac05116->leave($__internal_66f74426aa2f26fa58c71b5a0b52f7099d8d5c62782e1343d22effdb7ac05116_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
