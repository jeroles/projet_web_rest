<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_37f3572d5c87d18d49e05868ae2035ca32eb7b7ba60597ef850742736ef0ca90 extends Twig_Template
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
        $__internal_9e718a4f2e9bc0c383de2a19f803e5633256989e4bc17c183bc64b2cdec758a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e718a4f2e9bc0c383de2a19f803e5633256989e4bc17c183bc64b2cdec758a4->enter($__internal_9e718a4f2e9bc0c383de2a19f803e5633256989e4bc17c183bc64b2cdec758a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_3e6f726611c246110dc60e0d1014068f1c446f058856d24c005ffb9d38f82561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6f726611c246110dc60e0d1014068f1c446f058856d24c005ffb9d38f82561->enter($__internal_3e6f726611c246110dc60e0d1014068f1c446f058856d24c005ffb9d38f82561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_9e718a4f2e9bc0c383de2a19f803e5633256989e4bc17c183bc64b2cdec758a4->leave($__internal_9e718a4f2e9bc0c383de2a19f803e5633256989e4bc17c183bc64b2cdec758a4_prof);

        
        $__internal_3e6f726611c246110dc60e0d1014068f1c446f058856d24c005ffb9d38f82561->leave($__internal_3e6f726611c246110dc60e0d1014068f1c446f058856d24c005ffb9d38f82561_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
