<?php

namespace App\Controller;

use App\Entity\Reservations;
use App\Form\ReservationsType;
use App\Repository\ReservationsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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

            $reservationsRepository->add($reservations, true);

            $email = (new Email())
                ->from($reservations->getEmail())
                ->to('damien.lataste@lapiscine.pro')
                ->subject($reservations->getEmail())
                ->text($reservations->getNom())
                ->text($reservations->getPrenom())
                ->text($reservations->getTel())
                ->text($reservations->getEmail())
                ->text($reservations->getDateReservation())
                ->text($reservations->getNbPersonnes())
                ->text($reservations->getContraintes());

            $mailer->send($email);

            if ($email->sender($email)){
                $this->addFlash('success', 'Votre demande de réservation à bien été transmise, un mail de confirmation vous sera envoyé pour valider votre réservation');
            }
            return $this->redirectToRoute('reservationOnline');
        }

        return $this->render('reservation_front/index_resa.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}