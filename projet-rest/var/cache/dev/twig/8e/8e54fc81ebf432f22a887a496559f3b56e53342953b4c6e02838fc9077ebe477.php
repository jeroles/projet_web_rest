<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_9988c23cb56b47ca2b3373049e793af7dbddb72a255465304c158f8fc92af9b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c018348f8e7bb33e197fdea5ddf43871f7dabb0ad9ace72f2e6fb50780eef21a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c018348f8e7bb33e197fdea5ddf43871f7dabb0ad9ace72f2e6fb50780eef21a->enter($__internal_c018348f8e7bb33e197fdea5ddf43871f7dabb0ad9ace72f2e6fb50780eef21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_b719fdd222f5dcfcbaa70e82c3536e4c38ef8bd68af6b851e06f85f34405d8b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b719fdd222f5dcfcbaa70e82c3536e4c38ef8bd68af6b851e06f85f34405d8b3->enter($__internal_b719fdd222f5dcfcbaa70e82c3536e4c38ef8bd68af6b851e06f85f34405d8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c018348f8e7bb33e197fdea5ddf43871f7dabb0ad9ace72f2e6fb50780eef21a->leave($__internal_c018348f8e7bb33e197fdea5ddf43871f7dabb0ad9ace72f2e6fb50780eef21a_prof);

        
        $__internal_b719fdd222f5dcfcbaa70e82c3536e4c38ef8bd68af6b851e06f85f34405d8b3->leave($__internal_b719fdd222f5dcfcbaa70e82c3536e4c38ef8bd68af6b851e06f85f34405d8b3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_46371908f364c187b25119ac40c316ac94779be5001aaba5233e429b799f55ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46371908f364c187b25119ac40c316ac94779be5001aaba5233e429b799f55ea->enter($__internal_46371908f364c187b25119ac40c316ac94779be5001aaba5233e429b799f55ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_377e90ca5fcd43f35bcfc7cf34da998b7cf6e282a0e8bb74e5b8bc1333b56fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377e90ca5fcd43f35bcfc7cf34da998b7cf6e282a0e8bb74e5b8bc1333b56fbe->enter($__internal_377e90ca5fcd43f35bcfc7cf34da998b7cf6e282a0e8bb74e5b8bc1333b56fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_377e90ca5fcd43f35bcfc7cf34da998b7cf6e282a0e8bb74e5b8bc1333b56fbe->leave($__internal_377e90ca5fcd43f35bcfc7cf34da998b7cf6e282a0e8bb74e5b8bc1333b56fbe_prof);

        
        $__internal_46371908f364c187b25119ac40c316ac94779be5001aaba5233e429b799f55ea->leave($__internal_46371908f364c187b25119ac40c316ac94779be5001aaba5233e429b799f55ea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
