<?php

/* base.html.twig */
class __TwigTemplate_14a1724b5eda25f806162d1eae96687babb51a37539c3323b455e0cf00f6c5d9 extends Twig_Template
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
        $__internal_f1b4971c31c0124c66c06e4198030fc10a47b1327495f40670aec4f3e04c1f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b4971c31c0124c66c06e4198030fc10a47b1327495f40670aec4f3e04c1f8c->enter($__internal_f1b4971c31c0124c66c06e4198030fc10a47b1327495f40670aec4f3e04c1f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"Free Bootstrap Theme by BootstrapMade.com\">
    <meta name=\"keywords\" content=\"free website templates, free bootstrap themes, free template, free bootstrap, free website template\">
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/imagehover.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

  </head>
   <body>
   <nav class=\"navbar navbar-default navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"#\">SG<span>RI</span></a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
        <ul class=\"nav navbar-nav navbar-right\">
          <li class=\"btn-trial\"><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_logout");
        echo "\">Cerrar Sesion</a></li>
        </ul>
        </div>
      </div>
    </nav>

        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "

            <!--Footer-->
    <footer id=\"footer\" class=\"footer\">
      <div class=\"container text-center\">
        ©2018 TOO115. All rights reserved
      </div>
    </footer>
    <!--/ Footer-->
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/custom.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_f1b4971c31c0124c66c06e4198030fc10a47b1327495f40670aec4f3e04c1f8c->leave($__internal_f1b4971c31c0124c66c06e4198030fc10a47b1327495f40670aec4f3e04c1f8c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f15b4f3eabb022d071563a50ccf2892132e9b4d9a13de572c1ba36bc9eece4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f15b4f3eabb022d071563a50ccf2892132e9b4d9a13de572c1ba36bc9eece4e->enter($__internal_3f15b4f3eabb022d071563a50ccf2892132e9b4d9a13de572c1ba36bc9eece4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sistema para la Gestion de la Seguridad de la Informacion ";
        
        $__internal_3f15b4f3eabb022d071563a50ccf2892132e9b4d9a13de572c1ba36bc9eece4e->leave($__internal_3f15b4f3eabb022d071563a50ccf2892132e9b4d9a13de572c1ba36bc9eece4e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce6b3d0ca3abd19c5d251756f1018a235546eec33f82db1c56a4517674189dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6b3d0ca3abd19c5d251756f1018a235546eec33f82db1c56a4517674189dde->enter($__internal_ce6b3d0ca3abd19c5d251756f1018a235546eec33f82db1c56a4517674189dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    
    ";
        
        $__internal_ce6b3d0ca3abd19c5d251756f1018a235546eec33f82db1c56a4517674189dde->leave($__internal_ce6b3d0ca3abd19c5d251756f1018a235546eec33f82db1c56a4517674189dde_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec7f4c631bb6a36676fc2cada4071b31fe87d65809b271e0d5a1d34ce8a6f376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7f4c631bb6a36676fc2cada4071b31fe87d65809b271e0d5a1d34ce8a6f376->enter($__internal_ec7f4c631bb6a36676fc2cada4071b31fe87d65809b271e0d5a1d34ce8a6f376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "            <!--Navigation bar-->
    
        ";
        
        $__internal_ec7f4c631bb6a36676fc2cada4071b31fe87d65809b271e0d5a1d34ce8a6f376->leave($__internal_ec7f4c631bb6a36676fc2cada4071b31fe87d65809b271e0d5a1d34ce8a6f376_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fa395afb8e3998b8f70b2f7b3a0def8f05a1803488eb10dad237e5f33c66b366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa395afb8e3998b8f70b2f7b3a0def8f05a1803488eb10dad237e5f33c66b366->enter($__internal_fa395afb8e3998b8f70b2f7b3a0def8f05a1803488eb10dad237e5f33c66b366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "            
        ";
        
        $__internal_fa395afb8e3998b8f70b2f7b3a0def8f05a1803488eb10dad237e5f33c66b366->leave($__internal_fa395afb8e3998b8f70b2f7b3a0def8f05a1803488eb10dad237e5f33c66b366_prof);

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
        return array (  174 => 44,  168 => 43,  159 => 40,  153 => 39,  145 => 10,  139 => 9,  127 => 6,  116 => 58,  112 => 57,  108 => 56,  104 => 55,  93 => 46,  90 => 43,  88 => 39,  79 => 33,  60 => 17,  56 => 16,  52 => 15,  48 => 14,  44 => 13,  41 => 12,  39 => 9,  33 => 6,  26 => 1,);
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
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}Sistema para la Gestion de la Seguridad de la Informacion {% endblock %}</title>
    <meta name=\"description\" content=\"Free Bootstrap Theme by BootstrapMade.com\">
    <meta name=\"keywords\" content=\"free website templates, free bootstrap themes, free template, free bootstrap, free website template\">
    {% block stylesheets %}
    
    {% endblock %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('public/css/font-awesome.min.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('public/css/bootstrap.min.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('public/css/imagehover.min.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('public/css/style.css')}}\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

  </head>
   <body>
   <nav class=\"navbar navbar-default navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"#\">SG<span>RI</span></a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
        <ul class=\"nav navbar-nav navbar-right\">
          <li class=\"btn-trial\"><a href=\"{{path('user_logout')}}\">Cerrar Sesion</a></li>
        </ul>
        </div>
      </div>
    </nav>

        {% block body %}
            <!--Navigation bar-->
    
        {% endblock %}
        {% block javascripts %}
            
        {% endblock %}


            <!--Footer-->
    <footer id=\"footer\" class=\"footer\">
      <div class=\"container text-center\">
        ©2018 TOO115. All rights reserved
      </div>
    </footer>
    <!--/ Footer-->
        <script src=\"{{ asset('public/js/bootstrap.min.js')}}\"></script>
            <script src=\"{{ asset('public/js/jquery.easing.min.js')}}\"></script>
            <script src=\"{{ asset('public/js/jquery.min.js')}}\"></script>
            <script src=\"{{ asset('public/js/custom.js')}}\"></script>
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\sgri\\app\\Resources\\views\\base.html.twig");
    }
}
