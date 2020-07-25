<?php

namespace amillot\MechanicalBundle\Traits;

use amillot\MechanicalBundle\Model\SensorInterface;
use amillot\MechanicalBundle\Model\Traits\SensorAwareInterface;

/**
 * Trait SensorAware
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
trait SensorAware
{
    protected $sensor;

    /**
     * {@inheritDoc}
     */
    public function getSensor(): ?SensorInterface
    {
        return $this->sensor;
    }

    /**
     * {@inheritDoc}
     */
    public function setSensor(?SensorInterface $prmSensor): SensorAwareInterface
    {
        $this->sensor = $prmSensor;

        return $this;
    }
}