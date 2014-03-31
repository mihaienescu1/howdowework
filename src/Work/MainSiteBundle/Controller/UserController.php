<?php

namespace Work\MainSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Work\MainSiteBundle\Form\Type\UserType;
use Work\MainSiteBundle\Entity\User;

class UserController extends Controller
{
	public function indexAction()
	{
	
	}
	
    public function loginAction(Request $request)
    {
    	
    	$session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render(
            'WorkMainSiteBundle:User:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error'         => $error,
            )
        );
    }
    
    public function registerAction(Request $request)
    {
    	$user = new User();
    	$form = $this->createForm(new UserType(), $user);
    	
    	$form->handleRequest($request);
    	
    	if ($form->isValid()) 
    	{
    		$usernameAndEmail = $form->getData()->getEmail();
    		$password		  = $form->getData()->getPassword();
    		
    		$userManager = $this->get('fos_user.user_manager');
    		$user = $userManager->createUser();
	    	$user->setUsername($usernameAndEmail);
	    	$user->setEmail($usernameAndEmail);
	    	$user->setPlainPassword($password);
	    	$user->setEnabled(true);
	    	
	    	$userManager->updateUser($user);


    	}
    	
    	return $this->render('WorkMainSiteBundle:User:register.html.twig', array(
    								'form' => $form->createView()
    							)
    				);
    }

}
