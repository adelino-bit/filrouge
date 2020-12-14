<?php

namespace App\Controller;

use App\Entity\User;
use App\Services\UserServices;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{

private $service;
private $password;
public function __construct(UserServices $service)
{
$this->service = $service;
}
/**
* @Route(
* name="add_user",
* path="/api/admin/users",
* methods="POST",
* 
* )
*/
public function addUser(Request $request, EntityManagerInterface $manager ){
$user = $this->service->addUser($request);
//dd($user);
$manager->persist($user);
$manager ->flush();
return $this->json("Ajout utilisateur réussi",Response::HTTP_CREATED);

}
/**
* @Route(
* name="update",
* path="/api/admin/users/{id}",
* methods="PUT",
* )
*/
public function update(int $id,Request $request,EntityManagerInterface $manager,UserRepository $userReposi)
{
$user = $UserServices->update($id,$request,$userReposi);
$manager->persist($user);
$manager ->flush();
return $this->json($user,Response::HTTP_CREATED);

}


}
