<?php

namespace amillot\MechanicalBundle\Entity;

use amillot\MechanicalBundle\Traits\EngineParameterListAware;

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

    public function __construct()
    {
        $this->__engineParameterListAwareConstruct();
    }
}