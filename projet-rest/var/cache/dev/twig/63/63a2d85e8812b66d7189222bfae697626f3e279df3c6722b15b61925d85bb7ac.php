<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_944fff7bd9ee8200400e184a71e31e97c5a1cf39acb966c99bae9a7463218231 extends Twig_Template
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
        $__internal_6a5e2482e059dafacc9a622efdd2c1ce910cb50c9238a254b874b43d30c2531a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a5e2482e059dafacc9a622efdd2c1ce910cb50c9238a254b874b43d30c2531a->enter($__internal_6a5e2482e059dafacc9a622efdd2c1ce910cb50c9238a254b874b43d30c2531a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_cfcc6a945e046c28e70986e13c7f51e3db25ce0791fc4730c84bf58386cfef1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfcc6a945e046c28e70986e13c7f51e3db25ce0791fc4730c84bf58386cfef1f->enter($__internal_cfcc6a945e046c28e70986e13c7f51e3db25ce0791fc4730c84bf58386cfef1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_6a5e2482e059dafacc9a622efdd2c1ce910cb50c9238a254b874b43d30c2531a->leave($__internal_6a5e2482e059dafacc9a622efdd2c1ce910cb50c9238a254b874b43d30c2531a_prof);

        
        $__internal_cfcc6a945e046c28e70986e13c7f51e3db25ce0791fc4730c84bf58386cfef1f->leave($__internal_cfcc6a945e046c28e70986e13c7f51e3db25ce0791fc4730c84bf58386cfef1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
