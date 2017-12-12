<?php

/* base.html.twig */
class __TwigTemplate_f416c7bce7ff259de3cb2d417dcc70ef4858d4c5f3f5063615453367dbdcf304 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a32500c45f4a435f6a6a299e82c2cbf3bd85cd5daf9c4e605d1a7be92d0b74c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a32500c45f4a435f6a6a299e82c2cbf3bd85cd5daf9c4e605d1a7be92d0b74c->enter($__internal_2a32500c45f4a435f6a6a299e82c2cbf3bd85cd5daf9c4e605d1a7be92d0b74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_38061e8d655251cfe67b15279d99d1db77f7f4a90553d091c644fdf5c8964e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38061e8d655251cfe67b15279d99d1db77f7f4a90553d091c644fdf5c8964e6c->enter($__internal_38061e8d655251cfe67b15279d99d1db77f7f4a90553d091c644fdf5c8964e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_2a32500c45f4a435f6a6a299e82c2cbf3bd85cd5daf9c4e605d1a7be92d0b74c->leave($__internal_2a32500c45f4a435f6a6a299e82c2cbf3bd85cd5daf9c4e605d1a7be92d0b74c_prof);

        
        $__internal_38061e8d655251cfe67b15279d99d1db77f7f4a90553d091c644fdf5c8964e6c->leave($__internal_38061e8d655251cfe67b15279d99d1db77f7f4a90553d091c644fdf5c8964e6c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_811d09a50c19a69acda433b4207ce477b2dad9973953bd260c46b621468ce9ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_811d09a50c19a69acda433b4207ce477b2dad9973953bd260c46b621468ce9ac->enter($__internal_811d09a50c19a69acda433b4207ce477b2dad9973953bd260c46b621468ce9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3197d5e1f307ce83bfba952655ceb92d72110d7874a9161e356476e20a57c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3197d5e1f307ce83bfba952655ceb92d72110d7874a9161e356476e20a57c1f->enter($__internal_a3197d5e1f307ce83bfba952655ceb92d72110d7874a9161e356476e20a57c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a3197d5e1f307ce83bfba952655ceb92d72110d7874a9161e356476e20a57c1f->leave($__internal_a3197d5e1f307ce83bfba952655ceb92d72110d7874a9161e356476e20a57c1f_prof);

        
        $__internal_811d09a50c19a69acda433b4207ce477b2dad9973953bd260c46b621468ce9ac->leave($__internal_811d09a50c19a69acda433b4207ce477b2dad9973953bd260c46b621468ce9ac_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_857184a8b58cf76538fc711b2dbc935606b1415406cb9afba275fe4eda822537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_857184a8b58cf76538fc711b2dbc935606b1415406cb9afba275fe4eda822537->enter($__internal_857184a8b58cf76538fc711b2dbc935606b1415406cb9afba275fe4eda822537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c55510c3cd46f76151e14faf1ae18d2238c68a091f6309e922c59d17e3739c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55510c3cd46f76151e14faf1ae18d2238c68a091f6309e922c59d17e3739c70->enter($__internal_c55510c3cd46f76151e14faf1ae18d2238c68a091f6309e922c59d17e3739c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c55510c3cd46f76151e14faf1ae18d2238c68a091f6309e922c59d17e3739c70->leave($__internal_c55510c3cd46f76151e14faf1ae18d2238c68a091f6309e922c59d17e3739c70_prof);

        
        $__internal_857184a8b58cf76538fc711b2dbc935606b1415406cb9afba275fe4eda822537->leave($__internal_857184a8b58cf76538fc711b2dbc935606b1415406cb9afba275fe4eda822537_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5ceb97a57096475a73329be5eb068cc2c8db3caccd49828a29e42aee77d5436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ceb97a57096475a73329be5eb068cc2c8db3caccd49828a29e42aee77d5436->enter($__internal_f5ceb97a57096475a73329be5eb068cc2c8db3caccd49828a29e42aee77d5436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db13e6e0eb348837eed09d6979d1bd07f50ba30f5eeedd8ee2dafdd7aa4580b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db13e6e0eb348837eed09d6979d1bd07f50ba30f5eeedd8ee2dafdd7aa4580b5->enter($__internal_db13e6e0eb348837eed09d6979d1bd07f50ba30f5eeedd8ee2dafdd7aa4580b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_db13e6e0eb348837eed09d6979d1bd07f50ba30f5eeedd8ee2dafdd7aa4580b5->leave($__internal_db13e6e0eb348837eed09d6979d1bd07f50ba30f5eeedd8ee2dafdd7aa4580b5_prof);

        
        $__internal_f5ceb97a57096475a73329be5eb068cc2c8db3caccd49828a29e42aee77d5436->leave($__internal_f5ceb97a57096475a73329be5eb068cc2c8db3caccd49828a29e42aee77d5436_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_255d72e5ce3ab1edf5a13135c1152fb81af5d62b3c41fa0b406391dbcd17ac26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_255d72e5ce3ab1edf5a13135c1152fb81af5d62b3c41fa0b406391dbcd17ac26->enter($__internal_255d72e5ce3ab1edf5a13135c1152fb81af5d62b3c41fa0b406391dbcd17ac26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6ef89c836c12cf5afa5079c371c11ffe31ab9d58e57ff1d21b07a281e140285e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef89c836c12cf5afa5079c371c11ffe31ab9d58e57ff1d21b07a281e140285e->enter($__internal_6ef89c836c12cf5afa5079c371c11ffe31ab9d58e57ff1d21b07a281e140285e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6ef89c836c12cf5afa5079c371c11ffe31ab9d58e57ff1d21b07a281e140285e->leave($__internal_6ef89c836c12cf5afa5079c371c11ffe31ab9d58e57ff1d21b07a281e140285e_prof);

        
        $__internal_255d72e5ce3ab1edf5a13135c1152fb81af5d62b3c41fa0b406391dbcd17ac26->leave($__internal_255d72e5ce3ab1edf5a13135c1152fb81af5d62b3c41fa0b406391dbcd17ac26_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 10,  97 => 9,  80 => 6,  62 => 5,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\templates\\base.html.twig");
    }
}
