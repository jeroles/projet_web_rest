<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_10a1a99c0d3afed82a431bdc185dec43c1e4e7480ed9b81cee792c3d5ca6391b extends Twig_Template
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
        $__internal_80484f29e32eb189f26fc1d57d4bbaf26ec5ea3e2a108a7bbbcbde23abe72a00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80484f29e32eb189f26fc1d57d4bbaf26ec5ea3e2a108a7bbbcbde23abe72a00->enter($__internal_80484f29e32eb189f26fc1d57d4bbaf26ec5ea3e2a108a7bbbcbde23abe72a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_f28d13a6c9e987b0bcfabb78e1869d377cd933214e5f495cfc571ab342d727e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28d13a6c9e987b0bcfabb78e1869d377cd933214e5f495cfc571ab342d727e6->enter($__internal_f28d13a6c9e987b0bcfabb78e1869d377cd933214e5f495cfc571ab342d727e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_80484f29e32eb189f26fc1d57d4bbaf26ec5ea3e2a108a7bbbcbde23abe72a00->leave($__internal_80484f29e32eb189f26fc1d57d4bbaf26ec5ea3e2a108a7bbbcbde23abe72a00_prof);

        
        $__internal_f28d13a6c9e987b0bcfabb78e1869d377cd933214e5f495cfc571ab342d727e6->leave($__internal_f28d13a6c9e987b0bcfabb78e1869d377cd933214e5f495cfc571ab342d727e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
