<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ProductRepository $repo): Response
    {
        return $this->render('home/home.html.twig',[
            'produits' => $repo->findAll()
        ]);
    }

    /**
     * @Route("/category/new", name="category_new")
     */
    public function addCategory(Request $request, EntityManagerInterface $manager)
    {
        $category = new Category();
        
        $form = $this->createForm(CategoryType::class,$category);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $manager->persist($category);
            $manager->flush();
            return $this->redirectToRoute('category_new');
        }
        return $this->render('home/categoryNew.html.twig',[
            'form' => $form->createView()
        ]);
    }

}
