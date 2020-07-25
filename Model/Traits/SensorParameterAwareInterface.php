<?php

namespace amillot\MechanicalBundle\Model\Traits;

use amillot\MechanicalBundle\Model\SensorParameterInterface;

/**
 * Interface SensorParameterAwareInterface
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
interface SensorParameterAwareInterface
{
    /**
     * @return SensorParameterInterface|null
     */
    public function getSensorParameter(): ?SensorParameterInterface;

    /**
     * @param SensorParameterInterface|null $prmSensorParameter
     *
     * @return SensorParameterAwareInterface
     */
    public function setSensorParameter(?SensorParameterInterface $prmSensorParameter): SensorParameterAwareInterface;
}