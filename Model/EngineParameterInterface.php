<?php

namespace amillot\MechanicalBundle\Model;

use amillot\MechanicalBundle\Model\Traits\EngineAwareInterface;
use amillot\MechanicalBundle\Model\Traits\ParameterAwareInterface;

/**
 * Interface EngineParameterInterface
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
interface EngineParameterInterface extends EngineAwareInterface, ParameterAwareInterface
{
    /**
     * @return string
     */
    public function getValue(): string;

    /**
     * @param string $prmValue
     *
     * @return EngineParameterInterface
     */
    public function setValue(string $prmValue): EngineParameterInterface;
}