<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_6b5b4f1e09b03d84257ea9e895e26905d993531af3e2f2b845e02c32d4e06f2a extends Twig_Template
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
        $__internal_38fcf79f80c02aa32b3a99f0ba53ad04adba5d7a4bf009c82e56cd9e39634f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38fcf79f80c02aa32b3a99f0ba53ad04adba5d7a4bf009c82e56cd9e39634f62->enter($__internal_38fcf79f80c02aa32b3a99f0ba53ad04adba5d7a4bf009c82e56cd9e39634f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_dbb0a079b91e97e0218b21fffe88d0634e51455c2bfd50a731ff7de21d56de04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb0a079b91e97e0218b21fffe88d0634e51455c2bfd50a731ff7de21d56de04->enter($__internal_dbb0a079b91e97e0218b21fffe88d0634e51455c2bfd50a731ff7de21d56de04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_38fcf79f80c02aa32b3a99f0ba53ad04adba5d7a4bf009c82e56cd9e39634f62->leave($__internal_38fcf79f80c02aa32b3a99f0ba53ad04adba5d7a4bf009c82e56cd9e39634f62_prof);

        
        $__internal_dbb0a079b91e97e0218b21fffe88d0634e51455c2bfd50a731ff7de21d56de04->leave($__internal_dbb0a079b91e97e0218b21fffe88d0634e51455c2bfd50a731ff7de21d56de04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
