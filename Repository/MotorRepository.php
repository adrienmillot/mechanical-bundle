<?php

namespace amillot\MechanicalBundle\Repository;

use amillot\MechanicalBundle\Entity\Motor;
use amillot\MechanicalBundle\Model\MotorInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MotorInterface|null find($id, $lockMode = null, $lockVersion = null)
 * @method MotorInterface|null findOneBy(array $criteria, array $orderBy = null)
 * @method MotorInterface[]    findAll()
 * @method MotorInterface[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MotorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $prmRegistry)
    {
        parent::__construct($prmRegistry, Motor::class);
    }
}