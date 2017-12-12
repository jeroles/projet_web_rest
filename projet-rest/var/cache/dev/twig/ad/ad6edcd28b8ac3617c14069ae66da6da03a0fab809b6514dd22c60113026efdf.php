<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9ffbbc37a7c51b92143382533102538bc34b307e2e7c6f09a52cfd6658932031 extends Twig_Template
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
        $__internal_549342fe8cc68f2e14acbf0a109381e261e05683f35595f2043b0d263a998d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_549342fe8cc68f2e14acbf0a109381e261e05683f35595f2043b0d263a998d32->enter($__internal_549342fe8cc68f2e14acbf0a109381e261e05683f35595f2043b0d263a998d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_a00370fd2e7cf062433e66718a8b7bf542f90cf557b3222f826e485bcd715dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00370fd2e7cf062433e66718a8b7bf542f90cf557b3222f826e485bcd715dac->enter($__internal_a00370fd2e7cf062433e66718a8b7bf542f90cf557b3222f826e485bcd715dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_549342fe8cc68f2e14acbf0a109381e261e05683f35595f2043b0d263a998d32->leave($__internal_549342fe8cc68f2e14acbf0a109381e261e05683f35595f2043b0d263a998d32_prof);

        
        $__internal_a00370fd2e7cf062433e66718a8b7bf542f90cf557b3222f826e485bcd715dac->leave($__internal_a00370fd2e7cf062433e66718a8b7bf542f90cf557b3222f826e485bcd715dac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
