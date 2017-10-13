<?php

namespace ActivoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ActivoBundle:Default:index.html.twig');
    }
}
