<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_74f86fac355a68e2786bbb4fa8ea659b12a7620dc465a8f3e744ed698b2cf3fe extends Twig_Template
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
        $__internal_80b2223269cc99d085a21887b5e7992f9016597c9a433462d5b02dbebf8e77e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b2223269cc99d085a21887b5e7992f9016597c9a433462d5b02dbebf8e77e4->enter($__internal_80b2223269cc99d085a21887b5e7992f9016597c9a433462d5b02dbebf8e77e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_87eb0dca9982498fd3c4b74bd86d12e4ee93ae120740cb5ce055733e52999786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87eb0dca9982498fd3c4b74bd86d12e4ee93ae120740cb5ce055733e52999786->enter($__internal_87eb0dca9982498fd3c4b74bd86d12e4ee93ae120740cb5ce055733e52999786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_80b2223269cc99d085a21887b5e7992f9016597c9a433462d5b02dbebf8e77e4->leave($__internal_80b2223269cc99d085a21887b5e7992f9016597c9a433462d5b02dbebf8e77e4_prof);

        
        $__internal_87eb0dca9982498fd3c4b74bd86d12e4ee93ae120740cb5ce055733e52999786->leave($__internal_87eb0dca9982498fd3c4b74bd86d12e4ee93ae120740cb5ce055733e52999786_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
