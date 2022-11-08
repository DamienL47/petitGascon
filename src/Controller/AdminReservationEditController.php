<?php

namespace App\Controller;

use App\Entity\Reservations;
use App\Form\Reservations1Type;
use App\Repository\ContactRepository;
use App\Repository\ReservationsRepository;
use App\Repository\StatusRepository;
use App\Services\MailerService;
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

/**
 * @Route("/admin/reservation/edit")
 */
class AdminReservationEditController extends AbstractController
{
    /**
     * @Route("admin/reservation/list", name="app_admin_reservation_edit_index", methods={"GET"})
     */
    public function index(ReservationsRepository $reservationsRepository, StatusRepository $statusRepository): Response
    {
        return $this->render('admin/reservation/index_resa.html.twig', [
            'reservations' => $reservationsRepository->findAll(),
            'status' => $statusRepository->findAll(),
        ]);
    }

    /**
     * @Route("admin/reservation/new", name="app_admin_reservation_edit_new", methods={"GET", "POST"})
     * @throws TransportExceptionInterface
     */
    public function new(Request $request, ReservationsRepository $reservationsRepository, MailerInterface $mailer, ContactRepository $contactRepository): Response
    {
        $reservations = new Reservations();
        $form = $this->createForm(Reservations1Type::class, $reservations);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $email = (new TemplatedEmail())
                ->from('contact@lemoulindupetitgascon.fr')
                ->to($reservations->getEmail())
                ->subject('Votre demande de réservation est validé par le restaurant')
                ->htmlTemplate('admin/reservation/MailReservationOk.html.twig')
                ->context([
                    'reservation' => $reservations,
                ]);
            $mailer->send($email);
            $reservationsRepository->add($reservations, true);
            return $this->redirectToRoute('admin_dashboard', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/admin_reservation_edit/new.html.twig', [
            'form' => $form,
            'reservations' => $reservations,
            'contact' => $contactRepository->findAll(),
        ]);
    }

    /**
     * @Route("admin/reservation/{id}/show", name="app_admin_reservation_edit_show", methods={"GET", "POST"})
     */
    public function show(Reservations $reservation, ReservationsRepository $reservationsRepository, StatusRepository $statusRepository): Response
    {
        return $this->render('admin/admin_reservation_edit/show.html.twig', [
            'reservation' => $reservation,
            'status' => $statusRepository->findAll(),
        ]);
    }

    /**
     * @Route("admin/reservation/{id}/edit", name="app_admin_reservation_edit_edit", methods={"GET", "POST"})
     * @throws TransportExceptionInterface
     */
    public function edit(Request $request, Reservations $reservation, ReservationsRepository $reservationsRepository, StatusRepository $statusRepository, MailerInterface $mailer, MailerService $mailerService): Response
    {
        $form = $this->createForm(Reservations1Type::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $form->getData();
            if ($reservation->getStatusId() == '1') {

                $email = (new TemplatedEmail())
                    ->from('contact@lemoulindupetitgascon.fr')
                    ->to($reservation->getEmail())
                    ->subject('Votre demande de réservation à bien été prise en compte')
                    ->htmlTemplate('admin/reservation/MailReservationOk.html.twig')
                    ->context([
                        'reservation' => $reservation,
                        $form->getData(),
                    ]);
                try {
                    $mailer->send($email);

                    $this->addFlash('success', 'Vous avez bien validé la réservation');
                } catch (TransportExceptionInterface $e) {
                    return new Response("Le mail d'attente n'a pas été envoyé". $e);
                }

            } elseif ($reservation->getStatusId() == '2') {
                $email = (new TemplatedEmail())
                    ->from('contact@lemoulindupetitgascon.fr')
                    ->to($reservation->getEmail())
                    ->subject('Votre demande de réservation est en attente de validation par le restaurant')
                    ->htmlTemplate('admin/reservation/MailReservationAttente.html.twig')
                    ->context([
                        'reservation' => $reservation,
                        $form->getData(),
                    ]);
                try {
                    $mailer->send($email);

                    $this->addFlash('success', 'Vous avez bien mis en attente la réservation');
                } catch (TransportExceptionInterface $e) {
                    return new Response("Le mail d'attente n'a pas été envoyé". $e);
                }

            } elseif ($reservation->getStatusId() == '3') {
                $email = (new TemplatedEmail())
                    ->from('contact@lemoulindupetitgascon.fr')
                    ->to($reservation->getEmail())
                    ->subject('Votre demande de réservation a été refusé par le restaurant')
                    ->htmlTemplate('admin/reservation/MailReservationRefus.html.twig')
                    ->context([
                        'reservation' => $reservation,
                        $form->getData(),
                    ]);
                try{
                    $mailer->send($email);

                    $this->addFlash('success', 'Vous avez refusé la réservation');
                } catch (TransportExceptionInterface $e) {
                return new Response("Le mail de refus n'a pas été envoyé". $e);
            }

            } elseif ($reservation->getStatusId() == null) {
                try {
                    $mailerService->send(
                        "Nouvelle demande de réservation client",
                        "contact@lemoulindupetitgascon.fr",
                        $reservation->getEmail(),
                        "templatesMails/templateResa.html.twig", [
                            "nom" => $reservation->getNom(),
                            "prenom" => $reservation->getPrenom(),
                            "tel" => $reservation->getTel(),
                            "mail" => $reservation->getEmail(),
                            "Date de réservation" => $reservation->getDateReservation(),
                            "Nombre de personnes" => $reservation->getNbPersonnes(),
                            "Message" => $reservation->getContraintes(),
                        ]
                    );
                } catch (TransportExceptionInterface|LoaderError|RuntimeError|SyntaxError $e) {
                    return new Response("Le mail d'attente n'a pas été envoyé". $e);
                }

            } else {
                $email = (new TemplatedEmail())
                    ->from('contact@lemoulindupetitgascon.fr')
                    ->to($reservation->getEmail())
                    ->subject('Votre demande de réservation a été modifié par le restaurant')
                    ->htmlTemplate('admin/reservation/MailReservationModifier.html.twig')
                    ->context([
                        'reservation' => $reservation,
                    ]);
                $mailer->send($email);

                $this->addFlash('success', 'Vous avez bien mis en attente la réservation');
            }
            $reservationsRepository->add($reservation, true);
            return $this->redirectToRoute('admin_dashboard');

        }

        return $this->renderForm('admin/admin_reservation_edit/edit.html.twig', [
            'form' => $form,
            'reservation' => $reservation,
            'status' => $statusRepository->findAll(),
        ]);
    }

    /**
     * @Route("admin/reservation/{id}/delete", name="app_admin_reservation_edit_delete", methods={"POST"})
     */
    public function delete(Request $request, Reservations $reservation, ReservationsRepository $reservationsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getId(), $request->request->get('_token'))) {
            $reservationsRepository->remove($reservation, true);
        }

        return $this->redirectToRoute('admin_dashboard', [], Response::HTTP_SEE_OTHER);
    }
}
