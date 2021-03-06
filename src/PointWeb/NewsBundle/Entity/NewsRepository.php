<?php

namespace PointWeb\NewsBundle\Entity;
use PointWeb\AdminBundle\Entity\PagerRepository;


/**
 * NewsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */

class NewsRepository extends PagerRepository
{
        public function findLastNews()
    {
        $q = $this->createQueryBuilder('n');
        $q->addOrderBy('n.createDate', 'DESC')
            ->setMaxResults(1);
        $res = $q->getQuery();
        return $res->getResult();
    }
}
