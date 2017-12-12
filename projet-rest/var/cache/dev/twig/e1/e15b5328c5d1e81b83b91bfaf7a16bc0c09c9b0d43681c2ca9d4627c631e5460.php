<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_bdbfded387255b4ca1b502d1bc374d4b3f857d287cfd36925ef03b8d4f741355 extends Twig_Template
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
        $__internal_5bdcec459208b40743606465f75961998dc95538adefab42dbb662995d206aac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bdcec459208b40743606465f75961998dc95538adefab42dbb662995d206aac->enter($__internal_5bdcec459208b40743606465f75961998dc95538adefab42dbb662995d206aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_db8432c25a36d6dadc98a33ea5c584534fea56b0cc50987209ca92a2655e4fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8432c25a36d6dadc98a33ea5c584534fea56b0cc50987209ca92a2655e4fe2->enter($__internal_db8432c25a36d6dadc98a33ea5c584534fea56b0cc50987209ca92a2655e4fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_5bdcec459208b40743606465f75961998dc95538adefab42dbb662995d206aac->leave($__internal_5bdcec459208b40743606465f75961998dc95538adefab42dbb662995d206aac_prof);

        
        $__internal_db8432c25a36d6dadc98a33ea5c584534fea56b0cc50987209ca92a2655e4fe2->leave($__internal_db8432c25a36d6dadc98a33ea5c584534fea56b0cc50987209ca92a2655e4fe2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
