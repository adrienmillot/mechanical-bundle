<?php

namespace amillot\MechanicalBundle\Model;

use amillot\MechanicalBundle\Model\Traits\MotorAwareInterface;
use amillot\MechanicalBundle\Model\Traits\NamableInterface;

/**
 * Interface SensorInterface
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
interface SensorInterface extends MotorAwareInterface, NamableInterface
{
}