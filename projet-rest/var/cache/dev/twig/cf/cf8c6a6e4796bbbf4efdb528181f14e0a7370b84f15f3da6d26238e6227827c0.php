<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_dd4af216ed34deab125be9c9487cf15f9879e2248d1a9099e597c95f9ca7ddba extends Twig_Template
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
        $__internal_6437128c34bac886f183cf0db29689b0977e03988de15cb19c376b8bf86c15a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6437128c34bac886f183cf0db29689b0977e03988de15cb19c376b8bf86c15a8->enter($__internal_6437128c34bac886f183cf0db29689b0977e03988de15cb19c376b8bf86c15a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_752a2b27e55d5cb3f2bdf71375a19d813d950609f1ded3bd4dd21cf578446082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752a2b27e55d5cb3f2bdf71375a19d813d950609f1ded3bd4dd21cf578446082->enter($__internal_752a2b27e55d5cb3f2bdf71375a19d813d950609f1ded3bd4dd21cf578446082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6437128c34bac886f183cf0db29689b0977e03988de15cb19c376b8bf86c15a8->leave($__internal_6437128c34bac886f183cf0db29689b0977e03988de15cb19c376b8bf86c15a8_prof);

        
        $__internal_752a2b27e55d5cb3f2bdf71375a19d813d950609f1ded3bd4dd21cf578446082->leave($__internal_752a2b27e55d5cb3f2bdf71375a19d813d950609f1ded3bd4dd21cf578446082_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
