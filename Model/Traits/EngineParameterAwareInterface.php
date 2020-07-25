<?php

namespace amillot\MechanicalBundle\Model\Traits;

use amillot\MechanicalBundle\Model\EngineParameterInterface;

/**
 * Interface EngineParameterAwareInterface
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
interface EngineParameterAwareInterface
{
    /**
     * @return EngineParameterInterface|null
     */
    public function getEngineParameter(): ?EngineParameterInterface;

    /**
     * @param EngineParameterInterface|null $prmEngineParameter
     *
     * @return EngineParameterAwareInterface
     */
    public function setEngineParameter(?EngineParameterInterface $prmEngineParameter): EngineParameterAwareInterface;
}