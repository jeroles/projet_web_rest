<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_8c961f2d16315ae8adf93430608d1140b9672d528f04080be702ad8422346f30 extends Twig_Template
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
        $__internal_fcd829b48c51e18a4e03c4f87c13243f768de5c5600844d7496325bf02e6ef39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcd829b48c51e18a4e03c4f87c13243f768de5c5600844d7496325bf02e6ef39->enter($__internal_fcd829b48c51e18a4e03c4f87c13243f768de5c5600844d7496325bf02e6ef39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_48ca54428e5216f1560f388110ee0f85105a91ea47882904f20e735a3ca91b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ca54428e5216f1560f388110ee0f85105a91ea47882904f20e735a3ca91b67->enter($__internal_48ca54428e5216f1560f388110ee0f85105a91ea47882904f20e735a3ca91b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_fcd829b48c51e18a4e03c4f87c13243f768de5c5600844d7496325bf02e6ef39->leave($__internal_fcd829b48c51e18a4e03c4f87c13243f768de5c5600844d7496325bf02e6ef39_prof);

        
        $__internal_48ca54428e5216f1560f388110ee0f85105a91ea47882904f20e735a3ca91b67->leave($__internal_48ca54428e5216f1560f388110ee0f85105a91ea47882904f20e735a3ca91b67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
