<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_23b85d68a2917bdf4d273e5fb045ec3d57b2cda0f6c36d4e2376db6b5c7fae40 extends Twig_Template
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
        $__internal_bff3f95d4a945c3985335341f48c207337411bc21d24f82d0e25720d9be08654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bff3f95d4a945c3985335341f48c207337411bc21d24f82d0e25720d9be08654->enter($__internal_bff3f95d4a945c3985335341f48c207337411bc21d24f82d0e25720d9be08654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_e4f4151eaedae93762a2d5fa9ec09aecb0f7db4917c5d688544c9e2dd6840cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f4151eaedae93762a2d5fa9ec09aecb0f7db4917c5d688544c9e2dd6840cfb->enter($__internal_e4f4151eaedae93762a2d5fa9ec09aecb0f7db4917c5d688544c9e2dd6840cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_bff3f95d4a945c3985335341f48c207337411bc21d24f82d0e25720d9be08654->leave($__internal_bff3f95d4a945c3985335341f48c207337411bc21d24f82d0e25720d9be08654_prof);

        
        $__internal_e4f4151eaedae93762a2d5fa9ec09aecb0f7db4917c5d688544c9e2dd6840cfb->leave($__internal_e4f4151eaedae93762a2d5fa9ec09aecb0f7db4917c5d688544c9e2dd6840cfb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
