<?php

namespace App\Controller;

use App\Entity\Reservations;
use App\Form\ReservationsType;
use App\Repository\ReservationsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{

    /**
     * @Route("/reservationOnline", name="reservationOnline")
     * @throws TransportExceptionInterface
     */
    public function newReservation(Request $request, ReservationsRepository $reservationsRepository, MailerInterface $mailer, EntityManagerInterface $entityManager): Response
    {
        $reservations = new Reservations();
        $form = $this->createForm(ReservationsType::class, $reservations);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($reservations);
            $entityManager->flush();

            $email = (new Email())
                ->from($reservations->getEmail())
                ->to('damien.lataste@lapiscine.pro')
                ->subject($reservations->getEmail())
                ->html($reservations->getNom())
                ->html($reservations->getPrenom())
                ->html($reservations->getEmail());

            $mailer->send($email);

            $this->addFlash('success', 'Votre demande de réservation à bien été transmise, un mail de confirmation vous sera envoyé pour valider votre réservation');
            return $this->redirectToRoute('reservationOnline');
        }

        return $this->render('reservation_front/index_resa.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}