<?php

namespace App\Controller;


use App\Repository\ProductRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;




class ProductController extends AbstractController
{

    private $ProductRepository;
    private $entityManager;
    public function __construct(ProductRepository $productRepository,
    ManagerRegistry $doctrine)
    {
        $this->productRepository= $productRepository;
        $this->entityManager=$doctrine->getManager();
    }
    #[Route('/product', name: 'product_list')]
    public function index(): Response
    {
        #khasni nzid wahd ->findall() lkhr d had str li ltht
        $products =$this->ProductRepository;
        return $this->renderForm('product/index.html.twig', [
            'products' => $products,
        ]);
    }
}
