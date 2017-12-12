<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_25974304fce8a97dc5ec69dbef5f8490685b844539cbf4ba22784f4a06eba9ad extends Twig_Template
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
        $__internal_1fcd48f9913476c06924471c51ae39977e5786052c7bfcc75ae20ea0cb9926bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fcd48f9913476c06924471c51ae39977e5786052c7bfcc75ae20ea0cb9926bb->enter($__internal_1fcd48f9913476c06924471c51ae39977e5786052c7bfcc75ae20ea0cb9926bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_91fca04d9d5ecf8706cb66b9d462903c11ac0638200c6eaacc1a9e689f9cfaa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91fca04d9d5ecf8706cb66b9d462903c11ac0638200c6eaacc1a9e689f9cfaa4->enter($__internal_91fca04d9d5ecf8706cb66b9d462903c11ac0638200c6eaacc1a9e689f9cfaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_1fcd48f9913476c06924471c51ae39977e5786052c7bfcc75ae20ea0cb9926bb->leave($__internal_1fcd48f9913476c06924471c51ae39977e5786052c7bfcc75ae20ea0cb9926bb_prof);

        
        $__internal_91fca04d9d5ecf8706cb66b9d462903c11ac0638200c6eaacc1a9e689f9cfaa4->leave($__internal_91fca04d9d5ecf8706cb66b9d462903c11ac0638200c6eaacc1a9e689f9cfaa4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
