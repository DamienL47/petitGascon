<?php

namespace App\Controller;


use App\Form\ContactType;
use App\Repository\ContactRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminContactController extends AbstractController
{

    /**
     * @Route("admin/dashboard/contact/{id}", name="admin_dashboard_contact")
     */
    public function setContact($id, ContactRepository $contactRepository, Request $request, EntityManagerInterface $entityManager): Response
    {
        $contact = $contactRepository->find($id);

        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($contact)
        {
            $contact->setLu(true);
            $entityManager->persist($contact);
            $entityManager->flush();

            return $this->redirectToRoute('admin_dashboard');
        }

        return $this->render('admin/home.html.twig', [
            'form' => $form
        ]);
    }

    /**
     * @Route("admin/dashboard/listeContact", name="liste_demande_contact")
     */
    public function listeContact(ContactRepository $contactRepository): Response
    {
        $contact = $contactRepository;

        if ($contact)
        {
            $contact = $contactRepository->findAll();
        }

        return $this->render('admin/contact_admin/listecontact.html.twig', [
            'contact'=> $contact
        ]);
    }
}