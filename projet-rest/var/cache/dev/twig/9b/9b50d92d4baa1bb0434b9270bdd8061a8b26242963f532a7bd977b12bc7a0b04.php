<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_7b4beb3136fd1dab92f17e8aebbe3ec8c2e01e6f68a5e6814d67cc00be1cdafb extends Twig_Template
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
        $__internal_ccbf250fcef7892150df21b1e5affc102df7a6760a37df510c1e803f6da72ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccbf250fcef7892150df21b1e5affc102df7a6760a37df510c1e803f6da72ac6->enter($__internal_ccbf250fcef7892150df21b1e5affc102df7a6760a37df510c1e803f6da72ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_b1445f947b33e396b4cb77b4a9bda4963838ce41c018867a32c5aa93e46ccba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1445f947b33e396b4cb77b4a9bda4963838ce41c018867a32c5aa93e46ccba8->enter($__internal_b1445f947b33e396b4cb77b4a9bda4963838ce41c018867a32c5aa93e46ccba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ccbf250fcef7892150df21b1e5affc102df7a6760a37df510c1e803f6da72ac6->leave($__internal_ccbf250fcef7892150df21b1e5affc102df7a6760a37df510c1e803f6da72ac6_prof);

        
        $__internal_b1445f947b33e396b4cb77b4a9bda4963838ce41c018867a32c5aa93e46ccba8->leave($__internal_b1445f947b33e396b4cb77b4a9bda4963838ce41c018867a32c5aa93e46ccba8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
