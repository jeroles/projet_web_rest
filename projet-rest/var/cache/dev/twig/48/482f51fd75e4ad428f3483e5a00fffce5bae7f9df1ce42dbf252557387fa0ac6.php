<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_7a785225dfc57ae66b45723bd634debea2fc35b219704799e7279b3e09dcea36 extends Twig_Template
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
        $__internal_afb1e1c07324298e9c52eb8dba59149e91690019ed5ff67e2cc8d0c91d34be85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afb1e1c07324298e9c52eb8dba59149e91690019ed5ff67e2cc8d0c91d34be85->enter($__internal_afb1e1c07324298e9c52eb8dba59149e91690019ed5ff67e2cc8d0c91d34be85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_62182d7a5d079f4e8abf964b18c13ae5775d1d92a629c299f64e589f7beec6b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62182d7a5d079f4e8abf964b18c13ae5775d1d92a629c299f64e589f7beec6b9->enter($__internal_62182d7a5d079f4e8abf964b18c13ae5775d1d92a629c299f64e589f7beec6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_afb1e1c07324298e9c52eb8dba59149e91690019ed5ff67e2cc8d0c91d34be85->leave($__internal_afb1e1c07324298e9c52eb8dba59149e91690019ed5ff67e2cc8d0c91d34be85_prof);

        
        $__internal_62182d7a5d079f4e8abf964b18c13ae5775d1d92a629c299f64e589f7beec6b9->leave($__internal_62182d7a5d079f4e8abf964b18c13ae5775d1d92a629c299f64e589f7beec6b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
