<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_1f690808c55d091996d8f690da8ffa30bbd2b9f17f224520c6e61acf18f0ba55 extends Twig_Template
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
        $__internal_55c2c77ce167fe569ad840bcbb3720522c91593358616175810908158cc7d998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55c2c77ce167fe569ad840bcbb3720522c91593358616175810908158cc7d998->enter($__internal_55c2c77ce167fe569ad840bcbb3720522c91593358616175810908158cc7d998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d4e2548a82a0f1b35a6a5635b5008fa34b69c903af9c0357b91674709ed70428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e2548a82a0f1b35a6a5635b5008fa34b69c903af9c0357b91674709ed70428->enter($__internal_d4e2548a82a0f1b35a6a5635b5008fa34b69c903af9c0357b91674709ed70428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_55c2c77ce167fe569ad840bcbb3720522c91593358616175810908158cc7d998->leave($__internal_55c2c77ce167fe569ad840bcbb3720522c91593358616175810908158cc7d998_prof);

        
        $__internal_d4e2548a82a0f1b35a6a5635b5008fa34b69c903af9c0357b91674709ed70428->leave($__internal_d4e2548a82a0f1b35a6a5635b5008fa34b69c903af9c0357b91674709ed70428_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
