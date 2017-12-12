<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_f3c7b3d10e7f1e90dd0394bf0e20b6b01c76d809bf2d98334ce57d2470489f68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f256ef0d212604ae928a626b38fe9ceb058142641953e1f0eae1ab2569572a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f256ef0d212604ae928a626b38fe9ceb058142641953e1f0eae1ab2569572a2->enter($__internal_5f256ef0d212604ae928a626b38fe9ceb058142641953e1f0eae1ab2569572a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ed9ee20ca88c39e6e598e4dea01f07427862cb964c86d4456b0cc74bb5915154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed9ee20ca88c39e6e598e4dea01f07427862cb964c86d4456b0cc74bb5915154->enter($__internal_ed9ee20ca88c39e6e598e4dea01f07427862cb964c86d4456b0cc74bb5915154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_5f256ef0d212604ae928a626b38fe9ceb058142641953e1f0eae1ab2569572a2->leave($__internal_5f256ef0d212604ae928a626b38fe9ceb058142641953e1f0eae1ab2569572a2_prof);

        
        $__internal_ed9ee20ca88c39e6e598e4dea01f07427862cb964c86d4456b0cc74bb5915154->leave($__internal_ed9ee20ca88c39e6e598e4dea01f07427862cb964c86d4456b0cc74bb5915154_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bf5b8f8267989c8e89af8abb0ed9f275c26d3630e1a69b97de14fa9a7746077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf5b8f8267989c8e89af8abb0ed9f275c26d3630e1a69b97de14fa9a7746077->enter($__internal_8bf5b8f8267989c8e89af8abb0ed9f275c26d3630e1a69b97de14fa9a7746077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2874c93cb5a9f4b3f188abf673b67e62a6e0891f209e44bed58e8f8e561f18ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2874c93cb5a9f4b3f188abf673b67e62a6e0891f209e44bed58e8f8e561f18ec->enter($__internal_2874c93cb5a9f4b3f188abf673b67e62a6e0891f209e44bed58e8f8e561f18ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2874c93cb5a9f4b3f188abf673b67e62a6e0891f209e44bed58e8f8e561f18ec->leave($__internal_2874c93cb5a9f4b3f188abf673b67e62a6e0891f209e44bed58e8f8e561f18ec_prof);

        
        $__internal_8bf5b8f8267989c8e89af8abb0ed9f275c26d3630e1a69b97de14fa9a7746077->leave($__internal_8bf5b8f8267989c8e89af8abb0ed9f275c26d3630e1a69b97de14fa9a7746077_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1f17cdf7f42445f9c023f74f5fad65a662a5ebb8b29155cf27733f966c45f782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f17cdf7f42445f9c023f74f5fad65a662a5ebb8b29155cf27733f966c45f782->enter($__internal_1f17cdf7f42445f9c023f74f5fad65a662a5ebb8b29155cf27733f966c45f782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3ec92aa565b078d640494a5b91a471e51a90c83e477808b624172e2021ade6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec92aa565b078d640494a5b91a471e51a90c83e477808b624172e2021ade6e5->enter($__internal_3ec92aa565b078d640494a5b91a471e51a90c83e477808b624172e2021ade6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3ec92aa565b078d640494a5b91a471e51a90c83e477808b624172e2021ade6e5->leave($__internal_3ec92aa565b078d640494a5b91a471e51a90c83e477808b624172e2021ade6e5_prof);

        
        $__internal_1f17cdf7f42445f9c023f74f5fad65a662a5ebb8b29155cf27733f966c45f782->leave($__internal_1f17cdf7f42445f9c023f74f5fad65a662a5ebb8b29155cf27733f966c45f782_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef25b04cc28fedd0c4d317556bf98003dfe476a0bda8a399940a037afcbf31f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef25b04cc28fedd0c4d317556bf98003dfe476a0bda8a399940a037afcbf31f9->enter($__internal_ef25b04cc28fedd0c4d317556bf98003dfe476a0bda8a399940a037afcbf31f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e884c29aee9a8b414ff1280689319d45d8c6f2fce6d715809b26bedadedebf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e884c29aee9a8b414ff1280689319d45d8c6f2fce6d715809b26bedadedebf0->enter($__internal_0e884c29aee9a8b414ff1280689319d45d8c6f2fce6d715809b26bedadedebf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0e884c29aee9a8b414ff1280689319d45d8c6f2fce6d715809b26bedadedebf0->leave($__internal_0e884c29aee9a8b414ff1280689319d45d8c6f2fce6d715809b26bedadedebf0_prof);

        
        $__internal_ef25b04cc28fedd0c4d317556bf98003dfe476a0bda8a399940a037afcbf31f9->leave($__internal_ef25b04cc28fedd0c4d317556bf98003dfe476a0bda8a399940a037afcbf31f9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\projet_web_rest\\projet-rest\\vendor\\symfony\\twig-bundle\\Resources\\views\\layout.html.twig");
    }
}
