<?php

namespace App\Controller;

use App\Entity\Admin;
use App\Form\AdminType;
use App\Form\RegistrationFormType;
use App\Repository\AdminRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;



class AdminController extends AbstractController
{

    // CREATE
    /**
     * @Route("admin/create_admin", name="create_admin")
     */
    public function createAdmin(AdminRepository $user, TranslatorInterface $translator, Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $userPasswordHasher)
    {
        //Je créé une instance de la classe admin
        $admin = new Admin();

        //je défini le rôle par défaut pour l'admin
        $admin->setRoles(["ROLE_ADMIN"]);

        //Je génère la vue du formulaire d'ajout d'admin
        $form = $this->createForm(RegistrationFormType::class, $admin);

        //J'utilise l'instance de classe Request pour récupérer les valeurs saisies dans le formulaire
        $form->handleRequest($request);

        //Je défini les conditions avant d'envoyer les informations en base de données
        if ($form->isSubmitted() && $form->isValid()){

            //ici je récupère la saisie brute du mot de passe
            $passwordAdmin = $form->get('password')->getData();

            //j'utilise la classe UserPasswordHasherInterface pour crypter le mote de passe
            $hashedPassword = $userPasswordHasher->hashPassword($admin, $passwordAdmin);

            //j'affecte le mot de passe crypté à l'admin
            $admin->setPassword($hashedPassword);

            $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

            //J'utilise la classe EntityManager et la fonction persist pour préparer l'envoie vers la BDD
            $entityManager->persist($admin);

            //J'utilise la fonction flush de l'entity manager pour envoyer les données dans ma BDD
            $entityManager->flush();

            //J'affiche un message flash de succès
            $this->addFlash('success', 'Nouvel admin enregistré');

            //Je redirige vers la page de liste des admins
            return $this->redirectToRoute('admin_list', [], Response::HTTP_SEE_OTHER);

        }
        // Je défini la page sur laquelle j'affiche le formulaire de création d'admin
        return $this->render('admin/registration/register.html.twig', [
            'admin' => $admin,
            'registrationForm' => $form->createView()
        ]);
    }

    // READ

    /**
     * @Route("admin/admins_list", name="admin_list")
     */
    public function listAdmin(AdminRepository $adminRepository)
    {
        // j'utilise l'instance de classe User Repository pour afficher toutes les données de ma BDD
        $admins = $adminRepository->findAll();
        // J'affiche le résultat sur une page twig avec la méthode render
        return $this->render('admin/admins.html.twig', [
            //Je parametre 'admins' pour appeler les éléments de ma base de données
            'admins' => $admins
        ]);
    }

    // UPDATE

    /**
     * @Route("/admin/update_admin/{id}", name="admin_update")
     */
    public function updateAdmin(Request $request, EntityManagerInterface $entityManager, Admin $admin, AdminRepository $adminRepository, UserPasswordHasherInterface $userPasswordHasher)
    {
        $form = $this->createForm(AdminType::class, $admin);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $adminRepository->add($admin, true);
            $adminPassword = $form->get('password')->getData();
            $adminMail = $form->get('email')->getData();
            $hashedPassword = $userPasswordHasher->hashPassword($admin, $adminPassword);
            $admin->setPassword($hashedPassword);
            $admin->setEmail($adminMail);
            $entityManager->persist($admin);
            $entityManager->flush();

            $this->addFlash('success', 'Modifié avec succès');

            return $this->redirectToRoute('admin_list');

        }
        return $this->renderForm('admin/update_admin.html.twig', [
            'admin' => $admin,
            'form' => $form,
        ]);
    }


    // DELETE

    /**
     * @Route("/admin/delete_admin{id}", name="admin_delete")
     */
    public function deleteAdmin($id, AdminRepository $adminRepository, EntityManagerInterface $entityManager)
    {
        $admin = $adminRepository->find($id);
        if (!is_null($admin)) {
            $entityManager->remove($admin);
            $entityManager->flush();
            $this->addFlash('success', 'Admin supprimé');
            return $this->redirectToRoute('admin_list');
        } else {
            return new Response('Admin inexistant');
        }
    }
}