<?php

namespace amillot\MechanicalBundle\Repository;

use amillot\MechanicalBundle\Entity\Engine;
use amillot\MechanicalBundle\Model\EngineInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method EngineInterface|null find($id, $lockMode = null, $lockVersion = null)
 * @method EngineInterface|null findOneBy(array $criteria, array $orderBy = null)
 * @method EngineInterface[]    findAll()
 * @method EngineInterface[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EngineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $prmRegistry)
    {
        parent::__construct($prmRegistry, Engine::class);
    }
}