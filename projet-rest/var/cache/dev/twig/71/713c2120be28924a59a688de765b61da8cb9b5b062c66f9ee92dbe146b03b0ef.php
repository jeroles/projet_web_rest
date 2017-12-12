<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9b84b5c3d2af6fa0652fc9bcdc4b75eb9405042793469ee279510e61df603a15 extends Twig_Template
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
        $__internal_6c71872851d8259cfa6af47a408b4246457b247f0f840f54a87f270f33e095cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c71872851d8259cfa6af47a408b4246457b247f0f840f54a87f270f33e095cc->enter($__internal_6c71872851d8259cfa6af47a408b4246457b247f0f840f54a87f270f33e095cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_4771c6aa9f409f24a9550ed3eae576c700bae8e8ee945fb52bdabf5fa4c60252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4771c6aa9f409f24a9550ed3eae576c700bae8e8ee945fb52bdabf5fa4c60252->enter($__internal_4771c6aa9f409f24a9550ed3eae576c700bae8e8ee945fb52bdabf5fa4c60252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6c71872851d8259cfa6af47a408b4246457b247f0f840f54a87f270f33e095cc->leave($__internal_6c71872851d8259cfa6af47a408b4246457b247f0f840f54a87f270f33e095cc_prof);

        
        $__internal_4771c6aa9f409f24a9550ed3eae576c700bae8e8ee945fb52bdabf5fa4c60252->leave($__internal_4771c6aa9f409f24a9550ed3eae576c700bae8e8ee945fb52bdabf5fa4c60252_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
