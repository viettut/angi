<?php

namespace Angi\Bundle\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AngiApiBundle:Default:index.html.twig');
    }
}
