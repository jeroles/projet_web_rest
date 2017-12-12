<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_435719f420c65126aae21f3920657a8344e0eb5895fd372f9388e76fc6004cc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5134173c5bbfb0eb4f9d3c505b4b0621b6b79b70bd5da51b84302c6245d72add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5134173c5bbfb0eb4f9d3c505b4b0621b6b79b70bd5da51b84302c6245d72add->enter($__internal_5134173c5bbfb0eb4f9d3c505b4b0621b6b79b70bd5da51b84302c6245d72add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_376af3de18d998b1272b6ed92a7890e6c867c407eaf2ec348dd58e64597cf219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376af3de18d998b1272b6ed92a7890e6c867c407eaf2ec348dd58e64597cf219->enter($__internal_376af3de18d998b1272b6ed92a7890e6c867c407eaf2ec348dd58e64597cf219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5134173c5bbfb0eb4f9d3c505b4b0621b6b79b70bd5da51b84302c6245d72add->leave($__internal_5134173c5bbfb0eb4f9d3c505b4b0621b6b79b70bd5da51b84302c6245d72add_prof);

        
        $__internal_376af3de18d998b1272b6ed92a7890e6c867c407eaf2ec348dd58e64597cf219->leave($__internal_376af3de18d998b1272b6ed92a7890e6c867c407eaf2ec348dd58e64597cf219_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c5a89d7f2e8e1c167e013aaf4a3f9ee5f1c6b958883f2025b936ea19476c857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c5a89d7f2e8e1c167e013aaf4a3f9ee5f1c6b958883f2025b936ea19476c857->enter($__internal_4c5a89d7f2e8e1c167e013aaf4a3f9ee5f1c6b958883f2025b936ea19476c857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dee4f00502c2dd1d662c1bc71d06fef33a0490c325bde7597216fba7abae9e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dee4f00502c2dd1d662c1bc71d06fef33a0490c325bde7597216fba7abae9e1d->enter($__internal_dee4f00502c2dd1d662c1bc71d06fef33a0490c325bde7597216fba7abae9e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dee4f00502c2dd1d662c1bc71d06fef33a0490c325bde7597216fba7abae9e1d->leave($__internal_dee4f00502c2dd1d662c1bc71d06fef33a0490c325bde7597216fba7abae9e1d_prof);

        
        $__internal_4c5a89d7f2e8e1c167e013aaf4a3f9ee5f1c6b958883f2025b936ea19476c857->leave($__internal_4c5a89d7f2e8e1c167e013aaf4a3f9ee5f1c6b958883f2025b936ea19476c857_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2c22e5d340e1349d723f25ae2369fe0039ac6c749436b6d7968802d5d0ad93fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c22e5d340e1349d723f25ae2369fe0039ac6c749436b6d7968802d5d0ad93fe->enter($__internal_2c22e5d340e1349d723f25ae2369fe0039ac6c749436b6d7968802d5d0ad93fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_03286f49b75d82b3ee34f7d3a86c1606c612d445e362102c9e4c53c61610cb36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03286f49b75d82b3ee34f7d3a86c1606c612d445e362102c9e4c53c61610cb36->enter($__internal_03286f49b75d82b3ee34f7d3a86c1606c612d445e362102c9e4c53c61610cb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_03286f49b75d82b3ee34f7d3a86c1606c612d445e362102c9e4c53c61610cb36->leave($__internal_03286f49b75d82b3ee34f7d3a86c1606c612d445e362102c9e4c53c61610cb36_prof);

        
        $__internal_2c22e5d340e1349d723f25ae2369fe0039ac6c749436b6d7968802d5d0ad93fe->leave($__internal_2c22e5d340e1349d723f25ae2369fe0039ac6c749436b6d7968802d5d0ad93fe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a2ee0cf3cf5bdb426e819c1101bd7213ae2e84830563d4c5932cb8de8a25945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a2ee0cf3cf5bdb426e819c1101bd7213ae2e84830563d4c5932cb8de8a25945->enter($__internal_0a2ee0cf3cf5bdb426e819c1101bd7213ae2e84830563d4c5932cb8de8a25945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_76e1d05894d9d1f1ea3471daeaea3852808bf00f4af078283d2085130cc69d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e1d05894d9d1f1ea3471daeaea3852808bf00f4af078283d2085130cc69d56->enter($__internal_76e1d05894d9d1f1ea3471daeaea3852808bf00f4af078283d2085130cc69d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_76e1d05894d9d1f1ea3471daeaea3852808bf00f4af078283d2085130cc69d56->leave($__internal_76e1d05894d9d1f1ea3471daeaea3852808bf00f4af078283d2085130cc69d56_prof);

        
        $__internal_0a2ee0cf3cf5bdb426e819c1101bd7213ae2e84830563d4c5932cb8de8a25945->leave($__internal_0a2ee0cf3cf5bdb426e819c1101bd7213ae2e84830563d4c5932cb8de8a25945_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
