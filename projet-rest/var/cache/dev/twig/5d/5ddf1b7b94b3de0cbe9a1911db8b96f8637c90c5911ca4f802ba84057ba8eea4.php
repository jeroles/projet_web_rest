<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_01e70661e47e3fec21a742c810f656016aab54bff5b42dbdf91a23bb62866c71 extends Twig_Template
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
        $__internal_cfc5df99105e82886aab31d63252c73e4e5dd97cb0c319662f0974904b66fb73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc5df99105e82886aab31d63252c73e4e5dd97cb0c319662f0974904b66fb73->enter($__internal_cfc5df99105e82886aab31d63252c73e4e5dd97cb0c319662f0974904b66fb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_3a43fcd7d4489c0f6d87bf66fd8850259f59366909a412c38c91286379973a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a43fcd7d4489c0f6d87bf66fd8850259f59366909a412c38c91286379973a4f->enter($__internal_3a43fcd7d4489c0f6d87bf66fd8850259f59366909a412c38c91286379973a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cfc5df99105e82886aab31d63252c73e4e5dd97cb0c319662f0974904b66fb73->leave($__internal_cfc5df99105e82886aab31d63252c73e4e5dd97cb0c319662f0974904b66fb73_prof);

        
        $__internal_3a43fcd7d4489c0f6d87bf66fd8850259f59366909a412c38c91286379973a4f->leave($__internal_3a43fcd7d4489c0f6d87bf66fd8850259f59366909a412c38c91286379973a4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
