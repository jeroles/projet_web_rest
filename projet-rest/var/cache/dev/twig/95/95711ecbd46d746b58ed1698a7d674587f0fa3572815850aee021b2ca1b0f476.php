<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_27be688aaf182c26ecad3786b582b1fce96157234ce8d2bae4bbdd9cd1707636 extends Twig_Template
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
        $__internal_227e413a350ed384433e10e31d611f4eafd42f89b89894ab73189fb20ddc98c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_227e413a350ed384433e10e31d611f4eafd42f89b89894ab73189fb20ddc98c9->enter($__internal_227e413a350ed384433e10e31d611f4eafd42f89b89894ab73189fb20ddc98c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b5c45e1ed6f2a7647a7c42cf08f9abde6bc7f236c5095c0feebc7ccb7ee9539a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c45e1ed6f2a7647a7c42cf08f9abde6bc7f236c5095c0feebc7ccb7ee9539a->enter($__internal_b5c45e1ed6f2a7647a7c42cf08f9abde6bc7f236c5095c0feebc7ccb7ee9539a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_227e413a350ed384433e10e31d611f4eafd42f89b89894ab73189fb20ddc98c9->leave($__internal_227e413a350ed384433e10e31d611f4eafd42f89b89894ab73189fb20ddc98c9_prof);

        
        $__internal_b5c45e1ed6f2a7647a7c42cf08f9abde6bc7f236c5095c0feebc7ccb7ee9539a->leave($__internal_b5c45e1ed6f2a7647a7c42cf08f9abde6bc7f236c5095c0feebc7ccb7ee9539a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
