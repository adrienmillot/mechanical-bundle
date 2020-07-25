<?php

namespace amillot\MechanicalBundle\Entity;

use amillot\MechanicalBundle\Traits\SensorListAware;

/**
 * Class Motor
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
class Motor extends AbstractMotor
{
    use SensorListAware {
        SensorListAware::__construct as private __sensorListAwareConstruct;
    }

    public function __construct()
    {
        $this->__sensorListAwareConstruct();
    }
}