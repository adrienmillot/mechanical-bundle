<?php

namespace amillot\MechanicalBundle\Repository;

use amillot\MechanicalBundle\Entity\SensorParameter;
use amillot\MechanicalBundle\Model\SensorParameterInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SensorParameterInterface|null find($id, $lockMode = null, $lockVersion = null)
 * @method SensorParameterInterface|null findOneBy(array $criteria, array $orderBy = null)
 * @method SensorParameterInterface[]    findAll()
 * @method SensorParameterInterface[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SensorParameterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $prmRegistry)
    {
        parent::__construct($prmRegistry, SensorParameter::class);
    }
}