<?php

namespace amillot\MechanicalBundle\Model;

use amillot\MechanicalBundle\Model\Traits\EngineParameterListAwareInterface;
use amillot\MechanicalBundle\Model\Traits\MotorListAwareInterface;
use amillot\MechanicalBundle\Model\Traits\NamableInterface;

/**
 * Interface EngineInterface
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
interface EngineInterface extends EngineParameterListAwareInterface, MotorListAwareInterface, NamableInterface
{
}