<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/activo')) {
            // activo_homepage
            if ('/activo' === $pathinfo) {
                return array (  '_controller' => 'ActivoBundle\\Controller\\activoController::indexAction',  '_route' => 'activo_homepage',);
            }

            // activo_new
            if ('/activo/new' === $pathinfo) {
                return array (  '_controller' => 'ActivoBundle\\Controller\\activoController::newAction',  '_route' => 'activo_new',);
            }

            // activo_index
            if ('/activo/index' === $pathinfo) {
                return array (  '_controller' => 'ActivoBundle\\Controller\\activoController::indexAction',  '_route' => 'activo_index',);
            }

            // activo_edit
            if ('/activo/edit' === $pathinfo) {
                return array (  '_controller' => 'ActivoBundle\\Controller\\activoController::editAction',  '_route' => 'activo_edit',);
            }

            // activo_show
            if ('/activo/show' === $pathinfo) {
                return array (  '_controller' => 'ActivoBundle\\Controller\\activoController::showAction',  '_route' => 'activo_show',);
            }

            // activo_delete
            if ('/activo/delete' === $pathinfo) {
                return array (  '_controller' => 'ActivoBundle\\Controller\\activoController::deleteAction',  '_route' => 'activo_delete',);
            }

        }

        if (0 === strpos($pathinfo, '/categoria')) {
            // categoria_homepage
            if ('/categoria' === $pathinfo) {
                return array (  '_controller' => 'ActivoBundle\\Controller\\categoriaController::indexAction',  '_route' => 'categoria_homepage',);
            }

            // categoria_new
            if ('/categoria/new' === $pathinfo) {
                return array (  '_controller' => 'ActivoBundle\\Controller\\categoriaController::newAction',  '_route' => 'categoria_new',);
            }

            // categoria_edit
            if ('/categoria/edit' === $pathinfo) {
                return array (  '_controller' => 'ActivoBundle\\Controller\\categoriaController::editAction',  '_route' => 'categoria_edit',);
            }

            // categoria_show
            if ('/categoria/show' === $pathinfo) {
                return array (  '_controller' => 'ActivoBundle\\Controller\\categoriaController::showAction',  '_route' => 'categoria_show',);
            }

            // categoria_index
            if ('/categoria/index' === $pathinfo) {
                return array (  '_controller' => 'ActivoBundle\\Controller\\categoriaController::indexAction',  '_route' => 'categoria_index',);
            }

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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
