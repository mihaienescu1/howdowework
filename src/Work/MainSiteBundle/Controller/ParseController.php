<?php

namespace Work\MainSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


use Work\MainSiteBundle\Entity\Post;

class ParseController extends Controller {
	
		
	public function indexAction() 
	{  
		return $this->render('WorkMainSiteBundle:Parse:index.html.twig');
	}
	
	public function dashboardAction(Request $request)
	{
		$user = $this->get('security.context')->getToken()->getUser();
    	$facebook  = $this->get('fos_facebook.api');
    	
    
    	$code = $request->query->get('code', false);
    	
    	if (!$code) {
    		$login_url = $fbk->getLoginUrl();
    		return new Response('<a href="' . $login_url . '">FB Check</a>');
    	}
    	
    	$message = array(
    		'' => '',
    		'' => '',
    	);
    	
    	$result = $facebook->api("/me/feed", 'POST', $message);
    	
    	echo "<pre>";
    		var_dump($result);
    	echo "</pre>";
    
    	
    	return new Response('x');
	}
	
}