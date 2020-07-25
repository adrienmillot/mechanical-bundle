<?php

namespace amillot\MechanicalBundle\Model\Traits;

use amillot\MechanicalBundle\Model\EngineInterface;

/**
 * Interface EngineAwareInterface
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
interface EngineAwareInterface
{
    /**
     * @return EngineInterface|null
     */
    public function getEngine(): ?EngineInterface;

    /**
     * @param EngineInterface|null $prmEngine
     *
     * @return EngineAwareInterface
     */
    public function setEngine(?EngineInterface $prmEngine): EngineAwareInterface;
}