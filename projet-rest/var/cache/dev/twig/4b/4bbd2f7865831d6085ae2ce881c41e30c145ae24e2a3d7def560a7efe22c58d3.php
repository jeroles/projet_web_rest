<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_04d3ad653669c95bdad9417eec9c1a95c0d95ddbb255d63e2f542583501e85b0 extends Twig_Template
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
        $__internal_6b8b638230683d4f9c649d23bf5ba8e118ee10fbc4150c81d7f9bd1b031ff5b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b8b638230683d4f9c649d23bf5ba8e118ee10fbc4150c81d7f9bd1b031ff5b4->enter($__internal_6b8b638230683d4f9c649d23bf5ba8e118ee10fbc4150c81d7f9bd1b031ff5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_b35418b84ca3c5277dbc28d442566d6fbdb5f57948bd84ead7b8ded17f56e7be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35418b84ca3c5277dbc28d442566d6fbdb5f57948bd84ead7b8ded17f56e7be->enter($__internal_b35418b84ca3c5277dbc28d442566d6fbdb5f57948bd84ead7b8ded17f56e7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_6b8b638230683d4f9c649d23bf5ba8e118ee10fbc4150c81d7f9bd1b031ff5b4->leave($__internal_6b8b638230683d4f9c649d23bf5ba8e118ee10fbc4150c81d7f9bd1b031ff5b4_prof);

        
        $__internal_b35418b84ca3c5277dbc28d442566d6fbdb5f57948bd84ead7b8ded17f56e7be->leave($__internal_b35418b84ca3c5277dbc28d442566d6fbdb5f57948bd84ead7b8ded17f56e7be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
