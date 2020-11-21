<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\ClientType;
use App\Repository\ClientRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientController extends AbstractController
{


    /**
     * @Route("/client", name="client_all")
     */
    public function client(ClientRepository $repo)
    {
        return $this->render("client/clientAll.html.twig",[
            'clients' => $repo->findAll()
        ]);
    }

    /**
     * @Route("/client/new", name="client_new")
     */
    public function clientNew(Request $request, EntityManagerInterface $manager)
    {
        $client = new Client();

        $form = $this->createForm(ClientType::class, $client);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $manager->persist($client);
            $manager->flush();

            $this->addFlash(
                "success",
                "تمت إضافة الزبون <strong>{$client->getNom()}</strong> بنجاح"
            );

            return $this->redirectToRoute("client_new");
        }
        return $this->render('client/clientNew.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
