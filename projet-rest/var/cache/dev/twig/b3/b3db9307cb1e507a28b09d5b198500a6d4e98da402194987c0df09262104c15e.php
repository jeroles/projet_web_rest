<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_55b8e2385c4f1549d2659052e9d3f9233f44a39613022cfbf650a6b55af533d5 extends Twig_Template
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
        $__internal_c67686f2e4110d385ce62eff4350e2792408a51b2eaab5315bd29d9200553fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c67686f2e4110d385ce62eff4350e2792408a51b2eaab5315bd29d9200553fd3->enter($__internal_c67686f2e4110d385ce62eff4350e2792408a51b2eaab5315bd29d9200553fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_5bf54d502b8c57a3934ac30e78042a10cee5236f2abf533b0347df7e8517ea83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf54d502b8c57a3934ac30e78042a10cee5236f2abf533b0347df7e8517ea83->enter($__internal_5bf54d502b8c57a3934ac30e78042a10cee5236f2abf533b0347df7e8517ea83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_c67686f2e4110d385ce62eff4350e2792408a51b2eaab5315bd29d9200553fd3->leave($__internal_c67686f2e4110d385ce62eff4350e2792408a51b2eaab5315bd29d9200553fd3_prof);

        
        $__internal_5bf54d502b8c57a3934ac30e78042a10cee5236f2abf533b0347df7e8517ea83->leave($__internal_5bf54d502b8c57a3934ac30e78042a10cee5236f2abf533b0347df7e8517ea83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
