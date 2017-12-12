<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_82fb2105b982b7b98677401e5f574d5e0be8801618c0268dcad20725008065f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ae3ef01a45a7e0ecfa892bef1ffc8e81e3b9cece81845ce5cbd32390906219aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae3ef01a45a7e0ecfa892bef1ffc8e81e3b9cece81845ce5cbd32390906219aa->enter($__internal_ae3ef01a45a7e0ecfa892bef1ffc8e81e3b9cece81845ce5cbd32390906219aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_de7c58156faa4ac6ee8938fa73fca663ecaa21ea81c27d3c45919d4c83c3cd8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7c58156faa4ac6ee8938fa73fca663ecaa21ea81c27d3c45919d4c83c3cd8d->enter($__internal_de7c58156faa4ac6ee8938fa73fca663ecaa21ea81c27d3c45919d4c83c3cd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae3ef01a45a7e0ecfa892bef1ffc8e81e3b9cece81845ce5cbd32390906219aa->leave($__internal_ae3ef01a45a7e0ecfa892bef1ffc8e81e3b9cece81845ce5cbd32390906219aa_prof);

        
        $__internal_de7c58156faa4ac6ee8938fa73fca663ecaa21ea81c27d3c45919d4c83c3cd8d->leave($__internal_de7c58156faa4ac6ee8938fa73fca663ecaa21ea81c27d3c45919d4c83c3cd8d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_517216d505d07fae129dec2a58656f7612a74ab484421bcb3fd14d6e8a391c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_517216d505d07fae129dec2a58656f7612a74ab484421bcb3fd14d6e8a391c3c->enter($__internal_517216d505d07fae129dec2a58656f7612a74ab484421bcb3fd14d6e8a391c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0ac6cc29d58eb831618874de4ce0d319d1a9b2e006cc7418a0db93d73a9c510c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac6cc29d58eb831618874de4ce0d319d1a9b2e006cc7418a0db93d73a9c510c->enter($__internal_0ac6cc29d58eb831618874de4ce0d319d1a9b2e006cc7418a0db93d73a9c510c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_0ac6cc29d58eb831618874de4ce0d319d1a9b2e006cc7418a0db93d73a9c510c->leave($__internal_0ac6cc29d58eb831618874de4ce0d319d1a9b2e006cc7418a0db93d73a9c510c_prof);

        
        $__internal_517216d505d07fae129dec2a58656f7612a74ab484421bcb3fd14d6e8a391c3c->leave($__internal_517216d505d07fae129dec2a58656f7612a74ab484421bcb3fd14d6e8a391c3c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d91e74b7cc609db3af5a7d16b7bb8b40eea7787e26bfcb20c20dfbdf7cbf8b86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d91e74b7cc609db3af5a7d16b7bb8b40eea7787e26bfcb20c20dfbdf7cbf8b86->enter($__internal_d91e74b7cc609db3af5a7d16b7bb8b40eea7787e26bfcb20c20dfbdf7cbf8b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b9bca8f8bb78b65ff35e980932b83fd63139ca0e153df2d47306bdbf47c4809f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9bca8f8bb78b65ff35e980932b83fd63139ca0e153df2d47306bdbf47c4809f->enter($__internal_b9bca8f8bb78b65ff35e980932b83fd63139ca0e153df2d47306bdbf47c4809f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_b9bca8f8bb78b65ff35e980932b83fd63139ca0e153df2d47306bdbf47c4809f->leave($__internal_b9bca8f8bb78b65ff35e980932b83fd63139ca0e153df2d47306bdbf47c4809f_prof);

        
        $__internal_d91e74b7cc609db3af5a7d16b7bb8b40eea7787e26bfcb20c20dfbdf7cbf8b86->leave($__internal_d91e74b7cc609db3af5a7d16b7bb8b40eea7787e26bfcb20c20dfbdf7cbf8b86_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_53c851d406c390502b85cd46737a07013374161dda6889e7490d8208b3285734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53c851d406c390502b85cd46737a07013374161dda6889e7490d8208b3285734->enter($__internal_53c851d406c390502b85cd46737a07013374161dda6889e7490d8208b3285734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0af321153d61e6c6eb527082ae824ef12dde5164758999c12d6b3ad3200d632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0af321153d61e6c6eb527082ae824ef12dde5164758999c12d6b3ad3200d632->enter($__internal_f0af321153d61e6c6eb527082ae824ef12dde5164758999c12d6b3ad3200d632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f0af321153d61e6c6eb527082ae824ef12dde5164758999c12d6b3ad3200d632->leave($__internal_f0af321153d61e6c6eb527082ae824ef12dde5164758999c12d6b3ad3200d632_prof);

        
        $__internal_53c851d406c390502b85cd46737a07013374161dda6889e7490d8208b3285734->leave($__internal_53c851d406c390502b85cd46737a07013374161dda6889e7490d8208b3285734_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
