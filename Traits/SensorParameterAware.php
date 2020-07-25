<?php

namespace amillot\MechanicalBundle\Traits;

use amillot\MechanicalBundle\Model\SensorParameterInterface;
use amillot\MechanicalBundle\Model\Traits\SensorParameterAwareInterface;

/**
 * Trait SensorParameterAware
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
trait SensorParameterAware
{
    protected $sensorParameter;

    /**
     * {@inheritDoc}
     */
    public function getSensorParameter(): ?SensorParameterInterface
    {
        return $this->sensorParameter;
    }

    /**
     * {@inheritDoc}
     */
    public function setSensorParameter(?SensorParameterInterface $prmSensorParameter): SensorParameterAwareInterface
    {
        $this->sensorParameter = $prmSensorParameter;

        return $this;
    }
}