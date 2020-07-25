<?php

namespace amillot\MechanicalBundle\Repository;

use amillot\MechanicalBundle\Entity\Parameter;
use amillot\MechanicalBundle\Model\ParameterInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ParameterInterface|null find($id, $lockMode = null, $lockVersion = null)
 * @method ParameterInterface|null findOneBy(array $criteria, array $orderBy = null)
 * @method ParameterInterface[]    findAll()
 * @method ParameterInterface[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParameterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $prmRegistry)
    {
        parent::__construct($prmRegistry, Parameter::class);
    }
}