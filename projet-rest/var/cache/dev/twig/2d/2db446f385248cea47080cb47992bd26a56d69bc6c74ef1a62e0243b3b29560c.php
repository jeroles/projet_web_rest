<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_713b3d547ce9f1acb90503deb7d751b53901da8471d72021579d5e55838151c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8824f9141efbe4be3f14acf4a49f71deb5cb3239d06e39054f8966ebf78bca76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8824f9141efbe4be3f14acf4a49f71deb5cb3239d06e39054f8966ebf78bca76->enter($__internal_8824f9141efbe4be3f14acf4a49f71deb5cb3239d06e39054f8966ebf78bca76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_389d1d565dae79cf6f72665d65cacaf178226fa00c63f3a9e67d51fbcaa721a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389d1d565dae79cf6f72665d65cacaf178226fa00c63f3a9e67d51fbcaa721a3->enter($__internal_389d1d565dae79cf6f72665d65cacaf178226fa00c63f3a9e67d51fbcaa721a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8824f9141efbe4be3f14acf4a49f71deb5cb3239d06e39054f8966ebf78bca76->leave($__internal_8824f9141efbe4be3f14acf4a49f71deb5cb3239d06e39054f8966ebf78bca76_prof);

        
        $__internal_389d1d565dae79cf6f72665d65cacaf178226fa00c63f3a9e67d51fbcaa721a3->leave($__internal_389d1d565dae79cf6f72665d65cacaf178226fa00c63f3a9e67d51fbcaa721a3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d763dfefaca6c06a8ca8c75bc27aaeac47732ae1b548e1e7a5a3a6f1b789b527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d763dfefaca6c06a8ca8c75bc27aaeac47732ae1b548e1e7a5a3a6f1b789b527->enter($__internal_d763dfefaca6c06a8ca8c75bc27aaeac47732ae1b548e1e7a5a3a6f1b789b527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_668b1377ce4caf480965865dde2e4087b91110cec19cca0ef1e7f3baa9fb7403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668b1377ce4caf480965865dde2e4087b91110cec19cca0ef1e7f3baa9fb7403->enter($__internal_668b1377ce4caf480965865dde2e4087b91110cec19cca0ef1e7f3baa9fb7403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_668b1377ce4caf480965865dde2e4087b91110cec19cca0ef1e7f3baa9fb7403->leave($__internal_668b1377ce4caf480965865dde2e4087b91110cec19cca0ef1e7f3baa9fb7403_prof);

        
        $__internal_d763dfefaca6c06a8ca8c75bc27aaeac47732ae1b548e1e7a5a3a6f1b789b527->leave($__internal_d763dfefaca6c06a8ca8c75bc27aaeac47732ae1b548e1e7a5a3a6f1b789b527_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
