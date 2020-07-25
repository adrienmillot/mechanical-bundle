<?php

namespace amillot\MechanicalBundle\Model;

use amillot\MechanicalBundle\Model\Traits\MotorAwareInterface;
use amillot\MechanicalBundle\Model\Traits\NamableInterface;
use amillot\MechanicalBundle\Model\Traits\SensorParameterListAwareInterface;

/**
 * Interface SensorInterface
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
interface SensorInterface extends MotorAwareInterface, NamableInterface, SensorParameterListAwareInterface
{
}