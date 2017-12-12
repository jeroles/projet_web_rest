<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_22e2ef2e217bd795dba1e88a800190f39efcb986cd49f08502fb6ce877781b96 extends Twig_Template
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
        $__internal_169b29950a00133e8f1854d332a2ca173db5b96199d8c944e2f9229d4d2bae3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_169b29950a00133e8f1854d332a2ca173db5b96199d8c944e2f9229d4d2bae3b->enter($__internal_169b29950a00133e8f1854d332a2ca173db5b96199d8c944e2f9229d4d2bae3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_c4ce7556a6a172213a07bb12465e991f4bebbfd91233d1a7315faab0b185a454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ce7556a6a172213a07bb12465e991f4bebbfd91233d1a7315faab0b185a454->enter($__internal_c4ce7556a6a172213a07bb12465e991f4bebbfd91233d1a7315faab0b185a454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_169b29950a00133e8f1854d332a2ca173db5b96199d8c944e2f9229d4d2bae3b->leave($__internal_169b29950a00133e8f1854d332a2ca173db5b96199d8c944e2f9229d4d2bae3b_prof);

        
        $__internal_c4ce7556a6a172213a07bb12465e991f4bebbfd91233d1a7315faab0b185a454->leave($__internal_c4ce7556a6a172213a07bb12465e991f4bebbfd91233d1a7315faab0b185a454_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
