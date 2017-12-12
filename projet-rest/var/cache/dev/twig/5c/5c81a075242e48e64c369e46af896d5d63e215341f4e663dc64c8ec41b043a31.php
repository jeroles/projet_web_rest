<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a3aa85ae89eb5441ade27706bab46055c6faeb84faaa53dad176afee5b8200d0 extends Twig_Template
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
        $__internal_46ffc1bc89633442ecc827d74508e8cef3c6475142b5e3938fcb69748000dfee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46ffc1bc89633442ecc827d74508e8cef3c6475142b5e3938fcb69748000dfee->enter($__internal_46ffc1bc89633442ecc827d74508e8cef3c6475142b5e3938fcb69748000dfee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_7420e96581f7eb735a4bc91406ed94c7dbef22256bd861ea303cb4d8b41f4dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7420e96581f7eb735a4bc91406ed94c7dbef22256bd861ea303cb4d8b41f4dc6->enter($__internal_7420e96581f7eb735a4bc91406ed94c7dbef22256bd861ea303cb4d8b41f4dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_46ffc1bc89633442ecc827d74508e8cef3c6475142b5e3938fcb69748000dfee->leave($__internal_46ffc1bc89633442ecc827d74508e8cef3c6475142b5e3938fcb69748000dfee_prof);

        
        $__internal_7420e96581f7eb735a4bc91406ed94c7dbef22256bd861ea303cb4d8b41f4dc6->leave($__internal_7420e96581f7eb735a4bc91406ed94c7dbef22256bd861ea303cb4d8b41f4dc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
