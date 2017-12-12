<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_b37669b5a25891cdc1a7a6f25fe4a7314a6a00e53e089c43efc487e5a97f6f89 extends Twig_Template
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
        $__internal_c7745cb2bfc7a7dbe3f0f8d38d838b83ffcacf117c3c9ed65b8f8d980d2f7cc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7745cb2bfc7a7dbe3f0f8d38d838b83ffcacf117c3c9ed65b8f8d980d2f7cc1->enter($__internal_c7745cb2bfc7a7dbe3f0f8d38d838b83ffcacf117c3c9ed65b8f8d980d2f7cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_98f27160205805bd3ad34bf106b6d90ccdd1c2b04a2bc9d76cae9383177a78fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98f27160205805bd3ad34bf106b6d90ccdd1c2b04a2bc9d76cae9383177a78fc->enter($__internal_98f27160205805bd3ad34bf106b6d90ccdd1c2b04a2bc9d76cae9383177a78fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_c7745cb2bfc7a7dbe3f0f8d38d838b83ffcacf117c3c9ed65b8f8d980d2f7cc1->leave($__internal_c7745cb2bfc7a7dbe3f0f8d38d838b83ffcacf117c3c9ed65b8f8d980d2f7cc1_prof);

        
        $__internal_98f27160205805bd3ad34bf106b6d90ccdd1c2b04a2bc9d76cae9383177a78fc->leave($__internal_98f27160205805bd3ad34bf106b6d90ccdd1c2b04a2bc9d76cae9383177a78fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
