<?php

namespace amillot\MechanicalBundle\Entity;

use amillot\MechanicalBundle\Model\MotorInterface;
use amillot\MechanicalBundle\Traits\EngineAware;
use amillot\MechanicalBundle\Traits\Namable;

/**
 * Class AbstractMotor
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
abstract class AbstractMotor implements MotorInterface
{
    use EngineAware, Namable;

    protected $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}