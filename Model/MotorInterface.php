<?php

namespace amillot\MechanicalBundle\Model;

use amillot\MechanicalBundle\Model\Traits\EngineAwareInterface;
use amillot\MechanicalBundle\Model\Traits\NamableInterface;

/**
 * Interface MotorInterface
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
interface MotorInterface extends EngineAwareInterface, NamableInterface
{
}