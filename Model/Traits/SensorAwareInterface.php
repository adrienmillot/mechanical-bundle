<?php

namespace amillot\MechanicalBundle\Model\Traits;

use amillot\MechanicalBundle\Model\SensorInterface;

/**
 * Interface SensorAwareInterface
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
interface SensorAwareInterface
{
    /**
     * @return SensorInterface|null
     */
    public function getSensor(): ?SensorInterface;

    /**
     * @param SensorInterface|null $prmSensor
     *
     * @return SensorAwareInterface
     */
    public function setSensor(?SensorInterface $prmSensor): SensorAwareInterface;
}