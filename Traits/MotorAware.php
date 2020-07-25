<?php

namespace amillot\MechanicalBundle\Traits;

use amillot\MechanicalBundle\Model\MotorInterface;
use amillot\MechanicalBundle\Model\Traits\MotorAwareInterface;

/**
 * Trait MotorAware
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
trait MotorAware
{
    protected $motor;

    /**
     * {@inheritDoc}
     */
    public function getMotor(): ?MotorInterface
    {
        return $this->motor;
    }

    /**
     * {@inheritDoc}
     */
    public function setMotor(?MotorInterface $prmMotor): MotorAwareInterface
    {
        $this->motor = $prmMotor;

        return $this;
    }
}