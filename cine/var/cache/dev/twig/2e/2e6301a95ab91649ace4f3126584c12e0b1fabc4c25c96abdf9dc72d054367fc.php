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
        $__internal_d76fd43e00a99926f7f97c558925cca1f6e7461b66123ebd0322e48be65e24f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d76fd43e00a99926f7f97c558925cca1f6e7461b66123ebd0322e48be65e24f3->enter($__internal_d76fd43e00a99926f7f97c558925cca1f6e7461b66123ebd0322e48be65e24f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d76fd43e00a99926f7f97c558925cca1f6e7461b66123ebd0322e48be65e24f3->leave($__internal_d76fd43e00a99926f7f97c558925cca1f6e7461b66123ebd0322e48be65e24f3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ab69c8e4a54e1521c835d9315ff60246858a2261a63766b7320a2c814777afbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab69c8e4a54e1521c835d9315ff60246858a2261a63766b7320a2c814777afbb->enter($__internal_ab69c8e4a54e1521c835d9315ff60246858a2261a63766b7320a2c814777afbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ab69c8e4a54e1521c835d9315ff60246858a2261a63766b7320a2c814777afbb->leave($__internal_ab69c8e4a54e1521c835d9315ff60246858a2261a63766b7320a2c814777afbb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_71497d7054c7a1d169209daa16bb67a95106a3b68ec2a058acf9c00d6103912b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71497d7054c7a1d169209daa16bb67a95106a3b68ec2a058acf9c00d6103912b->enter($__internal_71497d7054c7a1d169209daa16bb67a95106a3b68ec2a058acf9c00d6103912b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_71497d7054c7a1d169209daa16bb67a95106a3b68ec2a058acf9c00d6103912b->leave($__internal_71497d7054c7a1d169209daa16bb67a95106a3b68ec2a058acf9c00d6103912b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_39cb6f0381881e352065a68dec9529e88cfcc4b83e189f5ffe20562371020d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39cb6f0381881e352065a68dec9529e88cfcc4b83e189f5ffe20562371020d41->enter($__internal_39cb6f0381881e352065a68dec9529e88cfcc4b83e189f5ffe20562371020d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_39cb6f0381881e352065a68dec9529e88cfcc4b83e189f5ffe20562371020d41->leave($__internal_39cb6f0381881e352065a68dec9529e88cfcc4b83e189f5ffe20562371020d41_prof);

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
