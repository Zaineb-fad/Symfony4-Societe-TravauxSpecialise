<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    /**
     * @Route("/quisommesnous", name="quisommesnous")
     */
    public function quisommesnous(): Response
    {
        return $this->render('default/quisommesnous.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    /**
     * @Route("/service", name="service")
     */
    public function service(): Response
    {
        return $this->render('default/service.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    /**
     * @Route("/reference", name="reference")
     */
    public function reference(): Response
    {
        return $this->render('default/reference.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    /**
     * @Route("/alarme", name="alarme")
     */
    public function alarme(): Response
    {
        return $this->render('default/alarme.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    /**
     * @Route("/systemeintegre", name="systemeintegre")
     */
    public function systemeintegre(): Response
    {
        return $this->render('default/systemeintegre.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    /**
     * @Route("/telesurveillance", name="telesurveillance")
     */
    public function telesurveillance(): Response
    {
        return $this->render('default/telesurveillance.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    /**
     * @Route("/vedeosurveillance", name="vedeosurveillance")
     */
    public function vedeosurveillance(): Response
    {
        return $this->render('default/vedeosurveillance.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    /**
     * @Route("/controle", name="controle")
     */
    public function controle(): Response
    {
        return $this->render('default/controle.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
