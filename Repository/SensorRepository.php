<?php

namespace amillot\MechanicalBundle\Repository;

use amillot\MechanicalBundle\Entity\Sensor;
use amillot\MechanicalBundle\Model\SensorInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SensorInterface|null find($id, $lockMode = null, $lockVersion = null)
 * @method SensorInterface|null findOneBy(array $criteria, array $orderBy = null)
 * @method SensorInterface[]    findAll()
 * @method SensorInterface[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SensorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $prmRegistry)
    {
        parent::__construct($prmRegistry, Sensor::class);
    }
}