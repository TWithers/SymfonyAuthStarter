<?php

namespace EPC\SystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function helloAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/admin")
     */
    public function adminAction()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');

	    // get the login error if there is one
	    $error = $authenticationUtils->getLastAuthenticationError();

	    // last username entered by the user
	    $lastUsername = $authenticationUtils->getLastUsername();

	    return $this->render(
	        'EPCSystemBundle:Default:login.html.twig',
	        array(
	            // last username entered by the user
	            'last_username' => $lastUsername,
	            'error'         => $error,
	        )
	    );
    }
    /**
     * @Route("/login_check",name="login_check")
     */
    public function loginCheckAction()
    {
        return new Response('<html><body>Check page!</body></html>');
    }
    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
        return new Response('<html><body>Logout page!</body></html>');
    }
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return new Response('<html><body>index page!</body></html>');
    }
}
