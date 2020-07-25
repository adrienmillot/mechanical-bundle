<?php

namespace amillot\MechanicalBundle\Model;

use amillot\MechanicalBundle\Model\Traits\EngineParameterListAwareInterface;
use amillot\MechanicalBundle\Model\Traits\NamableInterface;

/**
 * Interface ParameterInterface
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
interface ParameterInterface extends EngineParameterListAwareInterface, NamableInterface
{
}