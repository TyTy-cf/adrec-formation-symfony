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
            'boissons' => ['Eau', 'Badoit', 'Rosé', 'Vodka'],
        ]);
    }

    /**
     * @Route(path="/boisson/show/{boisson}", name="boisson_show")
     * @param Request $request
     * @return Response
     */
    public function boissonShow(Request $request): Response
    {
        $boisson = $request->get('boisson');
        return $this->render('boisson.html.twig', [
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
