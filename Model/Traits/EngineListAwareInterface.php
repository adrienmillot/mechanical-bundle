<?php

namespace amillot\MechanicalBundle\Model\Traits;

use amillot\MechanicalBundle\Model\EngineInterface;
use Doctrine\Common\Collections\Collection;

/**
 * Interface EngineListAwareInterface
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
interface EngineListAwareInterface
{
    /**
     * @param EngineInterface $prmEngine
     *
     * @return EngineListAwareInterface
     */
    public function addEngine(EngineInterface $prmEngine): EngineListAwareInterface;

    /**
     * @return Collection
     */
    public function getEngines(): Collection;

    /**
     * @param EngineInterface $prmEngine
     *
     * @return EngineListAwareInterface
     */
    public function removeEngine(EngineInterface $prmEngine): EngineListAwareInterface;

    /**
     * @param Collection|null $prmEngines
     *
     * @return EngineListAwareInterface
     */
    public function setEngines(?Collection $prmEngines): EngineListAwareInterface;
}