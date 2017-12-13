<?php

/* base.html.twig */
class __TwigTemplate_46fceb496a05a4943baaa2669aae41390a07d1559436269cfcd41b3fbe2138b3 extends Twig_Template
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
        $__internal_b087ee90a7b62d683c3c3f3ad008eb607e93c542aee3ed1846bcfeefa2f4183c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b087ee90a7b62d683c3c3f3ad008eb607e93c542aee3ed1846bcfeefa2f4183c->enter($__internal_b087ee90a7b62d683c3c3f3ad008eb607e93c542aee3ed1846bcfeefa2f4183c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b087ee90a7b62d683c3c3f3ad008eb607e93c542aee3ed1846bcfeefa2f4183c->leave($__internal_b087ee90a7b62d683c3c3f3ad008eb607e93c542aee3ed1846bcfeefa2f4183c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc437ddab0d7ea2018f3694a52d142a7b9490d353965d99fee00465a2c3bd5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc437ddab0d7ea2018f3694a52d142a7b9490d353965d99fee00465a2c3bd5a5->enter($__internal_cc437ddab0d7ea2018f3694a52d142a7b9490d353965d99fee00465a2c3bd5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cc437ddab0d7ea2018f3694a52d142a7b9490d353965d99fee00465a2c3bd5a5->leave($__internal_cc437ddab0d7ea2018f3694a52d142a7b9490d353965d99fee00465a2c3bd5a5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_184d28d9020eec48585c0e3b93ebe3ecaddc64ec4c39a0b10377cbead4474dee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_184d28d9020eec48585c0e3b93ebe3ecaddc64ec4c39a0b10377cbead4474dee->enter($__internal_184d28d9020eec48585c0e3b93ebe3ecaddc64ec4c39a0b10377cbead4474dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_184d28d9020eec48585c0e3b93ebe3ecaddc64ec4c39a0b10377cbead4474dee->leave($__internal_184d28d9020eec48585c0e3b93ebe3ecaddc64ec4c39a0b10377cbead4474dee_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ff02349b99b05158c4b50c5a44e4c7ddaab15cab0d8ad390432786f3492b687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff02349b99b05158c4b50c5a44e4c7ddaab15cab0d8ad390432786f3492b687->enter($__internal_1ff02349b99b05158c4b50c5a44e4c7ddaab15cab0d8ad390432786f3492b687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1ff02349b99b05158c4b50c5a44e4c7ddaab15cab0d8ad390432786f3492b687->leave($__internal_1ff02349b99b05158c4b50c5a44e4c7ddaab15cab0d8ad390432786f3492b687_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bbd41283a09acde4ca79fbf8b7a9563cf033daf14c7dabdaccbe68b6294786f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbd41283a09acde4ca79fbf8b7a9563cf033daf14c7dabdaccbe68b6294786f5->enter($__internal_bbd41283a09acde4ca79fbf8b7a9563cf033daf14c7dabdaccbe68b6294786f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bbd41283a09acde4ca79fbf8b7a9563cf033daf14c7dabdaccbe68b6294786f5->leave($__internal_bbd41283a09acde4ca79fbf8b7a9563cf033daf14c7dabdaccbe68b6294786f5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/cine/app/Resources/views/base.html.twig");
    }
}
