<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_d5bb15eea46223752d03e79da7aeae13aa20cd23c2392c595937a2b3a6edfb4f extends Twig_Template
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
        $__internal_b88504d7354ace95233ef82a202bb7ab813c02ab4cdc4eeaa10781ca3fb099ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b88504d7354ace95233ef82a202bb7ab813c02ab4cdc4eeaa10781ca3fb099ea->enter($__internal_b88504d7354ace95233ef82a202bb7ab813c02ab4cdc4eeaa10781ca3fb099ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_71f3ee4a999b7e76936b98227cb5414c4404385b6d537b1cd6463d50157a3435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f3ee4a999b7e76936b98227cb5414c4404385b6d537b1cd6463d50157a3435->enter($__internal_71f3ee4a999b7e76936b98227cb5414c4404385b6d537b1cd6463d50157a3435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_b88504d7354ace95233ef82a202bb7ab813c02ab4cdc4eeaa10781ca3fb099ea->leave($__internal_b88504d7354ace95233ef82a202bb7ab813c02ab4cdc4eeaa10781ca3fb099ea_prof);

        
        $__internal_71f3ee4a999b7e76936b98227cb5414c4404385b6d537b1cd6463d50157a3435->leave($__internal_71f3ee4a999b7e76936b98227cb5414c4404385b6d537b1cd6463d50157a3435_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
