<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminReservationController extends AbstractController
{
    /**
     * @Route("admin/reservation", name="index_reservation")
     */
    public function indexReservation(): Response
    {
        return $this->render('admin/reservation/index_resa.html.twig');
    }
}