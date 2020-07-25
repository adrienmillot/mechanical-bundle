<?php

namespace amillot\MechanicalBundle\Traits;

use amillot\MechanicalBundle\Model\EngineInterface;
use amillot\MechanicalBundle\Model\Traits\EngineAwareInterface;

/**
 * Trait EngineAware
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
trait EngineAware
{
    protected $engine;

    /**
     * {@inheritDoc}
     */
    public function getEngine(): ?EngineInterface
    {
        return $this->engine;
    }

    /**
     * {@inheritDoc}
     */
    public function setEngine(?EngineInterface $prmEngine): EngineAwareInterface
    {
        $this->engine = $prmEngine;

        return $this;
    }
}