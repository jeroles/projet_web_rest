<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_573ba906974f56dc96673ac62fb7f4869d568a1cc69a14167f30cbfd447829ca extends Twig_Template
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
        $__internal_e18a39ee136f69adb50aadc54d3276f195e108bb49da29e3930b36b1712802c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e18a39ee136f69adb50aadc54d3276f195e108bb49da29e3930b36b1712802c8->enter($__internal_e18a39ee136f69adb50aadc54d3276f195e108bb49da29e3930b36b1712802c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_5be7f4b35e8e2f2b75c5ff70e87f9fb6f46f4b79e812174afaa73a0557d39747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be7f4b35e8e2f2b75c5ff70e87f9fb6f46f4b79e812174afaa73a0557d39747->enter($__internal_5be7f4b35e8e2f2b75c5ff70e87f9fb6f46f4b79e812174afaa73a0557d39747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_e18a39ee136f69adb50aadc54d3276f195e108bb49da29e3930b36b1712802c8->leave($__internal_e18a39ee136f69adb50aadc54d3276f195e108bb49da29e3930b36b1712802c8_prof);

        
        $__internal_5be7f4b35e8e2f2b75c5ff70e87f9fb6f46f4b79e812174afaa73a0557d39747->leave($__internal_5be7f4b35e8e2f2b75c5ff70e87f9fb6f46f4b79e812174afaa73a0557d39747_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\time_widget.html.php");
    }
}
