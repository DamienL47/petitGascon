<?php

namespace App\Controller;

use App\Entity\Reservations;
use App\Form\Reservations1Type;
use App\Repository\ReservationsRepository;
use App\Repository\StatusRepository;
use App\Services\MailerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class ReservationController extends AbstractController
{

    /**
     * @Route("/reservationOnline", name="reservationOnline")
     */
    public function newReservation(Request $request, ReservationsRepository $reservationsRepository, MailerService $mailerService, StatusRepository $statusRepository): Response
    {
        $reservation = new Reservations();
        $form = $this->createForm(Reservations1Type::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $mailerService->send(
                    "Nouvelle demande de contact client",
                    "app@mailhog.local",
                    "test@mailhog.local",
                    "templatesMails/templateResa.html.twig", [
                        "reservation" => $form->getData(),
                        "nom" => $reservation->getNom(),
                        "prenom" => $reservation->getPrenom(),
                        "tel" => $reservation->getTel(),
                        "email" => $reservation->getEmail(),
                        "Date de réservation" => $reservation->getDateReservation(),
                        "Nombre de personnes" => $reservation->getNbPersonnes(),
                        "Message" => $reservation->getContraintes(),
                    ]
                );
            } catch (TransportExceptionInterface|LoaderError|RuntimeError|SyntaxError $e) {
                return new Response("Le mail n'a pas pu être envoyé".$e);
            }
            $reservationsRepository->add($reservation, true);
            $this->addFlash('success', 'Votre demande de réservation à bien été transmise, un mail de confirmation vous sera envoyé dès que le restaurant aura validé votre réservation');
            return $this->redirectToRoute('reservationOnline', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation_front/index_resa.html.twig', [
            'reservation' => $reservation,
            'form' => $form
        ]);
    }
}