<?php

namespace App\Action\Cuit;

use App\Repository\UserCuitRepository;
use Doctrine\ORM\NoResultException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Serializer;

class CuitOneAction
{
    /**
     * @var UserCuitRepository
     */
    private $repository;


    /**
     * @param UserCuitRepository $repository
     */
    public function __construct(UserCuitRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     */
    public function __invoke(string $id)
    {
$user_cuit = $this->repository->findOneByCuit($id);


        return new JsonResponse($user_cuit);
    }
}