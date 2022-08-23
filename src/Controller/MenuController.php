<?php

namespace App\Controller;


use App\Repository\CategoryRepository;
use App\Repository\MenuRepository;
use App\Repository\MetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
    public function index(CategoryRepository $categoryRepository, MenuRepository $menuRepository, MetRepository $metRepository): Response
    {
        $menu = $menuRepository->findAll();
        $met = $metRepository->findAll();
        $category = $categoryRepository->findAll();
        $entree = $categoryRepository->find('1');
        $plat = $categoryRepository->find('2');
        $dessert = $categoryRepository->find('3');


        return $this->render('menu_front/index.html.twig', [
            'menus' => $menu,
            'met' => $met,
            'category' => $category,
            'entree' => $entree,
            'plat' => $plat,
            'dessert' => $dessert,
        ]);
    }
}
