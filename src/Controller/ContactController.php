<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="app_contact")
     */
    public function index(MailerInterface $mailer, Request $request, ContactRepository $contactRepository, EntityManagerInterface $entityManager): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $contact = $form->getData();
            $entityManager->persist($contact);
            $entityManager->flush();

            // Email
            $email = (new Email())
                ->from($contact->getEmail())
                ->to('admin@petitgascon.com')
                ->subject($contact->getSujet())
                ->html($contact->getMessage());

            $mailer->send($email);

            $this->addFlash('success', 'Votre demande à bien été transmise, nous vous répondrons dans les meilleurs délais, Merci. ');
            return $this->redirectToRoute('app_contact');
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
