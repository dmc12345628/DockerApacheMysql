<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_06819f140552e9463a3cd3a6858df1537700db5a67a068fa5d2416b16a8ee959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_588b3088823187c72452382a8b79240fd74a7c568a93dcd29d3181028f5e32cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588b3088823187c72452382a8b79240fd74a7c568a93dcd29d3181028f5e32cb->enter($__internal_588b3088823187c72452382a8b79240fd74a7c568a93dcd29d3181028f5e32cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_588b3088823187c72452382a8b79240fd74a7c568a93dcd29d3181028f5e32cb->leave($__internal_588b3088823187c72452382a8b79240fd74a7c568a93dcd29d3181028f5e32cb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_207e80d893d517ac6bd4d4cdb678674b568f96cee7c75dae6fff54ef73c0e443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207e80d893d517ac6bd4d4cdb678674b568f96cee7c75dae6fff54ef73c0e443->enter($__internal_207e80d893d517ac6bd4d4cdb678674b568f96cee7c75dae6fff54ef73c0e443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_207e80d893d517ac6bd4d4cdb678674b568f96cee7c75dae6fff54ef73c0e443->leave($__internal_207e80d893d517ac6bd4d4cdb678674b568f96cee7c75dae6fff54ef73c0e443_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1eb405d5fe034f253074e11b3a3824920339442365be6394dfa3e1352b947f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1eb405d5fe034f253074e11b3a3824920339442365be6394dfa3e1352b947f4->enter($__internal_e1eb405d5fe034f253074e11b3a3824920339442365be6394dfa3e1352b947f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e1eb405d5fe034f253074e11b3a3824920339442365be6394dfa3e1352b947f4->leave($__internal_e1eb405d5fe034f253074e11b3a3824920339442365be6394dfa3e1352b947f4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b795db795dcc8d811fe1795e323f3584e636264668b11aae6ece3f237c19c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b795db795dcc8d811fe1795e323f3584e636264668b11aae6ece3f237c19c40->enter($__internal_8b795db795dcc8d811fe1795e323f3584e636264668b11aae6ece3f237c19c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8b795db795dcc8d811fe1795e323f3584e636264668b11aae6ece3f237c19c40->leave($__internal_8b795db795dcc8d811fe1795e323f3584e636264668b11aae6ece3f237c19c40_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/cine/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
