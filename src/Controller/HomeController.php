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
        return $this->render('boissons.html.twig', [
            'boissons' => [
                'Coca',
                'Orangina',
                'Vin rouge',
                'Sprite',
                'Eau',
                'Badoit',
                'Rosé',
                'Vodka'
            ],
            'date' => new \DateTime(),
        ]);
    }

    /**
     * @Route(path="/boisson/show/{boisson}", name="boisson_show")
     * @param Request $request
     * @param string $boisson
     * @return Response
     *
     * On utilise le parameter converter de Symfony pour récupérer le paramètre de la route
     */
    public function boissonShow(Request $request, string $boisson): Response
    {
        return $this->render('boisson_show.html.twig', [
//            'boisson' => $request->get('boisson')
            'boisson' => $boisson,
        ]);
    }

    /**
     * @Route(path="/contact", name="contact_action")
     */
    public function contactAction() {
        return $this->render('cours.html.twig');
    }

}
