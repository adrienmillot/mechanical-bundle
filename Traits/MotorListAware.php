<?php

namespace amillot\MechanicalBundle\Traits;

use amillot\MechanicalBundle\Model\MotorInterface;
use amillot\MechanicalBundle\Model\Traits\MotorListAwareInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Trait MotorListAware
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
trait MotorListAware
{
    protected $motors;

    public function __construct()
    {
        $this->motors = new ArrayCollection();
    }

    /**
     * {@inheritDoc}
     */
    public function addMotor(MotorInterface $prmMotor): MotorListAwareInterface
    {
        if (!$this->motors->contains($prmMotor)) {
            $this->motors->add($prmMotor);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getMotors(): Collection
    {
        return $this->motors;
    }

    /**
     * {@inheritDoc}
     */
    public function removeMotor(MotorInterface $prmMotor): MotorListAwareInterface
    {
        if ($this->motors->contains($prmMotor)) {
            $this->motors->removeElement($prmMotor);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setMotors(?Collection $prmMotors): MotorListAwareInterface
    {
        $this->motors = $prmMotors;

        return $this;
    }
}