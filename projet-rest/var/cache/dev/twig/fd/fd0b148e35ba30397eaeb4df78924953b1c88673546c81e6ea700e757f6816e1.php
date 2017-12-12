<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_97fd161768ebd7d9cac6d856ad6274d7fcf8b63e65a882744085bb3dbcba6d35 extends Twig_Template
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
        $__internal_a94c7fbb001a2c5a81ba8e22c1da7c73ae67c282f535990b0e17e1eb2675438f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a94c7fbb001a2c5a81ba8e22c1da7c73ae67c282f535990b0e17e1eb2675438f->enter($__internal_a94c7fbb001a2c5a81ba8e22c1da7c73ae67c282f535990b0e17e1eb2675438f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_3cd3ae1d6e6b2f88fb9b052e2f7a116e68227fb241ff7b73f40caa2fa263db6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd3ae1d6e6b2f88fb9b052e2f7a116e68227fb241ff7b73f40caa2fa263db6a->enter($__internal_3cd3ae1d6e6b2f88fb9b052e2f7a116e68227fb241ff7b73f40caa2fa263db6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_a94c7fbb001a2c5a81ba8e22c1da7c73ae67c282f535990b0e17e1eb2675438f->leave($__internal_a94c7fbb001a2c5a81ba8e22c1da7c73ae67c282f535990b0e17e1eb2675438f_prof);

        
        $__internal_3cd3ae1d6e6b2f88fb9b052e2f7a116e68227fb241ff7b73f40caa2fa263db6a->leave($__internal_3cd3ae1d6e6b2f88fb9b052e2f7a116e68227fb241ff7b73f40caa2fa263db6a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
