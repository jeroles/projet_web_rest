<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_b3079d4ddea7146bb4106ae3003a71219c20d258da84c40a33162481539b54de extends Twig_Template
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
        $__internal_99ac88d31685cc3592e1069dd64f697886c54cdad9883e53addbc3edd0742258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99ac88d31685cc3592e1069dd64f697886c54cdad9883e53addbc3edd0742258->enter($__internal_99ac88d31685cc3592e1069dd64f697886c54cdad9883e53addbc3edd0742258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_66c41f22f7e967fa75cad3caa418f58e7cc33ab2a00ab3984fddf7b58b2dddf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c41f22f7e967fa75cad3caa418f58e7cc33ab2a00ab3984fddf7b58b2dddf4->enter($__internal_66c41f22f7e967fa75cad3caa418f58e7cc33ab2a00ab3984fddf7b58b2dddf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_99ac88d31685cc3592e1069dd64f697886c54cdad9883e53addbc3edd0742258->leave($__internal_99ac88d31685cc3592e1069dd64f697886c54cdad9883e53addbc3edd0742258_prof);

        
        $__internal_66c41f22f7e967fa75cad3caa418f58e7cc33ab2a00ab3984fddf7b58b2dddf4->leave($__internal_66c41f22f7e967fa75cad3caa418f58e7cc33ab2a00ab3984fddf7b58b2dddf4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
