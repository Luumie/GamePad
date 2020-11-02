<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\InfosUserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

class InfosUserController extends AbstractController
{
    /* private $entityManager;
    private $repository;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->repository = $this->entityManager->getRepository(User::class);
    } */
    /**
     * @Route("/infos/{id}/user", name="infos_user")
     */
    public function index(Request $request, EntityManagerInterface $em, User $user)
    {
        $form = $this->createForm(InfosUserType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            dd($data); //dump&die 

            /* $user = new User();

            $user->setUsername($this->getUser());          // récupère l'id du user
            $user->setEntreprise($data['entreprise']);       
            $user->setLogo($data['logo']);
            $user->setPresentation($data['presentation']);
            $user->setAdresseRue($data['adresse_rue']);
            $user->setAdresseCode($data['adresse_code']);
            $user->setAdresseVille($data['adresse_ville']);
            $user->setInternet($data['internet']); */

            //dd($user);

            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Informations mises à jour');

            return $this->redirectToRoute('accueil', [
                'id' => $user->getId(),
            ]);
        }

        return $this->render('infos_user/index.html.twig', [
            'userForm' => $form->createView()
        ]);
    }
}


