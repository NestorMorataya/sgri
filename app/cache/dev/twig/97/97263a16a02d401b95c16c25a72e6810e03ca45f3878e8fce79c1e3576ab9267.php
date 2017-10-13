<?php

/* empresa/new.html.twig */
class __TwigTemplate_3eab4b174a41ce9351da2aaeb1f8a90b91207c55aa8e9def55fbc57fbf22175b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "empresa/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3952f0b25d2fe085cffddf309f6af70ddb420dd9c070654349976f7a491b60e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3952f0b25d2fe085cffddf309f6af70ddb420dd9c070654349976f7a491b60e5->enter($__internal_3952f0b25d2fe085cffddf309f6af70ddb420dd9c070654349976f7a491b60e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empresa/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3952f0b25d2fe085cffddf309f6af70ddb420dd9c070654349976f7a491b60e5->leave($__internal_3952f0b25d2fe085cffddf309f6af70ddb420dd9c070654349976f7a491b60e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3db68bb1c8405e069563fccc2c46073ab63b2b92a7f59995553c75ec1f91cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3db68bb1c8405e069563fccc2c46073ab63b2b92a7f59995553c75ec1f91cca->enter($__internal_e3db68bb1c8405e069563fccc2c46073ab63b2b92a7f59995553c75ec1f91cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\" style=\"margin-top:30px;\">
  <div class=\"row well\">
   <div class=\"col-md-6\">
       <div class=\"page-header\">
            <h2>Registro de Empresa</h2> 
       </div>
        

    ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
       <div class=\"form-group\">
         ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
         ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

       </div>
       <div class=\"form-group\">
         ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objetivos", array()), 'label');
        echo "
         ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objetivos", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
       </div>
       <div class=\"form-group\">
         ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "politicas", array()), 'label');
        echo "
         ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "politicas", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

       </div>
       <div class=\"form-group\">
         ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alcances", array()), 'label');
        echo "
         ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alcances", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

       </div>
       
        <button type=\"submit\" value=\"Guardar\" class=\"btn\"> Siguiente </button> 
    ";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

   </div>

  </div>
</div>


";
        
        $__internal_e3db68bb1c8405e069563fccc2c46073ab63b2b92a7f59995553c75ec1f91cca->leave($__internal_e3db68bb1c8405e069563fccc2c46073ab63b2b92a7f59995553c75ec1f91cca_prof);

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
        return array (  99 => 34,  91 => 29,  87 => 28,  80 => 24,  76 => 23,  70 => 20,  66 => 19,  59 => 15,  55 => 14,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block body %}
<div class=\"container\" style=\"margin-top:30px;\">
  <div class=\"row well\">
   <div class=\"col-md-6\">
       <div class=\"page-header\">
            <h2>Registro de Empresa</h2> 
       </div>
        

    {{ form_start(form) }}
       <div class=\"form-group\">
         {{ form_label(form.nombre)}}
         {{ form_widget(form.nombre, {'attr':{'class':'form-control'}}) }}

       </div>
       <div class=\"form-group\">
         {{ form_label(form.objetivos)}}
         {{ form_widget(form.objetivos, {'attr':{'class':'form-control'}}) }}
       </div>
       <div class=\"form-group\">
         {{ form_label(form.politicas)}}
         {{ form_widget(form.politicas, {'attr':{'class':'form-control'}}) }}

       </div>
       <div class=\"form-group\">
         {{ form_label(form.alcances)}}
         {{ form_widget(form.alcances, {'attr':{'class':'form-control'}}) }}

       </div>
       
        <button type=\"submit\" value=\"Guardar\" class=\"btn\"> Siguiente </button> 
    {{ form_end(form) }}

   </div>

  </div>
</div>


{% endblock %}
", "empresa/new.html.twig", "C:\\wamp64\\www\\sgri\\app\\Resources\\views\\empresa\\new.html.twig");
    }
}
