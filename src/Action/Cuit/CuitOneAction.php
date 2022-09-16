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
    public function __invoke(string $cuit)
    {

        return new JsonResponse($this->repository->findBy(['cuit' => $cuit]));
    }
}