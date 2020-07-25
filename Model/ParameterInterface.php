<?php

namespace amillot\MechanicalBundle\Model;

use amillot\MechanicalBundle\Model\Traits\EngineParameterListAwareInterface;
use amillot\MechanicalBundle\Model\Traits\NamableInterface;
use amillot\MechanicalBundle\Model\Traits\SensorParameterListAwareInterface;

/**
 * Interface ParameterInterface
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
interface ParameterInterface extends EngineParameterListAwareInterface, NamableInterface, SensorParameterListAwareInterface
{
}