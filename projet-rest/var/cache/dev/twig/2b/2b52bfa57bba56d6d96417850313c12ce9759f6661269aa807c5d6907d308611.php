<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_c97acfca74331af5b725a5c2f05f8cb1f00a27a402783fe2743e673a44ad7737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4879b4824ef7c6fea07078d74f34ebd1560913323f7d7f686e5d248b42a661d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4879b4824ef7c6fea07078d74f34ebd1560913323f7d7f686e5d248b42a661d->enter($__internal_a4879b4824ef7c6fea07078d74f34ebd1560913323f7d7f686e5d248b42a661d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_1d658c3d401f7294c428ca5344b7595cbdf836291cc009613caf9883b3bad1a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d658c3d401f7294c428ca5344b7595cbdf836291cc009613caf9883b3bad1a2->enter($__internal_1d658c3d401f7294c428ca5344b7595cbdf836291cc009613caf9883b3bad1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4879b4824ef7c6fea07078d74f34ebd1560913323f7d7f686e5d248b42a661d->leave($__internal_a4879b4824ef7c6fea07078d74f34ebd1560913323f7d7f686e5d248b42a661d_prof);

        
        $__internal_1d658c3d401f7294c428ca5344b7595cbdf836291cc009613caf9883b3bad1a2->leave($__internal_1d658c3d401f7294c428ca5344b7595cbdf836291cc009613caf9883b3bad1a2_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_940b9bd1bea4b36b407fb625c2cfbe73187bae59db2b9a50cea771ad72d1c218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_940b9bd1bea4b36b407fb625c2cfbe73187bae59db2b9a50cea771ad72d1c218->enter($__internal_940b9bd1bea4b36b407fb625c2cfbe73187bae59db2b9a50cea771ad72d1c218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d6dcc12c9cad42c9a7bc07fdc544fb4b55fb142e34af75b493c48c6d4c2b0e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6dcc12c9cad42c9a7bc07fdc544fb4b55fb142e34af75b493c48c6d4c2b0e46->enter($__internal_d6dcc12c9cad42c9a7bc07fdc544fb4b55fb142e34af75b493c48c6d4c2b0e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_d6dcc12c9cad42c9a7bc07fdc544fb4b55fb142e34af75b493c48c6d4c2b0e46->leave($__internal_d6dcc12c9cad42c9a7bc07fdc544fb4b55fb142e34af75b493c48c6d4c2b0e46_prof);

        
        $__internal_940b9bd1bea4b36b407fb625c2cfbe73187bae59db2b9a50cea771ad72d1c218->leave($__internal_940b9bd1bea4b36b407fb625c2cfbe73187bae59db2b9a50cea771ad72d1c218_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_313c151ee329c92e640259373686cfb8daf2d3bf24d8a08a9a2c5fc5aa42d4ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_313c151ee329c92e640259373686cfb8daf2d3bf24d8a08a9a2c5fc5aa42d4ee->enter($__internal_313c151ee329c92e640259373686cfb8daf2d3bf24d8a08a9a2c5fc5aa42d4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b9ffe8d20034a378b7a710faa799709bbf362e37afcb8085f84a248a76a7ed67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ffe8d20034a378b7a710faa799709bbf362e37afcb8085f84a248a76a7ed67->enter($__internal_b9ffe8d20034a378b7a710faa799709bbf362e37afcb8085f84a248a76a7ed67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b9ffe8d20034a378b7a710faa799709bbf362e37afcb8085f84a248a76a7ed67->leave($__internal_b9ffe8d20034a378b7a710faa799709bbf362e37afcb8085f84a248a76a7ed67_prof);

        
        $__internal_313c151ee329c92e640259373686cfb8daf2d3bf24d8a08a9a2c5fc5aa42d4ee->leave($__internal_313c151ee329c92e640259373686cfb8daf2d3bf24d8a08a9a2c5fc5aa42d4ee_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
