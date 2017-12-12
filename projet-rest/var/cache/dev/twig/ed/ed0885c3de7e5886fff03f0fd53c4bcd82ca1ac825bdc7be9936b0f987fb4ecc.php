<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c0a6609567d9ec2b6197eb3584e22b911e713aefa9fc077e8acd28d6246db636 extends Twig_Template
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
        $__internal_1bf2ab7e445489354f97158d378d8b6b0396508edf654156a813721b06bc58f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf2ab7e445489354f97158d378d8b6b0396508edf654156a813721b06bc58f7->enter($__internal_1bf2ab7e445489354f97158d378d8b6b0396508edf654156a813721b06bc58f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_55f06c4dcdbfc06437a69455c1535e31f46b9fd39ca83ae45b8a9083c7430880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f06c4dcdbfc06437a69455c1535e31f46b9fd39ca83ae45b8a9083c7430880->enter($__internal_55f06c4dcdbfc06437a69455c1535e31f46b9fd39ca83ae45b8a9083c7430880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1bf2ab7e445489354f97158d378d8b6b0396508edf654156a813721b06bc58f7->leave($__internal_1bf2ab7e445489354f97158d378d8b6b0396508edf654156a813721b06bc58f7_prof);

        
        $__internal_55f06c4dcdbfc06437a69455c1535e31f46b9fd39ca83ae45b8a9083c7430880->leave($__internal_55f06c4dcdbfc06437a69455c1535e31f46b9fd39ca83ae45b8a9083c7430880_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
