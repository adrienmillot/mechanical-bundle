<?php

namespace amillot\MechanicalBundle\Model\Traits;

use amillot\MechanicalBundle\Model\SensorParameterInterface;
use Doctrine\Common\Collections\Collection;

interface SensorParameterListAwareInterface
{
    /**
     * @param SensorParameterInterface $prmSensorParameter
     *
     * @return SensorParameterListAwareInterface
     */
    public function addSensorParameter(SensorParameterInterface $prmSensorParameter): SensorParameterListAwareInterface;

    /**
     * @return Collection
     */
    public function getSensorParameters(): Collection;

    /**
     * @param SensorParameterInterface $prmSensorParameter
     *
     * @return SensorParameterListAwareInterface
     */
    public function removeSensorParameter(SensorParameterInterface $prmSensorParameter): SensorParameterListAwareInterface;

    /**
     * @param Collection|null $prmSensorParameters
     *
     * @return SensorParameterListAwareInterface
     */
    public function setSensorParameters(?Collection $prmSensorParameters): SensorParameterListAwareInterface;
}