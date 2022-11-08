<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Services\MailerService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="app_contact")
     * @throws TransportExceptionInterface
     */
    public function index(MailerService $mailerService, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $contact = $form->getData();
            $entityManager->persist($contact);
            $entityManager->flush();

            // Email
            try {
                $mailerService->send(
                    "Nouvelle demande de contact client",
                    "admin@test.fr",
                    "damien.lataste@lapiscine.pro",
                    "contact/templateMailContact.html.twig", [
                        "nom" => $contact->getNom(),
                        "prenom" => $contact->getPrenom(),
                        "tel" => $contact->getTel(),
                        "email" => $contact->getEmail(),
                        "sujet" => $contact->getSujet(),
                        "message" => $contact->getMessage(),
                    ]
                );
            } catch (TransportExceptionInterface|LoaderError|RuntimeError|SyntaxError $e) {
            }

            $this->addFlash('success', 'Votre demande à bien été transmise, nous vous répondrons dans les meilleurs délais, Merci. ');
            return $this->redirectToRoute('app_contact');
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}