<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    

    /**
     * @Route("/produit/new", name="produit_new")
     */
    public function produitNew(Request $request, EntityManagerInterface $manager)
    {
        $produit = new Product();

        $form = $this->createForm(ProductType::class,$produit);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            
            //récupérer l'information saisie le champ "image" du formulaire
            $image = $form->get('image')->getData();

            if ($image){
                //guess->Extension() pour récupérer l'extension du fichier et md5(uniqid()) pour générer un code unique
                $fichier = md5(uniqid()).'.'.$image->guessExtension();
    
                //la fonction move() prend deux paramétres: le dossier dans lequel on va stocker le fichier et le fichier
                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );
                $produit->setImage($fichier);

            }

            
            $manager->persist($produit);
            $manager->flush();
            return $this->redirectToRoute('home');
        }
        return $this->render("produit/produitNew.html.twig", [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/produit/edit/{id}", name="produit_edit")
     */
    public function produitEdit(Request $request, EntityManagerInterface $manager, Product $produit)
    {
        $oldImage = $produit->getImage();
        
        
        $form = $this->createForm(ProductType::class, $produit);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){

            

            //récupérer l'information saisie le champ "image" du formulaire
            $image = $form->get('image')->getData();

            if ($image){
                //guess->Extension() pour récupérer l'extension du fichier et md5(uniqid()) pour générer un code unique
                $fichier = md5(uniqid()).'.'.$image->guessExtension();
    
                //la fonction move() prend deux paramétres: le dossier dans lequel on va stocker le fichier et le fichier
                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );
    
                $produit->setImage($fichier);
            }

            $manager->persist($produit);
            $manager->flush();
            $this->addFlash(
                "warning",
                "تم تعديل الطبق <strong>{$produit->getName()}</strong>"
            );
            return $this->redirectToRoute('home');
        }
        return $this->render("produit/produitEdit.html.twig",[
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/produit/delete/{id}", name="produit_delete")
     */
    public function produitDelete(EntityManagerInterface $manager, Product $produit)
    {
        
        $manager->remove($produit);
        $manager->flush();
        $this->addFlash(
            "warning",
            "تم حذف الطبق <strong>{$produit->getName()}</strong>"
        );
        return $this->redirectToRoute('home');
        
    }

    /**
     * @Route("/produit/show/{id}", name="produit_show")
     */
    public function produitShow(Product $produit){
        return $this->render('produit/produitShow.html.twig',[
            'produit' => $produit
        ]);
    }
}
