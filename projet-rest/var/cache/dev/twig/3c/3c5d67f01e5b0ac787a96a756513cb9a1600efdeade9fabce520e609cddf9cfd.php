<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e7ae062936a1a2eb3c051a265f326471d070c53880ae666e593641f3cfcf45d9 extends Twig_Template
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
        $__internal_d4649e292c5ae2acbcf6bb9a15c48e763173a7e6c11068b17a28d6b6d414f7c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4649e292c5ae2acbcf6bb9a15c48e763173a7e6c11068b17a28d6b6d414f7c0->enter($__internal_d4649e292c5ae2acbcf6bb9a15c48e763173a7e6c11068b17a28d6b6d414f7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_af54d2fa79ab73eb9e7b07c36932f21b76e7f2acc4b28ebe24f079b6b64ac2e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af54d2fa79ab73eb9e7b07c36932f21b76e7f2acc4b28ebe24f079b6b64ac2e7->enter($__internal_af54d2fa79ab73eb9e7b07c36932f21b76e7f2acc4b28ebe24f079b6b64ac2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d4649e292c5ae2acbcf6bb9a15c48e763173a7e6c11068b17a28d6b6d414f7c0->leave($__internal_d4649e292c5ae2acbcf6bb9a15c48e763173a7e6c11068b17a28d6b6d414f7c0_prof);

        
        $__internal_af54d2fa79ab73eb9e7b07c36932f21b76e7f2acc4b28ebe24f079b6b64ac2e7->leave($__internal_af54d2fa79ab73eb9e7b07c36932f21b76e7f2acc4b28ebe24f079b6b64ac2e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
