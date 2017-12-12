<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_3683dcca9da9761073d53fdd8c4f4f991748a65ee7dd1d2b7da2f90d4bef0801 extends Twig_Template
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
        $__internal_bbba06e444d0f6ecbe5187ae4591e4911ecf488b636ce1fdfaf122fdcb34081f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbba06e444d0f6ecbe5187ae4591e4911ecf488b636ce1fdfaf122fdcb34081f->enter($__internal_bbba06e444d0f6ecbe5187ae4591e4911ecf488b636ce1fdfaf122fdcb34081f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_57b9d6e53365bcfbdde184a867b59d8f41022f7c2b19585bffc994525e1394e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b9d6e53365bcfbdde184a867b59d8f41022f7c2b19585bffc994525e1394e7->enter($__internal_57b9d6e53365bcfbdde184a867b59d8f41022f7c2b19585bffc994525e1394e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_bbba06e444d0f6ecbe5187ae4591e4911ecf488b636ce1fdfaf122fdcb34081f->leave($__internal_bbba06e444d0f6ecbe5187ae4591e4911ecf488b636ce1fdfaf122fdcb34081f_prof);

        
        $__internal_57b9d6e53365bcfbdde184a867b59d8f41022f7c2b19585bffc994525e1394e7->leave($__internal_57b9d6e53365bcfbdde184a867b59d8f41022f7c2b19585bffc994525e1394e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
