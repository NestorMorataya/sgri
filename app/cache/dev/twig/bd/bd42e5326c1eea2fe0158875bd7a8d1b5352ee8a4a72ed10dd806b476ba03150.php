<?php

/* default/index.html.twig */
class __TwigTemplate_ebc64aa4dc7494f8908ff75de01fae433206c047aef57d61107885844eea6a3c extends Twig_Template
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
        $__internal_a401935cf07ce9b7acd5d137325c29070d73a17a370ebe062203863f3d258d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a401935cf07ce9b7acd5d137325c29070d73a17a370ebe062203863f3d258d94->enter($__internal_a401935cf07ce9b7acd5d137325c29070d73a17a370ebe062203863f3d258d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Sistema para la Gestion de la Seguridad de la Informacion</title>
    <meta name=\"description\" content=\"Sistema para la gestion de riesgos de la informacion multiempresa\">
    <meta name=\"keywords\" content=\"Seguridad, Informacion, Activos, Empresa\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/imagehover.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
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
          <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_login");
        echo "\" data-target=\"#login\" data-toggle=\"modal\">Iniciar sesion</a></li>
          <li class=\"btn-trial\"><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("empresa_new");
        echo "\">Registrarme</a></li>
        </ul>
        </div>
      </div>
    </nav>
    <!--/ Navigation bar-->
    <!--Modal box-->

    <!--Banner-->
    <div class=\"banner\">
      <div class=\"bg-color\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"banner-text text-center\">
              <div class=\"text-border\">
                <h2 class=\"text-dec\">SGRI</h2>
              </div>
              <div class=\"intro-para text-center quote\">
                <p class=\"big-text\">Sistema para la Gestion de Riesgos de la Informacion</p>
                <p class=\"small-text\">Sistema para el calculo del riesgo de los activos segun sus vulneravilidades y amenazas<br> Gestion de tareas a realizar en los controles.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Banner-->

  <footer id=\"footer\" class=\"footer\">
      <div class=\"container text-center\">
        ©2018 TOO115. All rights reserved
      </div>
    </footer>
    <!--/ Footer-->
        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/custom.js"), "html", null, true);
        echo "\"></script>

  </body>
</html>";
        
        $__internal_a401935cf07ce9b7acd5d137325c29070d73a17a370ebe062203863f3d258d94->leave($__internal_a401935cf07ce9b7acd5d137325c29070d73a17a370ebe062203863f3d258d94_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 68,  117 => 67,  113 => 66,  109 => 65,  72 => 31,  68 => 30,  49 => 14,  45 => 13,  41 => 12,  37 => 11,  33 => 10,  22 => 1,);
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
    <title>Sistema para la Gestion de la Seguridad de la Informacion</title>
    <meta name=\"description\" content=\"Sistema para la gestion de riesgos de la informacion multiempresa\">
    <meta name=\"keywords\" content=\"Seguridad, Informacion, Activos, Empresa\">
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
          <li><a href=\"{{ path('user_login')}}\" data-target=\"#login\" data-toggle=\"modal\">Iniciar sesion</a></li>
          <li class=\"btn-trial\"><a href=\"{{ path('empresa_new') }}\">Registrarme</a></li>
        </ul>
        </div>
      </div>
    </nav>
    <!--/ Navigation bar-->
    <!--Modal box-->

    <!--Banner-->
    <div class=\"banner\">
      <div class=\"bg-color\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"banner-text text-center\">
              <div class=\"text-border\">
                <h2 class=\"text-dec\">SGRI</h2>
              </div>
              <div class=\"intro-para text-center quote\">
                <p class=\"big-text\">Sistema para la Gestion de Riesgos de la Informacion</p>
                <p class=\"small-text\">Sistema para el calculo del riesgo de los activos segun sus vulneravilidades y amenazas<br> Gestion de tareas a realizar en los controles.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Banner-->

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
</html>", "default/index.html.twig", "C:\\wamp64\\www\\sgri\\app\\Resources\\views\\default\\index.html.twig");
    }
}
