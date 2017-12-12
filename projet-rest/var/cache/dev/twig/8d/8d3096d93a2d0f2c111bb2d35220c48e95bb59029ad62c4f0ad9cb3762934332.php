<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_16c52c8320583a6226faab44e0b47f01f58b248afcc865ef3df3f2701d76c0db extends Twig_Template
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
        $__internal_d27f85d3b6c4ca04c778f9a148d83cf314356555c2a23c38137711ebb93d6e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d27f85d3b6c4ca04c778f9a148d83cf314356555c2a23c38137711ebb93d6e20->enter($__internal_d27f85d3b6c4ca04c778f9a148d83cf314356555c2a23c38137711ebb93d6e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_4c4501997861947a6d5374464d0acf9d5c63dac5583612ed7037a1bd19113c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c4501997861947a6d5374464d0acf9d5c63dac5583612ed7037a1bd19113c9b->enter($__internal_4c4501997861947a6d5374464d0acf9d5c63dac5583612ed7037a1bd19113c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d27f85d3b6c4ca04c778f9a148d83cf314356555c2a23c38137711ebb93d6e20->leave($__internal_d27f85d3b6c4ca04c778f9a148d83cf314356555c2a23c38137711ebb93d6e20_prof);

        
        $__internal_4c4501997861947a6d5374464d0acf9d5c63dac5583612ed7037a1bd19113c9b->leave($__internal_4c4501997861947a6d5374464d0acf9d5c63dac5583612ed7037a1bd19113c9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
