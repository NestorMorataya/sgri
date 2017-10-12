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
        $__internal_35c94894fc2b48d3dda420c6732d5b29f2d83eee05dd625b831c2b4a84c65390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c94894fc2b48d3dda420c6732d5b29f2d83eee05dd625b831c2b4a84c65390->enter($__internal_35c94894fc2b48d3dda420c6732d5b29f2d83eee05dd625b831c2b4a84c65390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

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
          <li><a href=\"#\" data-target=\"#login\" data-toggle=\"modal\">Inicar sesion</a></li>
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
    <div class=\"modal fade\" id=\"login\" role=\"dialog\">
      <div class=\"modal-dialog modal-sm\">
      
        <!-- Modal content no 1-->
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h4 class=\"modal-title text-center form-title\">Login</h4>
          </div>
          <div class=\"modal-body padtrbl\">

            <div class=\"login-box-body\">
              <p class=\"login-box-msg\">Sign in to start your session</p>
              <div class=\"form-group\">
                <form name=\"\" id=\"loginForm\">
                 <div class=\"form-group has-feedback\"> <!----- username -------------->
                      <input class=\"form-control\" placeholder=\"Username\"  id=\"loginid\" type=\"text\" autocomplete=\"off\" /> 
            <span style=\"display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;\" id=\"span_loginid\"></span><!---Alredy exists  ! -->
                      <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                  </div>
                  <div class=\"form-group has-feedback\"><!----- password -------------->
                      <input class=\"form-control\" placeholder=\"Password\" id=\"loginpsw\" type=\"password\" autocomplete=\"off\" />
            <span style=\"display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;\" id=\"span_loginpsw\"></span><!---Alredy exists  ! -->
                      <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                  </div>
                  <div class=\"row\">
                      <div class=\"col-xs-12\">
                          <div class=\"checkbox icheck\">
                              <label>
                                <input type=\"checkbox\" id=\"loginrem\" > Remember Me
                              </label>
                          </div>
                      </div>
                      <div class=\"col-xs-12\">
                          <button type=\"button\" class=\"btn btn-green btn-block btn-flat\" onclick=\"userlogin()\">Sign In</button>
                      </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--/ Modal box-->
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
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/custom.js"), "html", null, true);
        echo "\"></script>

  </body>
</html>";
        
        $__internal_35c94894fc2b48d3dda420c6732d5b29f2d83eee05dd625b831c2b4a84c65390->leave($__internal_35c94894fc2b48d3dda420c6732d5b29f2d83eee05dd625b831c2b4a84c65390_prof);

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
        return array (  163 => 113,  159 => 112,  155 => 111,  151 => 110,  69 => 31,  49 => 14,  45 => 13,  41 => 12,  37 => 11,  33 => 10,  22 => 1,);
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
          <li><a href=\"#\" data-target=\"#login\" data-toggle=\"modal\">Inicar sesion</a></li>
          <li class=\"btn-trial\"><a href=\"{{ path('empresa_new') }}\">Registrarme</a></li>
        </ul>
        </div>
      </div>
    </nav>
    <!--/ Navigation bar-->
    <!--Modal box-->
    <div class=\"modal fade\" id=\"login\" role=\"dialog\">
      <div class=\"modal-dialog modal-sm\">
      
        <!-- Modal content no 1-->
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h4 class=\"modal-title text-center form-title\">Login</h4>
          </div>
          <div class=\"modal-body padtrbl\">

            <div class=\"login-box-body\">
              <p class=\"login-box-msg\">Sign in to start your session</p>
              <div class=\"form-group\">
                <form name=\"\" id=\"loginForm\">
                 <div class=\"form-group has-feedback\"> <!----- username -------------->
                      <input class=\"form-control\" placeholder=\"Username\"  id=\"loginid\" type=\"text\" autocomplete=\"off\" /> 
            <span style=\"display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;\" id=\"span_loginid\"></span><!---Alredy exists  ! -->
                      <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                  </div>
                  <div class=\"form-group has-feedback\"><!----- password -------------->
                      <input class=\"form-control\" placeholder=\"Password\" id=\"loginpsw\" type=\"password\" autocomplete=\"off\" />
            <span style=\"display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;\" id=\"span_loginpsw\"></span><!---Alredy exists  ! -->
                      <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                  </div>
                  <div class=\"row\">
                      <div class=\"col-xs-12\">
                          <div class=\"checkbox icheck\">
                              <label>
                                <input type=\"checkbox\" id=\"loginrem\" > Remember Me
                              </label>
                          </div>
                      </div>
                      <div class=\"col-xs-12\">
                          <button type=\"button\" class=\"btn btn-green btn-block btn-flat\" onclick=\"userlogin()\">Sign In</button>
                      </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--/ Modal box-->
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
