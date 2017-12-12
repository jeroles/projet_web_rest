<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_0e7d7ebc7f69dfb3e777438e943d923fcc01fe711b46495dc9cbe1dda21f2f23 extends Twig_Template
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
        $__internal_e9ffb25a24aca62c4dfe78e21f74f7a3c98aa8c5d2f4a35a005bde8031b1ba58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ffb25a24aca62c4dfe78e21f74f7a3c98aa8c5d2f4a35a005bde8031b1ba58->enter($__internal_e9ffb25a24aca62c4dfe78e21f74f7a3c98aa8c5d2f4a35a005bde8031b1ba58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_3b7379512e63f41730c9277ed20750b6ca29dac455631cee3d74271dbf2efd6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7379512e63f41730c9277ed20750b6ca29dac455631cee3d74271dbf2efd6a->enter($__internal_3b7379512e63f41730c9277ed20750b6ca29dac455631cee3d74271dbf2efd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_e9ffb25a24aca62c4dfe78e21f74f7a3c98aa8c5d2f4a35a005bde8031b1ba58->leave($__internal_e9ffb25a24aca62c4dfe78e21f74f7a3c98aa8c5d2f4a35a005bde8031b1ba58_prof);

        
        $__internal_3b7379512e63f41730c9277ed20750b6ca29dac455631cee3d74271dbf2efd6a->leave($__internal_3b7379512e63f41730c9277ed20750b6ca29dac455631cee3d74271dbf2efd6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_label.html.php");
    }
}
