<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Prove;

class UserController extends AbstractController{


    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    public function getProveedores(EntityManagerInterface $entityManager): Response
    {
        $listProveedores = $entityManager->getRepository(Prove::class)->findBy([], ['nombre' => 'ASC']);
        return $this->render('proveedor/proveedores.html.twig', [
            'listProveedores' => $listProveedores
        ]);
    }




    public function createProveedor(Request $request): Response
    {
        $proveedores = new \App\Entity\Prove();
        $form_prove = $this->createForm(\App\Form\ProveedorType::class, $proveedores);
        $form_prove -> handleRequest($request);

        if($form_prove->isSubmitted() && $form_prove->isValid()){
            $proveedores->setActivo(1);
            $dateTime = new \DateTime();
            $proveedores->setFechaRegistro($dateTime);
            $this->entityManager->persist($proveedores);
            $this->entityManager->flush();
            $this->addFlash('success', 'Proveedor creado exitosamente.');
            return $this->redirectToRoute('getProveedores');
        }

        return $this->render('proveedor/create_proveedor.html.twig', [
            'form_prove' => $form_prove->createView()
            
        ]);
    }


    public function updateProveedor(Request $request, $id): Response
    {
        $em = $this->entityManager;
        $proveedores = $em ->getRepository(Prove::class)->find($id);
        $form_prove = $this->createForm(\App\Form\ProveedorType::class, $proveedores);
        $form_prove -> handleRequest($request);

        if($form_prove->isSubmitted() && $form_prove->isValid()){
            $dateTime = new \DateTime();
            $proveedores->setFechaMod($dateTime);
            $em->persist($proveedores);
            $em->flush();

            return $this->redirectToRoute('getProveedores');

        }
        return $this->render('proveedor/update_proveedor.html.twig', [
            'form_prove' => $form_prove->createView()
            
        ]);
    }





    public function deleteProveedor($id): Response
    {
        $em = $this->entityManager;
        $proveedores = $em ->getRepository(Prove::class)->find($id);
        
        $proveedores->setActivo(0);
        $em ->persist($proveedores);
        $em ->flush();
        
        return $this->redirectToRoute('getProveedores');
    }
    
    public function returnProveedor($id): Response
    {
        $em = $this->entityManager;
        $proveedores = $em ->getRepository(Prove::class)->find($id);
        
        $proveedores->setActivo(1);
        $em ->persist($proveedores);
        $em ->flush();
        
        return $this->redirectToRoute('getProveedores');
    }

}
 