<?php

namespace amillot\MechanicalBundle\Traits;

use amillot\MechanicalBundle\Model\EngineInterface;
use amillot\MechanicalBundle\Model\Traits\EngineListAwareInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Trait EngineListAware
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
trait EngineListAware
{
    protected $engines;

    public function __construct()
    {
        $this->engines = new ArrayCollection();
    }

    /**
     * {@inheritDoc}
     */
    public function addEngine(EngineInterface $prmEngine): EngineListAwareInterface
    {
        if (!$this->engines->contains($prmEngine)) {
            $this->engines->add($prmEngine);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getEngines(): Collection
    {
        return $this->engines;
    }

    /**
     * {@inheritDoc}
     */
    public function removeEngine(EngineInterface $prmEngine): EngineListAwareInterface
    {
        if ($this->engines->contains($prmEngine)) {
            $this->engines->removeElement($prmEngine);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setEngines(?Collection $prmEngines): EngineListAwareInterface
    {
        $this->engines = $prmEngines;

        return $this;
    }
}