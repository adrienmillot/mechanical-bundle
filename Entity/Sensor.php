<?php

namespace amillot\MechanicalBundle\Entity;

use amillot\MechanicalBundle\Traits\SensorParameterListAware;

/**
 * Class Sensor
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
class Sensor extends AbstractSensor
{
    use SensorParameterListAware {
        SensorParameterListAware::__construct as private __sensorParameterListAwareConstruct;
    }

    public function __construct()
    {
        $this->__sensorParameterListAwareConstruct();
    }
}