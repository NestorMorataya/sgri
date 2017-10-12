<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_a0d5bf17a44822650261045585d5543848e908a8f3a29122a7d73ba4346df03a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_246fc30c12b0e8195d3094038e12738388bad522eef6974192d2e0750f1b8d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246fc30c12b0e8195d3094038e12738388bad522eef6974192d2e0750f1b8d1c->enter($__internal_246fc30c12b0e8195d3094038e12738388bad522eef6974192d2e0750f1b8d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_246fc30c12b0e8195d3094038e12738388bad522eef6974192d2e0750f1b8d1c->leave($__internal_246fc30c12b0e8195d3094038e12738388bad522eef6974192d2e0750f1b8d1c_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "UserBundle:Default:index.html.twig", "C:\\wamp64\\www\\sgri\\src\\UserBundle/Resources/views/Default/index.html.twig");
    }
}
