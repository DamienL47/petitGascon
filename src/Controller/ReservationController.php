<?php

namespace App\Controller;

use App\Entity\Reservations;
use App\Form\Reservations1Type;
use App\Repository\ReservationsRepository;
use App\Repository\StatusRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class ReservationController extends AbstractController
{

    /**
     * @Route("/reservationOnline", name="reservationOnline")
     * @throws TransportExceptionInterface
     */
    public function newReservation(Request $request, ReservationsRepository $reservationsRepository, MailerInterface $mailer, StatusRepository $statusRepository): Response
    {
        $reservation = new Reservations();
        $form = $this->createForm(Reservations1Type::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = (new TemplatedEmail())
                ->from('contact@lemoulindupetitgascon.fr')
                ->to($reservation->getEmail())
                ->subject('Votre demande de réservation est en attente de validation par le restaurant')
                ->htmlTemplate('admin/reservation/MailReservationAttente.html.twig')
                ->context([
                    'reservation' => $reservation,
                ]);

                $mailer->send($email);
                $this->addFlash('success', 'Votre demande de réservation à bien été transmise, un mail de confirmation vous sera envoyé dès que le restaurant aura validé votre réservation');
                $reservationsRepository->add($reservation, true);

            return $this->redirectToRoute('reservationOnline', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation_front/index_resa.html.twig', [
            'reservation' => $reservation,
            'form' => $form
        ]);
    }
}