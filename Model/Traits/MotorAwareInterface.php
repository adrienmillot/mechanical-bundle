<?php

namespace amillot\MechanicalBundle\Model\Traits;

use amillot\MechanicalBundle\Model\MotorInterface;

/**
 * Interface MotorAwareInterface
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
interface MotorAwareInterface
{
    /**
     * @return MotorInterface|null
     */
    public function getMotor(): ?MotorInterface;

    /**
     * @param MotorInterface|null $prmMotor
     *
     * @return MotorAwareInterface
     */
    public function setMotor(?MotorInterface $prmMotor): MotorAwareInterface;
}