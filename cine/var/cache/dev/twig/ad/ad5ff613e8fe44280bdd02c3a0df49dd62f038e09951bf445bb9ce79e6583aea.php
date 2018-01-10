<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_29c32a39910012c56a55aea0c22667cc72d3aa027d0a22c92c92883225de4f1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53ea65f2ea1b3a0bd20eda054593ab4b794c13b3336c9fa524f757830c646af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ea65f2ea1b3a0bd20eda054593ab4b794c13b3336c9fa524f757830c646af9->enter($__internal_53ea65f2ea1b3a0bd20eda054593ab4b794c13b3336c9fa524f757830c646af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53ea65f2ea1b3a0bd20eda054593ab4b794c13b3336c9fa524f757830c646af9->leave($__internal_53ea65f2ea1b3a0bd20eda054593ab4b794c13b3336c9fa524f757830c646af9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2af9b4ad15b7e96a44993c02bee7f67832fc5571d19bec5fba5798e7120a506c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af9b4ad15b7e96a44993c02bee7f67832fc5571d19bec5fba5798e7120a506c->enter($__internal_2af9b4ad15b7e96a44993c02bee7f67832fc5571d19bec5fba5798e7120a506c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2af9b4ad15b7e96a44993c02bee7f67832fc5571d19bec5fba5798e7120a506c->leave($__internal_2af9b4ad15b7e96a44993c02bee7f67832fc5571d19bec5fba5798e7120a506c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_06727e94222a0d57d2cc841a4efb5ac1be7eac6bbb105542b6b95dc66ee4429b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06727e94222a0d57d2cc841a4efb5ac1be7eac6bbb105542b6b95dc66ee4429b->enter($__internal_06727e94222a0d57d2cc841a4efb5ac1be7eac6bbb105542b6b95dc66ee4429b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_06727e94222a0d57d2cc841a4efb5ac1be7eac6bbb105542b6b95dc66ee4429b->leave($__internal_06727e94222a0d57d2cc841a4efb5ac1be7eac6bbb105542b6b95dc66ee4429b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d39845e3d24fb8783bd91cf4a5ac5c0f3a6c91f0861d50aed2c577e7af355368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39845e3d24fb8783bd91cf4a5ac5c0f3a6c91f0861d50aed2c577e7af355368->enter($__internal_d39845e3d24fb8783bd91cf4a5ac5c0f3a6c91f0861d50aed2c577e7af355368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d39845e3d24fb8783bd91cf4a5ac5c0f3a6c91f0861d50aed2c577e7af355368->leave($__internal_d39845e3d24fb8783bd91cf4a5ac5c0f3a6c91f0861d50aed2c577e7af355368_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/cine/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
