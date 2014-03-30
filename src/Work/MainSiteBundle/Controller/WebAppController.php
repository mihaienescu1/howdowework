<?php

namespace Work\MainSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WebAppController extends Controller
{
    public function indexAction()
    {
    	return $this->render('WorkMainSiteBundle:WebApp:index.html.twig');
    }

}
