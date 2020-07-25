<?php

namespace amillot\MechanicalBundle\Traits;

use amillot\MechanicalBundle\Model\SensorParameterInterface;
use amillot\MechanicalBundle\Model\Traits\SensorParameterListAwareInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Trait SensorParameterListAware
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
trait SensorParameterListAware
{
    protected $sensorParameters;

    public function __construct()
    {
        $this->sensorParameters = new ArrayCollection();
    }

    /**
     * {@inheritDoc}
     */
    public function addSensorParameter(SensorParameterInterface $prmSensorParameter): SensorParameterListAwareInterface
    {
        if (!$this->sensorParameters->contains($prmSensorParameter)) {
            $this->sensorParameters->add($prmSensorParameter);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getSensorParameters(): Collection
    {
        return $this->sensorParameters;
    }

    /**
     * {@inheritDoc}
     */
    public function removeSensorParameter(SensorParameterInterface $prmSensorParameter): SensorParameterListAwareInterface
    {
        if ($this->sensorParameters->contains($prmSensorParameter)) {
            $this->sensorParameters->removeElement($prmSensorParameter);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setSensorParameters(?Collection $prmSensorParameters): SensorParameterListAwareInterface
    {
        $this->sensorParameters = $prmSensorParameters;

        return $this;
    }
}