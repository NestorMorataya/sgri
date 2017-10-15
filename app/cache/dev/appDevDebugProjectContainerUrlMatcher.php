<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === rtrim($pathinfo, '/')) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ('/_profiler/purge' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // categoria_default_index
        if ('/categoria' === rtrim($pathinfo, '/')) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'categoria_default_index');
            }

            return array (  '_controller' => 'CategoriaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'categoria_default_index',);
        }

        // activo_default_index
        if ('/activo' === rtrim($pathinfo, '/')) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'activo_default_index');
            }

            return array (  '_controller' => 'ActivoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'activo_default_index',);
        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario_index
            if ('/usuario' === rtrim($pathinfo, '/')) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario_index');
                }

                return array (  '_controller' => 'UserBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario_index',);
            }
            not_usuario_index:

            // usuario_new
            if (preg_match('#^/usuario/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuario_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_new')), array (  '_controller' => 'UserBundle\\Controller\\UsuarioController::newAction',));
            }
            not_usuario_new:

            // usuario_show
            if (preg_match('#^/usuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'UserBundle\\Controller\\UsuarioController::showAction',));
            }
            not_usuario_show:

            // usuario_edit
            if (preg_match('#^/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuario_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'UserBundle\\Controller\\UsuarioController::editAction',));
            }
            not_usuario_edit:

            // usuario_delete
            if (preg_match('#^/usuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_usuario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'UserBundle\\Controller\\UsuarioController::deleteAction',));
            }
            not_usuario_delete:

        }

        if (0 === strpos($pathinfo, '/empresa')) {
            // empresa_index
            if ('/empresa' === rtrim($pathinfo, '/')) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_empresa_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'empresa_index');
                }

                return array (  '_controller' => 'EmpresaBundle\\Controller\\EmpresaController::indexAction',  '_route' => 'empresa_index',);
            }
            not_empresa_index:

            // empresa_new
            if ('/empresa/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_empresa_new;
                }

                return array (  '_controller' => 'EmpresaBundle\\Controller\\EmpresaController::newAction',  '_route' => 'empresa_new',);
            }
            not_empresa_new:

            // empresa_show
            if (preg_match('#^/empresa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_empresa_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_show')), array (  '_controller' => 'EmpresaBundle\\Controller\\EmpresaController::showAction',));
            }
            not_empresa_show:

            // empresa_edit
            if (preg_match('#^/empresa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_empresa_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_edit')), array (  '_controller' => 'EmpresaBundle\\Controller\\EmpresaController::editAction',));
            }
            not_empresa_edit:

            // empresa_delete
            if (preg_match('#^/empresa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_empresa_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_delete')), array (  '_controller' => 'EmpresaBundle\\Controller\\EmpresaController::deleteAction',));
            }
            not_empresa_delete:

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_homepage
            if ('/user' === rtrim($pathinfo, '/')) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_homepage');
                }

                return array (  '_controller' => 'UserBundle\\Controller\\UsuarioController::homeAction',  '_route' => 'user_homepage',);
            }

            if (0 === strpos($pathinfo, '/user/log')) {
                if (0 === strpos($pathinfo, '/user/login')) {
                    // user_login
                    if ('/user/login' === $pathinfo) {
                        return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'user_login',);
                    }

                    // user_login_check
                    if ('/user/login_check' === $pathinfo) {
                        return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'user_login_check',);
                    }

                }

                // user_logout
                if ('/user/logout' === $pathinfo) {
                    return array (  '_controller' => 'UserBundle:Security:',  '_route' => 'user_logout',);
                }

            }

        }

        // empresa_homepage
        if ('/empresa' === rtrim($pathinfo, '/')) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'empresa_homepage');
            }

            return array (  '_controller' => 'EmpresaBundle:Home:home',  '_route' => 'empresa_homepage',);
        }

        // login_check
        if ('/login_check' === $pathinfo) {
            return array('_route' => 'login_check');
        }

        // homepage
        if ('' === rtrim($pathinfo, '/')) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/categoria')) {
            // categoria_index
            if ('/categoria' === rtrim($pathinfo, '/')) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_categoria_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'categoria_index');
                }

                return array (  '_controller' => 'CategoriaBundle\\Controller\\categoriaController::indexAction',  '_route' => 'categoria_index',);
            }
            not_categoria_index:

            // categoria_new
            if ('/categoria/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_categoria_new;
                }

                return array (  '_controller' => 'CategoriaBundle\\Controller\\categoriaController::newAction',  '_route' => 'categoria_new',);
            }
            not_categoria_new:

            // categoria_show
            if (preg_match('#^/categoria/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_categoria_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_show')), array (  '_controller' => 'CategoriaBundle\\Controller\\categoriaController::showAction',));
            }
            not_categoria_show:

            // categoria_edit
            if (preg_match('#^/categoria/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_categoria_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_edit')), array (  '_controller' => 'CategoriaBundle\\Controller\\categoriaController::editAction',));
            }
            not_categoria_edit:

            // categoria_delete
            if (preg_match('#^/categoria/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_categoria_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_delete')), array (  '_controller' => 'CategoriaBundle\\Controller\\categoriaController::deleteAction',));
            }
            not_categoria_delete:

            // menu_categoria
            if ('/categoria' === rtrim($pathinfo, '/')) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_menu_categoria;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'menu_categoria');
                }

                return array (  '_controller' => 'CategoriaBundle\\Controller\\categoriaController::menuAction',  '_route' => 'menu_categoria',);
            }
            not_menu_categoria:

        }

        if (0 === strpos($pathinfo, '/activo')) {
            // activo_index
            if ('/activo' === rtrim($pathinfo, '/')) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_activo_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'activo_index');
                }

                return array (  '_controller' => 'ActivoBundle\\Controller\\activoController::indexAction',  '_route' => 'activo_index',);
            }
            not_activo_index:

            // activo_new
            if ('/activo/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_activo_new;
                }

                return array (  '_controller' => 'ActivoBundle\\Controller\\activoController::newAction',  '_route' => 'activo_new',);
            }
            not_activo_new:

            // activo_show
            if (preg_match('#^/activo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_activo_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activo_show')), array (  '_controller' => 'ActivoBundle\\Controller\\activoController::showAction',));
            }
            not_activo_show:

            // activo_edit
            if (preg_match('#^/activo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_activo_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activo_edit')), array (  '_controller' => 'ActivoBundle\\Controller\\activoController::editAction',));
            }
            not_activo_edit:

            // activo_delete
            if (preg_match('#^/activo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_activo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activo_delete')), array (  '_controller' => 'ActivoBundle\\Controller\\activoController::deleteAction',));
            }
            not_activo_delete:

            // menu_activo
            if ('/activo' === rtrim($pathinfo, '/')) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_menu_activo;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'menu_activo');
                }

                return array (  '_controller' => 'ActivoBundle\\Controller\\activoController::menuAction',  '_route' => 'menu_activo',);
            }
            not_menu_activo:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
