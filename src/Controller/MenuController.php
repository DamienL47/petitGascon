<?php

namespace App\Controller;

use App\Entity\Menu;
use App\Entity\Met;
use App\Form\MenuType;
use App\Repository\CategoryRepository;
use App\Repository\MenuRepository;
use App\Repository\MetRepository;
use phpDocumentor\Reflection\Types\String_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/menu")
 */
class MenuController extends AbstractController
{
    /**
     * @Route("/menu", name="app_menu_index", methods={"GET"})
     */
    public function index(MenuRepository $menuRepository, CategoryRepository $categoryRepository, MetRepository $metRepository): Response
    {
        $menu = $menuRepository->findAll();
        $categories = $categoryRepository->findAll();
        $met = $metRepository->findAll();

        return $this->render('menu_front/index.html.twig', [
            'menus' => $menu,
            'met' => $met,
            'category' => $categories,
        ]);
    }

    /**
     * @Route("/menu/{id}", name="app_menu_show", methods={"GET"})
     */
    public function show(Menu $menu): Response
    {
        return $this->render('menu_front/show.html.twig', [
            'menu' => $menu,
        ]);
    }
}
