<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_5ef194360ee2483008d78d82e8ff92821ea38870aca723c5bd0830e8b0ac2813 extends Twig_Template
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
        $__internal_1c67e443c789a7b99b9402ba706f1b9dba7a3c587925e77c18c8ec97cb29db89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c67e443c789a7b99b9402ba706f1b9dba7a3c587925e77c18c8ec97cb29db89->enter($__internal_1c67e443c789a7b99b9402ba706f1b9dba7a3c587925e77c18c8ec97cb29db89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_cfa4aa343df85715ade23d4dfb118aa2390373ead8bce67980c8cb92fe59751c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa4aa343df85715ade23d4dfb118aa2390373ead8bce67980c8cb92fe59751c->enter($__internal_cfa4aa343df85715ade23d4dfb118aa2390373ead8bce67980c8cb92fe59751c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1c67e443c789a7b99b9402ba706f1b9dba7a3c587925e77c18c8ec97cb29db89->leave($__internal_1c67e443c789a7b99b9402ba706f1b9dba7a3c587925e77c18c8ec97cb29db89_prof);

        
        $__internal_cfa4aa343df85715ade23d4dfb118aa2390373ead8bce67980c8cb92fe59751c->leave($__internal_cfa4aa343df85715ade23d4dfb118aa2390373ead8bce67980c8cb92fe59751c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
