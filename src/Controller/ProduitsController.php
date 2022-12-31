<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Form\ProduitsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitsController extends AbstractController
{
    #[Route('/produits', name: 'app_produits')]
    public function index(): Response
    {
        return $this->render('produits/index.html.twig', [
            'controller_name' => 'ProduitsController',
        ]);
    }
    #[Route('/ecom/produit', name: 'ecom_produit')]
    public function ecom_produit(Request $request): Response
    {
        $Produits = new Produits();
        $form = $this->createForm(ProduitsType::class,$Produits);

        return $this->renderForm('produits/create.html.twig', [
            'form' => $form,
        ]);
    }
}
