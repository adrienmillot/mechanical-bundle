<?php

namespace amillot\MechanicalBundle\Entity;

use amillot\MechanicalBundle\Model\ParameterInterface;
use amillot\MechanicalBundle\Traits\EngineParameterListAware;
use amillot\MechanicalBundle\Traits\Namable;
use amillot\MechanicalBundle\Traits\SensorListAware;

/**
 * Class AbstractParameter
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
abstract class AbstractParameter implements ParameterInterface
{
    use EngineParameterListAware, Namable;

    protected $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}