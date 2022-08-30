<?php

namespace App\Controller;

use App\Entity\Menu;
use App\Form\MenuType;
use App\Repository\CategoryRepository;
use App\Repository\MenuRepository;
use App\Repository\MetRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

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
        return $this->render('admin/menu/index.html.twig', [
            'menus' => $menu,
            'met' => $metRepository->findAll(),
            'category' => $categoryRepository->findAll(),
        ]);
    }

    /**
     * @Route("admin/new", name="admin_app_menu_new", methods={"GET", "POST"})
     */
    public function new(SluggerInterface $slugger, Request $request, MenuRepository $menuRepository, MetRepository $metRepository): Response
    {
        $menu = new Menu();
        $form = $this->createForm(MenuType::class, $menu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Je vérifie que le formulaire contient une image et je n'applique la
            //récupération et la modification que s'il contient un fichier image
            if (!$form->has('image')){
                // Je récupère le fichier image depuis le formulaire
                $image = $form->get('image')->getData();
                // Je récupère le nom original du fichier
                $originalFileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                // J'utilise une instance de la classe slugger et sa méthode slug
                // pour supprimer les caractères spéciaux et espace du nom de fichier
                $safeFileName = $slugger->slug($originalFileName);
                //Je rajoute au nom de fichier, un identifiant unique (en cas de doublon)
                $fileName = $safeFileName.'-'.uniqid().'.'.$image->guessExtension();
                //Je déplace l'image dans le dossier public une fois renommée avec le nom créé
                $image->move(
                    $this->getParameter('images_directory'),
                    $fileName
                );
                $menu->setImage($fileName);
            }
            $menuRepository->add($menu, true);

            return $this->redirectToRoute('admin_app_menu_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/menu/new.html.twig', [
            'menu' => $menu,
            'form' => $form
        ]);
    }

    /**
     * @Route("admin/menu/{id}", name="admin_app_menu_show", methods={"GET"})
     */
    public function show(Menu $menu): Response
    {
        return $this->render('admin/menu/show.html.twig', [
            'menu' => $menu,
        ]);
    }

    /**
     * @Route("admin/menu/{id}/edit", name="admin_app_menu_edit", methods={"GET", "POST"})
     */
    public function edit(SluggerInterface $slugger, Request $request, Menu $menu, MenuRepository $menuRepository): Response
    {

        $form = $this->createForm(MenuType::class, $menu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Je vérifie que le formulaire contient une image et je n'applique la
            //récupération et la modification que s'il contient un fichier image
            if (!$form->has('image')){
                // Je récupère le fichier image depuis le formulaire
                $image = $form->get('image')->getData();
                // Je récupère le nom original du fichier
                $originalFileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                // J'utilise une instance de la classe slugger et sa méthode slug
                // pour supprimer les caractères spéciaux et espace du nom de fichier
                $safeFileName = $slugger->slug($originalFileName);
                //Je rajoute au nom de fichier, un identifiant unique (en cas de doublon)
                $fileName = $safeFileName.'-'.uniqid().'.'.$image->guessExtension();
                //Je déplace l'image dans le dossier public une fois renommée avec le nom créé
                $image->move(
                    $this->getParameter('images_directory'),
                    $fileName
                );
                $menu->setImage($fileName);
            }
            $menuRepository->add($menu, true);

            return $this->redirectToRoute('admin_app_menu_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/menu/edit.html.twig', [
            'menu' => $menu,
            'form' => $form,
        ]);
    }

    /**
     * @Route("admin/deleteMenu/{id}", name="admin_app_menu_delete", methods={"POST"})
     */
    public function delete(Request $request, Menu $menu, MenuRepository $menuRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$menu->getId(), $request->request->get('_token'))) {
            $menuRepository->remove($menu, true);

        }

        return $this->redirectToRoute('admin_app_menu_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("admin/menu/pdf/{id}", name="admin_menu_pdf")
     */
    public function toPdf($id, MenuRepository $menuRepository, MetRepository $metRepository, CategoryRepository $categoryRepository)
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        $menu =$menuRepository->find($id);
        $met = $metRepository->findAll();
        $category = $categoryRepository->findAll();
        $entree = $categoryRepository->find('1');
        $plat = $categoryRepository->find('2');
        $dessert = $categoryRepository->find('3');

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('admin/pdf/pdf.html.twig', [
            'menu' => $menu,
            'met' => $met,
            'category' => $category,
            'entree' => $entree,
            'plat' => $plat,
            'dessert' => $dessert,
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("menu.pdf", [
            "Attachment" => false
        ]);
    }
}