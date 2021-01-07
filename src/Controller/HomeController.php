<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route(path="/", name="home_page")
     * @return Response
     */
    public function homePage(): Response
    {
        for($i = 0; $i < 10; $i++);
        return $this->render('boissons.html.twig', [
            'sentence' => "on est fort en pomme",
            'boissons' => [
                'b1' => 'Coca',
                'b2' => 'Orangina',
                'b3' => 'Vin rouge',
                'b4' =>  'Sprite',
                'Eau',
                'Badoit',
                'Rosé',
                'Vodka'
            ],
            'date' => new \DateTime(),
        ]);
    }

    /**
     * @Route(path="/allBoissons", name="boisson_show")
     * @param Request $request
     * @return Response
     */
    public function boissonShow(Request $request): Response
    {
        return $this->render('allBoissons.html.twig',['boissons']
        );
    }

    /**
     * @Route(path="/contact", name="contact_action")
     */
    public function contactAction() {
        return $this->render('cours.html.twig');
    }

}