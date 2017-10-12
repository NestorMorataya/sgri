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
        $__internal_1b44c619656bdb2dc51f2833aeecfe7e32e8cb2778f0a29e0fcd497d96d22c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b44c619656bdb2dc51f2833aeecfe7e32e8cb2778f0a29e0fcd497d96d22c5e->enter($__internal_1b44c619656bdb2dc51f2833aeecfe7e32e8cb2778f0a29e0fcd497d96d22c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <a class=\"navbar-brand\" href=\"index.html\">SG<span>RI</span></a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
        <ul class=\"nav navbar-nav navbar-right\">
          <li class=\"btn-trial\"><a href=\"\">Cerrar Secion</a></li>
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
        
        $__internal_1b44c619656bdb2dc51f2833aeecfe7e32e8cb2778f0a29e0fcd497d96d22c5e->leave($__internal_1b44c619656bdb2dc51f2833aeecfe7e32e8cb2778f0a29e0fcd497d96d22c5e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbf4b4fcc48502c3150c4397e08827bbe89d15c75eeea6ca7fbfb1d0e04a9ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf4b4fcc48502c3150c4397e08827bbe89d15c75eeea6ca7fbfb1d0e04a9ddc->enter($__internal_fbf4b4fcc48502c3150c4397e08827bbe89d15c75eeea6ca7fbfb1d0e04a9ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sistema para la Gestion de la Seguridad de la Informacion ";
        
        $__internal_fbf4b4fcc48502c3150c4397e08827bbe89d15c75eeea6ca7fbfb1d0e04a9ddc->leave($__internal_fbf4b4fcc48502c3150c4397e08827bbe89d15c75eeea6ca7fbfb1d0e04a9ddc_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_03fcac9b7ce54966ab7129226a02d34b58a1c6a41794a0b2c8e168ef9e269b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03fcac9b7ce54966ab7129226a02d34b58a1c6a41794a0b2c8e168ef9e269b1f->enter($__internal_03fcac9b7ce54966ab7129226a02d34b58a1c6a41794a0b2c8e168ef9e269b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    
    ";
        
        $__internal_03fcac9b7ce54966ab7129226a02d34b58a1c6a41794a0b2c8e168ef9e269b1f->leave($__internal_03fcac9b7ce54966ab7129226a02d34b58a1c6a41794a0b2c8e168ef9e269b1f_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_49a9022c800b283ad98d2ce0deee47b73bdd02be9d667a7380882eff2f393cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a9022c800b283ad98d2ce0deee47b73bdd02be9d667a7380882eff2f393cd0->enter($__internal_49a9022c800b283ad98d2ce0deee47b73bdd02be9d667a7380882eff2f393cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "            <!--Navigation bar-->
    
        ";
        
        $__internal_49a9022c800b283ad98d2ce0deee47b73bdd02be9d667a7380882eff2f393cd0->leave($__internal_49a9022c800b283ad98d2ce0deee47b73bdd02be9d667a7380882eff2f393cd0_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_321fe6300c294d297d18d5f809f321b26917580630189dbc2bd1616e23b405c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_321fe6300c294d297d18d5f809f321b26917580630189dbc2bd1616e23b405c7->enter($__internal_321fe6300c294d297d18d5f809f321b26917580630189dbc2bd1616e23b405c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "            
        ";
        
        $__internal_321fe6300c294d297d18d5f809f321b26917580630189dbc2bd1616e23b405c7->leave($__internal_321fe6300c294d297d18d5f809f321b26917580630189dbc2bd1616e23b405c7_prof);

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
        return array (  171 => 44,  165 => 43,  156 => 40,  150 => 39,  142 => 10,  136 => 9,  124 => 6,  113 => 58,  109 => 57,  105 => 56,  101 => 55,  90 => 46,  87 => 43,  85 => 39,  60 => 17,  56 => 16,  52 => 15,  48 => 14,  44 => 13,  41 => 12,  39 => 9,  33 => 6,  26 => 1,);
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
        <a class=\"navbar-brand\" href=\"index.html\">SG<span>RI</span></a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
        <ul class=\"nav navbar-nav navbar-right\">
          <li class=\"btn-trial\"><a href=\"\">Cerrar Secion</a></li>
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
