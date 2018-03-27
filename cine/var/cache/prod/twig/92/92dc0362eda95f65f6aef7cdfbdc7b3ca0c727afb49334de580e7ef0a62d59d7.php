<?php

/* base.html.twig */
class __TwigTemplate_9c882403514f17c6dfdb8d69aa966ec7f6980d0f9c4930ea9895aae7f7523f5a extends Twig_Template
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
        $__internal_ce6cc4381de765080a980850dfa81a701944d1244caec9e094d6b76bd3fcc313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6cc4381de765080a980850dfa81a701944d1244caec9e094d6b76bd3fcc313->enter($__internal_ce6cc4381de765080a980850dfa81a701944d1244caec9e094d6b76bd3fcc313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ce6cc4381de765080a980850dfa81a701944d1244caec9e094d6b76bd3fcc313->leave($__internal_ce6cc4381de765080a980850dfa81a701944d1244caec9e094d6b76bd3fcc313_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c7a1a551da0b5102de9dcd843a182355841f50f01803836382a79527caa6a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7a1a551da0b5102de9dcd843a182355841f50f01803836382a79527caa6a9c->enter($__internal_9c7a1a551da0b5102de9dcd843a182355841f50f01803836382a79527caa6a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9c7a1a551da0b5102de9dcd843a182355841f50f01803836382a79527caa6a9c->leave($__internal_9c7a1a551da0b5102de9dcd843a182355841f50f01803836382a79527caa6a9c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f30f298956fbab557b8430db43a750777c9fd7586a300cf377b8822f981ef9dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f30f298956fbab557b8430db43a750777c9fd7586a300cf377b8822f981ef9dc->enter($__internal_f30f298956fbab557b8430db43a750777c9fd7586a300cf377b8822f981ef9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f30f298956fbab557b8430db43a750777c9fd7586a300cf377b8822f981ef9dc->leave($__internal_f30f298956fbab557b8430db43a750777c9fd7586a300cf377b8822f981ef9dc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_397b3b6efd76a2d30360b4302ca64053e399b6848fc1db6047927fd5e3da31f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397b3b6efd76a2d30360b4302ca64053e399b6848fc1db6047927fd5e3da31f1->enter($__internal_397b3b6efd76a2d30360b4302ca64053e399b6848fc1db6047927fd5e3da31f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_397b3b6efd76a2d30360b4302ca64053e399b6848fc1db6047927fd5e3da31f1->leave($__internal_397b3b6efd76a2d30360b4302ca64053e399b6848fc1db6047927fd5e3da31f1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9523b8a79aeeabd13f35cfa1d48f4135e2d85ab52f943f5caaf7e4ae9e06034c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9523b8a79aeeabd13f35cfa1d48f4135e2d85ab52f943f5caaf7e4ae9e06034c->enter($__internal_9523b8a79aeeabd13f35cfa1d48f4135e2d85ab52f943f5caaf7e4ae9e06034c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9523b8a79aeeabd13f35cfa1d48f4135e2d85ab52f943f5caaf7e4ae9e06034c->leave($__internal_9523b8a79aeeabd13f35cfa1d48f4135e2d85ab52f943f5caaf7e4ae9e06034c_prof);

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
