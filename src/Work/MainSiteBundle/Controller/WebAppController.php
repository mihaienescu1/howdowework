<?php

namespace Work\MainSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WebAppController extends Controller
{
    public function indexAction()
    {
    	return $this->render('WorkMainSiteBundle:WebApp:index.html.twig');
    }
    
    public function companiesAction()
    {
    	return $this->render('WorkMainSiteBundle:WebApp:companies.html.twig');
    }
    
    public function candidatesAction()
    {
    	return $this->render('WorkMainSiteBundle:WebApp:candidates.html.twig');
    }
    
    public function jobsAction()
    {
    	return $this->render('WorkMainSiteBundle:WebApp:jobs.html.twig');
    }
    
    public function contactAction()
    {	
    	return $this->render('WorkMainSiteBundle:WebApp:contact.html.twig');
    }
	
	public function reviewsAction()
	{
		return $this->render('WorkMainSiteBundle:WebApp:reviews.html.twig');
	}
	
	public function aboutAction()
	{
		return $this->render('WorkMainSiteBundle:WebApp:about.html.twig');
	}
}
