<?php

namespace amillot\MechanicalBundle\Repository;

use amillot\MechanicalBundle\Entity\EngineParameter;
use amillot\MechanicalBundle\Model\EngineParameterInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method EngineParameterInterface|null find($id, $lockMode = null, $lockVersion = null)
 * @method EngineParameterInterface|null findOneBy(array $criteria, array $orderBy = null)
 * @method EngineParameterInterface[]    findAll()
 * @method EngineParameterInterface[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EngineParameterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $prmRegistry)
    {
        parent::__construct($prmRegistry, EngineParameter::class);
    }
}