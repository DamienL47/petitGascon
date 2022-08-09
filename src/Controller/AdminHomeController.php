<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminHomeController extends AbstractController
{

    /**
     * @Route("/admin", name="admin_home")
     */
    public function adminHome()
    {
        return $this->render('admin/base.html.twig');
    }
}