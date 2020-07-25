<?php

namespace amillot\MechanicalBundle\Model\Traits;

use amillot\MechanicalBundle\Model\MotorInterface;
use Doctrine\Common\Collections\Collection;

/**
 * Interface MotorListAwareInterface
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
interface MotorListAwareInterface
{
    /**
     * @param MotorInterface $prmMotor
     *
     * @return MotorListAwareInterface
     */
    public function addMotor(MotorInterface $prmMotor): MotorListAwareInterface;

    /**
     * @return Collection
     */
    public function getMotors(): Collection;

    /**
     * @param MotorInterface $prmMotor
     *
     * @return MotorListAwareInterface
     */
    public function removeMotor(MotorInterface $prmMotor): MotorListAwareInterface;

    /**
     * @param Collection|null $prmMotors
     *
     * @return MotorListAwareInterface
     */
    public function setMotors(?Collection $prmMotors): MotorListAwareInterface;
}