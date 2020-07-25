<?php

namespace amillot\MechanicalBundle\Entity;

use amillot\MechanicalBundle\Traits\SensorParameterListAware;

/**
 * Class Parameter
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
class Parameter extends AbstractParameter
{
    use SensorParameterListAware {
        SensorParameterListAware::__construct as private __sensorParameterListAwareConstruct;
    }

    public function __construct()
    {
        $this->__sensorParameterListAwareConstruct();
    }
}