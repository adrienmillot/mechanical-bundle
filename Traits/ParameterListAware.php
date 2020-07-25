<?php

namespace amillot\MechanicalBundle\Traits;

use amillot\MechanicalBundle\Model\ParameterInterface;
use amillot\MechanicalBundle\Model\Traits\ParameterListAwareInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Trait ParameterListAware
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
trait ParameterListAware
{
    protected $parameters;

    public function __construct()
    {
        $this->parameters = new ArrayCollection();
    }

    /**
     * {@inheritDoc}
     */
    public function addParameter(ParameterInterface $prmParameter): ParameterListAwareInterface
    {
        if (!$this->parameters->contains($prmParameter)) {
            $this->parameters->add($prmParameter);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getParameters(): Collection
    {
        return $this->parameters;
    }

    /**
     * {@inheritDoc}
     */
    public function removeParameter(ParameterInterface $prmParameter): ParameterListAwareInterface
    {
        if ($this->parameters->contains($prmParameter)) {
            $this->parameters->removeElement($prmParameter);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setParameters(?Collection $prmParameters): ParameterListAwareInterface
    {
        $this->parameters = $prmParameters;

        return $this;
    }
}