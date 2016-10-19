<?php
// src/Acme/DemoBundle/Controller/MainController.php
namespace AppBundle\Controller;
 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 
class MainController extends Controller
{
    public function homeAction()
    {
        return new Response('<h1>Whats up broh</h1>');
    }
}
