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
  public function saveProject()
  {
    return $this->render('save_projet.html.twig');
  }
  /**
  * @Route("/project1", name="project1")
  */
  public function project1()
  {
    return $this->render('projet1.html.twig');
  }
  /**
  * @Route("/project2", name="project2")
  */
  public function project2()
  {
    return $this->render('projet2.html.twig');
  }
  /**
  * @Route("/project3", name="project3")
  */
  public function project3()
  {
    return $this->render('projet3.html.twig');
  }
  /**
  * @Route("/project4", name="project4")
  */
  public function project4()
  {
    return $this->render('projet4.html.twig');
  }
  /**
  * @Route("/project5", name="project5")
  */
  public function project5()
  {
    return $this->render('projet5.html.twig');
  }
  /**
  * @Route("/project6", name="project6")
  */
  public function project6()
  {
    return $this->render('projet6.html.twig');
  }
  /**
  * @Route("/project7", name="project7")
  */
  public function project7()
  {
    return $this->render('projet7.html.twig');
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
