<?php

namespace amillot\MechanicalBundle\Entity;

use amillot\MechanicalBundle\Traits\EngineParameterListAware;
use amillot\MechanicalBundle\Traits\MotorListAware;

/**
 * Class Engine
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
class Engine extends AbstractEngine
{
    use EngineParameterListAware {
        EngineParameterListAware::__construct as private __engineParameterListAwareConstruct;
    }

    use MotorListAware {
        MotorListAware::__construct as private __motorListAwareConstruct;
    }

    public function __construct()
    {
        $this->__engineParameterListAwareConstruct();
        $this->__motorListAwareConstruct();
    }
}