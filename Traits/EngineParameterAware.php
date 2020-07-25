<?php

namespace amillot\MechanicalBundle\Traits;

use amillot\MechanicalBundle\Model\EngineParameterInterface;
use amillot\MechanicalBundle\Model\Traits\EngineParameterAwareInterface;

/**
 * Trait EngineParameterAware
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
trait EngineParameterAware
{
    protected $engineParameter;

    /**
     * {@inheritDoc}
     */
    public function getEngineParameter(): ?EngineParameterInterface
    {
        return $this->engineParameter;
    }

    /**
     * {@inheritDoc}
     */
    public function setEngineParameter(?EngineParameterInterface $prmEngineParameter): EngineParameterAwareInterface
    {
        $this->engineParameter = $prmEngineParameter;

        return $this;
    }
}