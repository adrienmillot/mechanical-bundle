<?php

namespace amillot\MechanicalBundle\Entity;

use amillot\MechanicalBundle\Model\SensorInterface;
use amillot\MechanicalBundle\Traits\MotorAware;
use amillot\MechanicalBundle\Traits\Namable;

/**
 * Class AbstractSensor
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
abstract class AbstractSensor implements SensorInterface
{
    use MotorAware, Namable;

    protected $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}