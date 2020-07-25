<?php

namespace amillot\MechanicalBundle\Entity;

use amillot\MechanicalBundle\Model\SensorParameterInterface;
use amillot\MechanicalBundle\Traits\ParameterAware;
use amillot\MechanicalBundle\Traits\SensorAware;

abstract class AbstractSensorParameter implements SensorParameterInterface
{
    use ParameterAware, SensorAware;

    protected $id;

    protected $value;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritDoc}
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * {@inheritDoc}
     */
    public function setValue(string $prmValue): SensorParameterInterface
    {
        $this->value = $prmValue;

        return $this;
    }
}