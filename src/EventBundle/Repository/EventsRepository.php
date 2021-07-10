<?php

namespace EventBundle\Repository;


class EventsRepository extends \Doctrine\ORM\EntityRepository
{
    public function findFF($titre){
    $qry=$this->getEntityManager()
        ->createQuery("SELECT COUNT (m) as qte FROM EventBundle:Events m WHERE m.cactegorie = :tit")
        ->setParameter(':tit',$titre);
    return $qry->getResult();
}
}
