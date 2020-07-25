<?php

namespace amillot\MechanicalBundle\Model\Traits;

use amillot\MechanicalBundle\Model\SensorInterface;
use Doctrine\Common\Collections\Collection;

/**
 * Interface SensorListAwareInterface
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
interface SensorListAwareInterface
{
    /**
     * @param SensorInterface $prmSensor
     *
     * @return SensorListAwareInterface
     */
    public function addSensor(SensorInterface $prmSensor): SensorListAwareInterface;

    /**
     * @return Collection
     */
    public function getSensors(): Collection;

    /**
     * @param SensorInterface $prmSensor
     *
     * @return SensorListAwareInterface
     */
    public function removeSensor(SensorInterface $prmSensor): SensorListAwareInterface;

    /**
     * @param Collection|null $prmSensors
     *
     * @return SensorListAwareInterface
     */
    public function setSensors(?Collection $prmSensors): SensorListAwareInterface;
}