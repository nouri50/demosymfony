<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(): Response
    {
        $product = new Product();
        $product->setNom('Product Name');
        $product->setPrix(99.99);

        return $this->render('product/index.html.twig', [
            'product' => $product,
        ]);
    }
}
