<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e300235f78e2bd8b43bb60a5dfd73e8d259bdf8bd1fc1f241d9633854e4d6410 extends Twig_Template
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
        $__internal_5e309b4e41381feb37e57db4396f01fe8691c2c6ca4ea6c2ba72fa7167cf9b4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e309b4e41381feb37e57db4396f01fe8691c2c6ca4ea6c2ba72fa7167cf9b4e->enter($__internal_5e309b4e41381feb37e57db4396f01fe8691c2c6ca4ea6c2ba72fa7167cf9b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_f7cea900c8b4bc6406d33e01ee9b376fee2e5102a5dd29639e1f3c9b567116b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7cea900c8b4bc6406d33e01ee9b376fee2e5102a5dd29639e1f3c9b567116b8->enter($__internal_f7cea900c8b4bc6406d33e01ee9b376fee2e5102a5dd29639e1f3c9b567116b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5e309b4e41381feb37e57db4396f01fe8691c2c6ca4ea6c2ba72fa7167cf9b4e->leave($__internal_5e309b4e41381feb37e57db4396f01fe8691c2c6ca4ea6c2ba72fa7167cf9b4e_prof);

        
        $__internal_f7cea900c8b4bc6406d33e01ee9b376fee2e5102a5dd29639e1f3c9b567116b8->leave($__internal_f7cea900c8b4bc6406d33e01ee9b376fee2e5102a5dd29639e1f3c9b567116b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
