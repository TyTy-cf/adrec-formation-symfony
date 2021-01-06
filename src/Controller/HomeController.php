<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route(path="/", name="home_page")
     */
    public function homePage(): Response
    {
        for($i = 0; $i < 10; $i++);
        $sentence  = "On est fort en pomme";
        $boissons = ['Coca', 'Orangina', 'Vin rouge', 'Sprite'];
        return $this->render('boissons.html.twig', [
            'compteur' => $i,
            'sentence' => $sentence,
            'boissons' => $boissons,
        ]);
    }

}
