<?php

namespace App\Controller;

use App\Entity\Menu;
use App\Entity\Met;
use App\Form\MenuType;
use App\Repository\CategoryRepository;
use App\Repository\MenuRepository;
use App\Repository\MetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/")
 */
class AdminMenuController extends AbstractController
{
    /**
     * @Route("admin/menus", name="admin_app_menu_index", methods={"GET"})
     */
    public function index(MenuRepository $menuRepository, MetRepository $metRepository, CategoryRepository $categoryRepository): Response
    {
        $menu = $menuRepository->findAll();
//        dd($menu);
        return $this->render('admin/menu/index.html.twig', [
            'menus' => $menu,
            'met' => $metRepository->findAll(),
            'category' => $categoryRepository->findAll(),
        ]);
    }

    /**
     * @Route("admin/new", name="admin_app_menu_new", methods={"GET", "POST"})
     */
    public function new(Request $request, MenuRepository $menuRepository, MetRepository $metRepository): Response
    {
        $menu = new Menu();
        $form = $this->createForm(MenuType::class, $menu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $menuRepository->add($menu, true);

            return $this->redirectToRoute('admin_app_menu_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/menu/new.html.twig', [
            'menu' => $menu,
            'met' => $metRepository->findAll(),
            'form' => $form,
        ]);
    }

    /**
     * @Route("admin/menu/{id}", name="admin_app_menu_show", methods={"GET"})
     */
    public function show(Menu $menu, Met $met): Response
    {
        return $this->render('admin/menu/show.html.twig', [
            'menu' => $menu,
            'met' => $met,
        ]);
    }

    /**
     * @Route("admin/menu/{id}/edit", name="admin_app_menu_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Menu $menu, MenuRepository $menuRepository, Met $met, MetRepository $metRepository): Response
    {
        $form = $this->createForm(MenuType::class, $menu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $menuRepository->add($menu, true);


            return $this->redirectToRoute('admin_app_menu_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/menu/edit.html.twig', [
            'met' => $met,
            'menu' => $menu,
            'form' => $form,
        ]);
    }

    /**
     * @Route("admin/deleteMenu/{id}", name="admin_app_menu_delete", methods={"POST"})
     */
    public function delete(Request $request, Menu $menu, MenuRepository $menuRepository, Met $met, MetRepository $metRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$menu->getId(), $request->request->get('_token'))) {
            $menuRepository->remove($menu, true);

        }

        return $this->redirectToRoute('admin_app_menu_index', [], Response::HTTP_SEE_OTHER);
    }
}
