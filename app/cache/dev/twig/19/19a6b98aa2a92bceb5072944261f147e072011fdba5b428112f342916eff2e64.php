<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e172aa14397a9be9e081969c603b592e9af8c93749cf2d346a43c87c3c6eb9f0 extends Twig_Template
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
        $__internal_0d5a11b0dca7b27902091a722b9916c29b5c60e69c9e75f40f3e1f67b9b0813a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5a11b0dca7b27902091a722b9916c29b5c60e69c9e75f40f3e1f67b9b0813a->enter($__internal_0d5a11b0dca7b27902091a722b9916c29b5c60e69c9e75f40f3e1f67b9b0813a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d5a11b0dca7b27902091a722b9916c29b5c60e69c9e75f40f3e1f67b9b0813a->leave($__internal_0d5a11b0dca7b27902091a722b9916c29b5c60e69c9e75f40f3e1f67b9b0813a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1d19508dafd4a3c696a6cce8166bdbaf217b35960fa83c45d7de595a05c59f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d19508dafd4a3c696a6cce8166bdbaf217b35960fa83c45d7de595a05c59f44->enter($__internal_1d19508dafd4a3c696a6cce8166bdbaf217b35960fa83c45d7de595a05c59f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1d19508dafd4a3c696a6cce8166bdbaf217b35960fa83c45d7de595a05c59f44->leave($__internal_1d19508dafd4a3c696a6cce8166bdbaf217b35960fa83c45d7de595a05c59f44_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aef0c9a6626498c97af67ecf5f1f3309f793e7ffd4eb6247db645c818e581865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef0c9a6626498c97af67ecf5f1f3309f793e7ffd4eb6247db645c818e581865->enter($__internal_aef0c9a6626498c97af67ecf5f1f3309f793e7ffd4eb6247db645c818e581865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aef0c9a6626498c97af67ecf5f1f3309f793e7ffd4eb6247db645c818e581865->leave($__internal_aef0c9a6626498c97af67ecf5f1f3309f793e7ffd4eb6247db645c818e581865_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfdf9942fb240886e5eec89ece250d645cf7f5c8437bb00845b57f9a4cba1310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfdf9942fb240886e5eec89ece250d645cf7f5c8437bb00845b57f9a4cba1310->enter($__internal_dfdf9942fb240886e5eec89ece250d645cf7f5c8437bb00845b57f9a4cba1310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dfdf9942fb240886e5eec89ece250d645cf7f5c8437bb00845b57f9a4cba1310->leave($__internal_dfdf9942fb240886e5eec89ece250d645cf7f5c8437bb00845b57f9a4cba1310_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\sgri\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
