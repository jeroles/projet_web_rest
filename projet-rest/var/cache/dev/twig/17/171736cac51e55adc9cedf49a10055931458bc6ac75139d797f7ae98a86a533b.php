<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f86db4a2a0567c5785abd9d24e0d978082e5e8dd77c334b8d73993d7dd6a8ea1 extends Twig_Template
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
        $__internal_02787501032a51cd596976a68b0c2b0b4b97d03e6d6257bacdeede605ce7835b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02787501032a51cd596976a68b0c2b0b4b97d03e6d6257bacdeede605ce7835b->enter($__internal_02787501032a51cd596976a68b0c2b0b4b97d03e6d6257bacdeede605ce7835b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_2dd3385219272562a8f56fa86c1a7212ed6258c16ab806f766a22038fac07444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd3385219272562a8f56fa86c1a7212ed6258c16ab806f766a22038fac07444->enter($__internal_2dd3385219272562a8f56fa86c1a7212ed6258c16ab806f766a22038fac07444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_02787501032a51cd596976a68b0c2b0b4b97d03e6d6257bacdeede605ce7835b->leave($__internal_02787501032a51cd596976a68b0c2b0b4b97d03e6d6257bacdeede605ce7835b_prof);

        
        $__internal_2dd3385219272562a8f56fa86c1a7212ed6258c16ab806f766a22038fac07444->leave($__internal_2dd3385219272562a8f56fa86c1a7212ed6258c16ab806f766a22038fac07444_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
