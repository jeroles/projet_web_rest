<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_6c270de39012cc1b56cb5aca606e1d64bd22d390e3e9941a4b706fdfc663fecc extends Twig_Template
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
        $__internal_5e469fc68dec30aa8e7b871cd1ca8b691c4471ab251fc305dfdaf20f2cda76bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e469fc68dec30aa8e7b871cd1ca8b691c4471ab251fc305dfdaf20f2cda76bc->enter($__internal_5e469fc68dec30aa8e7b871cd1ca8b691c4471ab251fc305dfdaf20f2cda76bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_90665db08b383aca8b69ecf8aa4474f7cc88b6b179f171b1172de8acb7626d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90665db08b383aca8b69ecf8aa4474f7cc88b6b179f171b1172de8acb7626d9a->enter($__internal_90665db08b383aca8b69ecf8aa4474f7cc88b6b179f171b1172de8acb7626d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5e469fc68dec30aa8e7b871cd1ca8b691c4471ab251fc305dfdaf20f2cda76bc->leave($__internal_5e469fc68dec30aa8e7b871cd1ca8b691c4471ab251fc305dfdaf20f2cda76bc_prof);

        
        $__internal_90665db08b383aca8b69ecf8aa4474f7cc88b6b179f171b1172de8acb7626d9a->leave($__internal_90665db08b383aca8b69ecf8aa4474f7cc88b6b179f171b1172de8acb7626d9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
