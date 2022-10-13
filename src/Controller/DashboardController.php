<?php

namespace App\Controller;



use App\Repository\AdminRepository;
use App\Repository\ContactRepository;
use App\Repository\ReservationsRepository;
use App\Repository\StatusRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DashboardController extends AbstractController
{

    /**
     * @Route("admin/dashboard", name="admin_dashboard")
     */
    public function dashboard(AdminRepository $adminRepository, ContactRepository $contactRepository, ReservationsRepository $reservationsRepository, StatusRepository $statusRepository): Response
    {
        $reservations = $reservationsRepository->findAll();

        return $this->render('admin/home.html.twig', [
            'admin' => $adminRepository->findAll(),
            'contact' => $contactRepository->findAll(),
            'reservations' => $reservations,
            'status' => $statusRepository->findAll(),
        ]);
    }
}