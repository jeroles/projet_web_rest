<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_7e27b3746336868e3adede88cd81e8ae0a13cbf8e461678fcc2342d9bc80b74e extends Twig_Template
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
        $__internal_4afa81e23996ff8e3429eafdb9cd8222582e978c0869eb4d5cf1c0343ad74fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4afa81e23996ff8e3429eafdb9cd8222582e978c0869eb4d5cf1c0343ad74fb6->enter($__internal_4afa81e23996ff8e3429eafdb9cd8222582e978c0869eb4d5cf1c0343ad74fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_e341a1c2cefba77dd96a725779dd21a9c3bf585417d0cec0f25a7d3e3356fc5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e341a1c2cefba77dd96a725779dd21a9c3bf585417d0cec0f25a7d3e3356fc5f->enter($__internal_e341a1c2cefba77dd96a725779dd21a9c3bf585417d0cec0f25a7d3e3356fc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_4afa81e23996ff8e3429eafdb9cd8222582e978c0869eb4d5cf1c0343ad74fb6->leave($__internal_4afa81e23996ff8e3429eafdb9cd8222582e978c0869eb4d5cf1c0343ad74fb6_prof);

        
        $__internal_e341a1c2cefba77dd96a725779dd21a9c3bf585417d0cec0f25a7d3e3356fc5f->leave($__internal_e341a1c2cefba77dd96a725779dd21a9c3bf585417d0cec0f25a7d3e3356fc5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
