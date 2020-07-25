<?php

namespace amillot\MechanicalBundle\Traits;

use amillot\MechanicalBundle\Model\ParameterInterface;
use amillot\MechanicalBundle\Model\Traits\ParameterAwareInterface;

/**
 * Trait ParameterAware
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
trait ParameterAware
{
    protected $parameter;

    /**
     * {@inheritDoc}
     */
    public function getParameter(): ?ParameterInterface
    {
        return $this->parameter;
    }

    /**
     * {@inheritDoc}
     */
    public function setParameter(?ParameterInterface $prmParameter): ParameterAwareInterface
    {
        $this->parameter = $prmParameter;

        return $this;
    }
}