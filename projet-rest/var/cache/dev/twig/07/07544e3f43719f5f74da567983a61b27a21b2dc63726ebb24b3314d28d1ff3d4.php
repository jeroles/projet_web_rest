<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_36ba4486e173b0af3ef236bedd10fd722e7a1bf92becc62aff7ff1235d51b645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_086619cac4119110e7f056b0a77729728e192160f23a1c5460a942abdc4323c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086619cac4119110e7f056b0a77729728e192160f23a1c5460a942abdc4323c3->enter($__internal_086619cac4119110e7f056b0a77729728e192160f23a1c5460a942abdc4323c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b44588d71779d513d385440aa7f65101066a4e9c4e716351635b071f7bd81a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b44588d71779d513d385440aa7f65101066a4e9c4e716351635b071f7bd81a5b->enter($__internal_b44588d71779d513d385440aa7f65101066a4e9c4e716351635b071f7bd81a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_086619cac4119110e7f056b0a77729728e192160f23a1c5460a942abdc4323c3->leave($__internal_086619cac4119110e7f056b0a77729728e192160f23a1c5460a942abdc4323c3_prof);

        
        $__internal_b44588d71779d513d385440aa7f65101066a4e9c4e716351635b071f7bd81a5b->leave($__internal_b44588d71779d513d385440aa7f65101066a4e9c4e716351635b071f7bd81a5b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_033126c514a3250d2a8e541daac0b5aadcdc3d88d69ed7e6258d19cb59be581b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_033126c514a3250d2a8e541daac0b5aadcdc3d88d69ed7e6258d19cb59be581b->enter($__internal_033126c514a3250d2a8e541daac0b5aadcdc3d88d69ed7e6258d19cb59be581b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fbc7e98dd82cf51701c31c4dd8641e2d433650cbb7b7447228864161dab1a751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc7e98dd82cf51701c31c4dd8641e2d433650cbb7b7447228864161dab1a751->enter($__internal_fbc7e98dd82cf51701c31c4dd8641e2d433650cbb7b7447228864161dab1a751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fbc7e98dd82cf51701c31c4dd8641e2d433650cbb7b7447228864161dab1a751->leave($__internal_fbc7e98dd82cf51701c31c4dd8641e2d433650cbb7b7447228864161dab1a751_prof);

        
        $__internal_033126c514a3250d2a8e541daac0b5aadcdc3d88d69ed7e6258d19cb59be581b->leave($__internal_033126c514a3250d2a8e541daac0b5aadcdc3d88d69ed7e6258d19cb59be581b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ddc180eb2fb89846d24e1e029465decc8354c647f16606b0a6b5dca658e6858a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc180eb2fb89846d24e1e029465decc8354c647f16606b0a6b5dca658e6858a->enter($__internal_ddc180eb2fb89846d24e1e029465decc8354c647f16606b0a6b5dca658e6858a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e2c3a6f118fa3bd464d8df9d320f36ddd02dc493ad3f29b9d01cb807b0471426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c3a6f118fa3bd464d8df9d320f36ddd02dc493ad3f29b9d01cb807b0471426->enter($__internal_e2c3a6f118fa3bd464d8df9d320f36ddd02dc493ad3f29b9d01cb807b0471426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e2c3a6f118fa3bd464d8df9d320f36ddd02dc493ad3f29b9d01cb807b0471426->leave($__internal_e2c3a6f118fa3bd464d8df9d320f36ddd02dc493ad3f29b9d01cb807b0471426_prof);

        
        $__internal_ddc180eb2fb89846d24e1e029465decc8354c647f16606b0a6b5dca658e6858a->leave($__internal_ddc180eb2fb89846d24e1e029465decc8354c647f16606b0a6b5dca658e6858a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2281cabfbfae1d37e2fe460dcdcb1691eb3c95566ef603319b92a598342c494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2281cabfbfae1d37e2fe460dcdcb1691eb3c95566ef603319b92a598342c494->enter($__internal_e2281cabfbfae1d37e2fe460dcdcb1691eb3c95566ef603319b92a598342c494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d1a23b647fe16804816427261100345004514daf5a1eb10360e378058d15a3e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a23b647fe16804816427261100345004514daf5a1eb10360e378058d15a3e9->enter($__internal_d1a23b647fe16804816427261100345004514daf5a1eb10360e378058d15a3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_d1a23b647fe16804816427261100345004514daf5a1eb10360e378058d15a3e9->leave($__internal_d1a23b647fe16804816427261100345004514daf5a1eb10360e378058d15a3e9_prof);

        
        $__internal_e2281cabfbfae1d37e2fe460dcdcb1691eb3c95566ef603319b92a598342c494->leave($__internal_e2281cabfbfae1d37e2fe460dcdcb1691eb3c95566ef603319b92a598342c494_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
