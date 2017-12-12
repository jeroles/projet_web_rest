<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_48ad630b7f6ccfc48b26fc5c1129eccfa769987a742f7a2a1cb8c20593c7ea9f extends Twig_Template
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
        $__internal_295929873b4434a152640dc5d9c250f2b416eb188b6621730508a068af5bface = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_295929873b4434a152640dc5d9c250f2b416eb188b6621730508a068af5bface->enter($__internal_295929873b4434a152640dc5d9c250f2b416eb188b6621730508a068af5bface_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_dc9877aeafc083206c0e87abbd674e8f2e6683c2085b493d27b40310d402a7ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9877aeafc083206c0e87abbd674e8f2e6683c2085b493d27b40310d402a7ee->enter($__internal_dc9877aeafc083206c0e87abbd674e8f2e6683c2085b493d27b40310d402a7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_295929873b4434a152640dc5d9c250f2b416eb188b6621730508a068af5bface->leave($__internal_295929873b4434a152640dc5d9c250f2b416eb188b6621730508a068af5bface_prof);

        
        $__internal_dc9877aeafc083206c0e87abbd674e8f2e6683c2085b493d27b40310d402a7ee->leave($__internal_dc9877aeafc083206c0e87abbd674e8f2e6683c2085b493d27b40310d402a7ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form.html.php");
    }
}
