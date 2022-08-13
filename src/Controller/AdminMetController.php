<?php

namespace App\Controller;

use App\Entity\Met;
use App\Form\MetType;
use App\Repository\MenuRepository;
use App\Repository\MetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/")
 */
class AdminMetController extends AbstractController
{
    /**
     * @Route("admin/mets", name="admin_app_met_index", methods={"GET"})
     */
    public function index(MetRepository $metRepository, MenuRepository $menuRepository): Response
    {
        return $this->render('admin/met/index.html.twig', [
            'mets' => $metRepository->findAll(),

        ]);
    }

    /**
     * @Route("admin/new_met", name="admin_app_met_new", methods={"GET", "POST"})
     */
    public function new(MenuRepository $menuRepository, Request $request, MetRepository $metRepository): Response
    {
        $met = new Met();
        $form = $this->createForm(MetType::class, $met);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $metRepository->add($met, true);

            return $this->redirectToRoute('admin_app_met_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/met/new.html.twig', [
            'met' => $met,
            'form' => $form,
        ]);
    }

    /**
     * @Route("admin/met{id}", name="admin_app_met_show", methods={"GET"})
     */
    public function show(Met $met): Response
    {
        return $this->render('admin/met/show.html.twig', [
            'met' => $met,
        ]);
    }

    /**
     * @Route("admin/met/{id}/edit", name="admin_app_met_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Met $met, MetRepository $metRepository): Response
    {
        $form = $this->createForm(MetType::class, $met);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $metRepository->add($met, true);

            return $this->redirectToRoute('admin_app_met_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/met/edit.html.twig', [
            'met' => $met,
            'form' => $form,
        ]);
    }

    /**
     * @Route("admin/delete_met/{id}", name="admin_app_met_delete", methods={"POST"})
     */
    public function delete(Request $request, Met $met, MetRepository $metRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$met->getId(), $request->request->get('_token'))) {
            $metRepository->remove($met, true);
        }

        return $this->redirectToRoute('admin_app_met_index', [], Response::HTTP_SEE_OTHER);
    }
}
