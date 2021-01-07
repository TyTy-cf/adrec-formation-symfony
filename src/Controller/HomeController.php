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
                'b5' => 'Eau',
                'b6' => 'Badoit',
                'b7' => 'Rosé',
                'b8' => 'Vodka',
            ],
            'date' => new \DateTime(),
        ]);
    }


    /**
     * @Route(path="/boisson/show/{boisson}", name="boisson_show")
     * @param Request $request
     * @return Response
     */
    public function boissonShow(Request $request): Response
    {
        return new Response("Je suis sur la boisson : " . $request->get('boisson'));
    }

    /**
     * @Route(path="/contact", name="contact_action")
     */
    public function contactAction() {
        return $this->render('cours.html.twig');
    }
}
