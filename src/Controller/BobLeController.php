<?php

// src/Controller/BobLeController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BobLeController extends Controller
{
  /**
  * @Route("/home", name="home")
  */
  public function home()
  {
    return $this->render('base.html.twig');
  }
  /**
  * @Route("/about", name="about")
  */
  public function about()
  {
    return $this->render('about.html.twig');
  }
  /**
  * @Route("/contact", name="contact")
  */
  public function contact()
  {
    return $this->render('contact.html.twig');
  }
  /**
  * @Route("/save_project", name="save_project")
  */
  public function project()
  {
    return $this->render('save_projet.html.twig');
  }
  /**
  * @Route("/login", name="login")
  */
  public function login(Request $request, AuthenticationUtils $authenticationUtils)
  {
    $error = $authenticationUtils->getLastAuthenticationError();

    $lastUsername = $authenticationUtils->getLastUsername();
    return $this->render('login.html.twig', array(
      'last_username' => $lastUsername,
      'error'         => $error,
    ));
  }
}

?>
