<?php

namespace amillot\MechanicalBundle\Traits;

use amillot\MechanicalBundle\Model\EngineParameterInterface;
use amillot\MechanicalBundle\Model\Traits\EngineParameterListAwareInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Trait EngineParameterListAware
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
trait EngineParameterListAware
{
    protected $engineParameters;

    public function __construct()
    {
        $this->engineParameters = new ArrayCollection();
    }

    /**
     * {@inheritDoc}
     */
    public function addEngineParameter(EngineParameterInterface $prmEngineParameter): EngineParameterListAwareInterface
    {
        if (!$this->engineParameters->contains($prmEngineParameter)) {
            $this->engineParameters->add($prmEngineParameter);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getEngineParameters(): Collection
    {
        return $this->engineParameters;
    }

    /**
     * {@inheritDoc}
     */
    public function removeEngineParameter(EngineParameterInterface $prmEngineParameter): EngineParameterListAwareInterface
    {
        if ($this->engineParameters->contains($prmEngineParameter)) {
            $this->engineParameters->removeElement($prmEngineParameter);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setEngineParameters(?Collection $prmEngineParameters): EngineParameterListAwareInterface
    {
        $this->engineParameters = $prmEngineParameters;

        return $this;
    }
}