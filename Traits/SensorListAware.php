<?php

namespace amillot\MechanicalBundle\Traits;

use amillot\MechanicalBundle\Model\SensorInterface;
use amillot\MechanicalBundle\Model\Traits\SensorListAwareInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Trait SensorListAware
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
trait SensorListAware
{
    protected $sensors;

    public function __construct()
    {
        $this->sensors = new ArrayCollection();
    }

    /**
     * {@inheritDoc}
     */
    public function addSensor(SensorInterface $prmSensor): SensorListAwareInterface
    {
        if (!$this->sensors->contains($prmSensor)) {
            $this->sensors->add($prmSensor);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getSensors(): Collection
    {
        return $this->sensors;
    }

    /**
     * {@inheritDoc}
     */
    public function removeSensor(SensorInterface $prmSensor): SensorListAwareInterface
    {
        if ($this->sensors->contains($prmSensor)) {
            $this->sensors->removeElement($prmSensor);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setSensors(?Collection $prmSensors): SensorListAwareInterface
    {
        $this->sensors = $prmSensors;

        return $this;
    }
}