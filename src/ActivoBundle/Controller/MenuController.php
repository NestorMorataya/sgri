<?php

namespace ActivoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    public function indexAction()
    {
        return $this->render('ActivoBundle:Default:menu2.html.twig');
    }
}
