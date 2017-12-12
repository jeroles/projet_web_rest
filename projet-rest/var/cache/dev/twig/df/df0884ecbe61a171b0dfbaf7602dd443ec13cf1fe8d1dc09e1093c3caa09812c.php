<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_a4af5cb99f835da74101be87effecf604ccfc94c815ad076161bf61a21357672 extends Twig_Template
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
        $__internal_6903eade50113be37615d6f3f473a59ab3f51dbbbf18412f10d07f061c07fc55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6903eade50113be37615d6f3f473a59ab3f51dbbbf18412f10d07f061c07fc55->enter($__internal_6903eade50113be37615d6f3f473a59ab3f51dbbbf18412f10d07f061c07fc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_153e12c643303419c2c301f7f2c565f119c273c85f66c24dbe396f13f6b6046b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_153e12c643303419c2c301f7f2c565f119c273c85f66c24dbe396f13f6b6046b->enter($__internal_153e12c643303419c2c301f7f2c565f119c273c85f66c24dbe396f13f6b6046b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6903eade50113be37615d6f3f473a59ab3f51dbbbf18412f10d07f061c07fc55->leave($__internal_6903eade50113be37615d6f3f473a59ab3f51dbbbf18412f10d07f061c07fc55_prof);

        
        $__internal_153e12c643303419c2c301f7f2c565f119c273c85f66c24dbe396f13f6b6046b->leave($__internal_153e12c643303419c2c301f7f2c565f119c273c85f66c24dbe396f13f6b6046b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
