<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_40d49a9da379dab6910b53fc6461eb0c4623fe5f30c5e5fc29d617df17073911 extends Twig_Template
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
        $__internal_249d5456ac769ea05b47a9c9cfa90220917cad94960711ec8b025500f523498e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_249d5456ac769ea05b47a9c9cfa90220917cad94960711ec8b025500f523498e->enter($__internal_249d5456ac769ea05b47a9c9cfa90220917cad94960711ec8b025500f523498e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_fcbc2443ac20cab28164e5fb85764593189e3dffa0a15f4346f58be3fcb04663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcbc2443ac20cab28164e5fb85764593189e3dffa0a15f4346f58be3fcb04663->enter($__internal_fcbc2443ac20cab28164e5fb85764593189e3dffa0a15f4346f58be3fcb04663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_249d5456ac769ea05b47a9c9cfa90220917cad94960711ec8b025500f523498e->leave($__internal_249d5456ac769ea05b47a9c9cfa90220917cad94960711ec8b025500f523498e_prof);

        
        $__internal_fcbc2443ac20cab28164e5fb85764593189e3dffa0a15f4346f58be3fcb04663->leave($__internal_fcbc2443ac20cab28164e5fb85764593189e3dffa0a15f4346f58be3fcb04663_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
