<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_c64fbcdd226eff0eb2f75f9a5c4c3a2f723d992b64848d47b4384593368c90e9 extends Twig_Template
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
        $__internal_28728bd5a1c3c81aa4ddfde3bc094a5f1806702aad6d84114595d4e8b8fe6163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28728bd5a1c3c81aa4ddfde3bc094a5f1806702aad6d84114595d4e8b8fe6163->enter($__internal_28728bd5a1c3c81aa4ddfde3bc094a5f1806702aad6d84114595d4e8b8fe6163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_8dab470b554535ab1d0238176a94126e11301bcf9925dedca2ed633015875dd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dab470b554535ab1d0238176a94126e11301bcf9925dedca2ed633015875dd6->enter($__internal_8dab470b554535ab1d0238176a94126e11301bcf9925dedca2ed633015875dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_28728bd5a1c3c81aa4ddfde3bc094a5f1806702aad6d84114595d4e8b8fe6163->leave($__internal_28728bd5a1c3c81aa4ddfde3bc094a5f1806702aad6d84114595d4e8b8fe6163_prof);

        
        $__internal_8dab470b554535ab1d0238176a94126e11301bcf9925dedca2ed633015875dd6->leave($__internal_8dab470b554535ab1d0238176a94126e11301bcf9925dedca2ed633015875dd6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_start.html.php");
    }
}
