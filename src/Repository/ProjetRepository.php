<?php

namespace App\Repository;

use App\Entity\Photo;
use App\Entity\Projet;
use App\Entity\Categorie;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Projet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Projet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Projet[]    findAll()
 * @method Projet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Projet::class);
    }

    /* -----------------------------------------------------
    Fonction permettant de trouver les projets qui ont pour 
    statut 1 
    ------------------------------------------------------*/
    
    /**
     * @return Projet[] Return an array of peinture objects
     */
    public function findAllActualite(Categorie $categorie): array
    {
        return $this->createQueryBuilder('p')
            ->where(':categorie MEMBER OF p.categorie')
            ->andWhere('p.statut = 1')
            ->setParameter('categorie', $categorie)
            ->getQuery()
            ->getResult();
    }

}
