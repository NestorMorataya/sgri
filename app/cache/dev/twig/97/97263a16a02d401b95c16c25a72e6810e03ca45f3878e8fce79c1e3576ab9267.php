<?php

/* empresa/new.html.twig */
class __TwigTemplate_3eab4b174a41ce9351da2aaeb1f8a90b91207c55aa8e9def55fbc57fbf22175b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "empresa/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8848306a8590323bc58e1b099c17f5b5c96a083e003f625ca9068c0c460c94b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8848306a8590323bc58e1b099c17f5b5c96a083e003f625ca9068c0c460c94b1->enter($__internal_8848306a8590323bc58e1b099c17f5b5c96a083e003f625ca9068c0c460c94b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empresa/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8848306a8590323bc58e1b099c17f5b5c96a083e003f625ca9068c0c460c94b1->leave($__internal_8848306a8590323bc58e1b099c17f5b5c96a083e003f625ca9068c0c460c94b1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_90b90e1d7afe6e22421ec91b33cf0da434b6b3dc903a23ce44a7af8a95149327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b90e1d7afe6e22421ec91b33cf0da434b6b3dc903a23ce44a7af8a95149327->enter($__internal_90b90e1d7afe6e22421ec91b33cf0da434b6b3dc903a23ce44a7af8a95149327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
        <h1>Empresa creacion</h1>
        </br>

    ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Guardar\" />
    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("empresa_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
</div>

";
        
        $__internal_90b90e1d7afe6e22421ec91b33cf0da434b6b3dc903a23ce44a7af8a95149327->leave($__internal_90b90e1d7afe6e22421ec91b33cf0da434b6b3dc903a23ce44a7af8a95149327_prof);

    }

    public function getTemplateName()
    {
        return "empresa/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  55 => 11,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
        <h1>Empresa creacion</h1>
        </br>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Guardar\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('empresa_index') }}\">Back to the list</a>
        </li>
    </ul>
</div>

{% endblock %}
", "empresa/new.html.twig", "C:\\wamp64\\www\\sgri\\app\\Resources\\views\\empresa\\new.html.twig");
    }
}
