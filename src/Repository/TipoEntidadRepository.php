<?php

namespace App\Repository;

use App\Entity\TipoEntidad;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TipoEntidad>
 *
 * @method TipoEntidad|null find($id, $lockMode = null, $lockVersion = null)
 * @method TipoEntidad|null findOneBy(array $criteria, array $orderBy = null)
 * @method TipoEntidad[]    findAll()
 * @method TipoEntidad[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipoEntidadRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TipoEntidad::class);
    }

//    /**
//     * @return TipoEntidad[] Returns an array of TipoEntidad objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TipoEntidad
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
