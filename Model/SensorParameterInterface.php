<?php

namespace amillot\MechanicalBundle\Model;

use amillot\MechanicalBundle\Model\Traits\ParameterAwareInterface;
use amillot\MechanicalBundle\Model\Traits\SensorAwareInterface;

interface SensorParameterInterface extends ParameterAwareInterface, SensorAwareInterface
{
    /**
     * @return string
     */
    public function getValue(): string;

    /**
     * @param string $prmValue
     *
     * @return SensorParameterInterface
     */
    public function setValue(string $prmValue): SensorParameterInterface;
}