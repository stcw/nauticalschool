<?php

namespace Stcw\StudentBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * StudentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class StudentRepository extends EntityRepository
{

    public function findRelated($id)
    {
        $em = $this->getEntityManager();
        $query = $this->createQueryBuilder('s')
                ->addSelect('p')
                ->where('s.id = :id')
                ->join('s.profile', 'p')
                ->setParameter('id', $id)
                ->getQuery();

        return $query->getSingleResult();
    }

    public function findAllSort($sort = null)
    {
        if(is_null($sort)) $sort = 'lastname';
        
        $em = $this->getEntityManager();
        $query = $this->createQueryBuilder('s')
                ->addSelect('p')
                ->addSelect('c')
                ->join('s.profile', 'p')
                ->leftJoin('s.category', 'c')
                ->orderBy('s.'.$sort)
                ->getQuery();

        return $query->getResult();
    }

    public function findRelatedFor($id)
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('
            SELECT s, p FROM StcwStudentBundle:Student s
            JOIN s.profile p
            WHERE s.id = :id')
                ->setParameter('id', $id);

        return $query->getSingleResult();
    }
}