<?php

namespace App\Repository;

use App\Entity\UserCuit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UserCuit>
 *
 * @method UserCuit|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserCuit|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserCuit[]    findAll()
 * @method UserCuit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserCuitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserCuit::class);
    }

    public function add(UserCuit $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(UserCuit $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return UserCuit[] Returns an array of UserCuit objects
     */
    public function findAllOnlyCuit(): array
    {
        return $this->createQueryBuilder('u')
            ->select('u.cuit')
            ->orderBy('u.apellido', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findOneByCuit($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.cuit = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getArrayResult()

        ;
    }
}
