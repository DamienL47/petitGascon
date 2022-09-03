<?php

namespace App\Controller;

use App\Entity\Menu;
use App\Entity\Met;
use App\Form\MetType;
use App\Repository\CategoryRepository;
use App\Repository\MenuRepository;
use App\Repository\MetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/")
 */
// Controller extends from the AbstractController
class AdminMetController extends AbstractController
{
    /**
     * @Route("admin/mets", name="admin_app_met_index", methods={"GET"})
     */
    public function index(MetRepository $metRepository, MenuRepository $menuRepository): Response
    {
        return $this->render('admin/met/index.html.twig', [
            'mets' => $metRepository->findAll(),
            'menu' => $menuRepository->findAll(),
        ]);
    }

    // I want to create a form in order to create some new dish in my database.
    // I use Annotations to create a route. it will be the URL name.
    /**
     * @Route("admin/new_met", name="admin_app_met_new", methods={"GET", "POST"})
     */
    // I create a public function for my controller. So the new() method will be called when a admin browses to it.
    public function new(MenuRepository $menuRepository, Request $request, MetRepository $metRepository, CategoryRepository $categoryRepository): Response
    {
        // I define a variable for class instance new Met()
        $met = new Met();
        // I call the form which was created before by using the class "MetType"
        $form = $this->createForm(MetType::class, $met);
        // I call the handleRequest to process form data
        $form->handleRequest($request);

        // I check that the form is submitted and valid in order for secure the input
        if ($form->isSubmitted() && $form->isValid()) {
            // I recove that form input from the menu entity in a variable for access to the menu_id data
            $menu = $menuRepository->find($form->get('menu_id')->getViewData());
            $category = $categoryRepository->find($form->get('category_id')->getViewData());
            // I add the menu data recover with my dish form
            $met->addMenu($menu);
            $met->setCategoryId($category);
            // I add the inputs from dish form and i recove and flush the datas in my database
            $metRepository->add($met, true);

            // I redirect to route after success
            return $this->redirectToRoute('admin_app_met_index', [], Response::HTTP_SEE_OTHER);
        }

        // this route display the "met" form
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
    public function edit(Request $request, Met $met, MetRepository $metRepository, MenuRepository $menuRepository, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MetType::class, $met);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $menu = $menuRepository->find($form->get('menu_id')->getViewData());
            $met->addMenu($menu);

            $entityManager->persist($met);
            $entityManager->flush();
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