<?php

namespace amillot\MechanicalBundle\Model\Traits;

use amillot\MechanicalBundle\Model\EngineParameterInterface;
use Doctrine\Common\Collections\Collection;

/**
 * Interface EngineParameterListAwareInterface
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
interface EngineParameterListAwareInterface
{
    /**
     * @param EngineParameterInterface $prmEngineParameter
     *
     * @return EngineParameterListAwareInterface
     */
    public function addEngineParameter(EngineParameterInterface $prmEngineParameter): EngineParameterListAwareInterface;

    /**
     * @return Collection
     */
    public function getEngineParameters(): Collection;

    /**
     * @param EngineParameterInterface $prmEngineParameter
     *
     * @return EngineParameterListAwareInterface
     */
    public function removeEngineParameter(EngineParameterInterface $prmEngineParameter): EngineParameterListAwareInterface;

    /**
     * @param Collection|null $prmEngineParameters
     *
     * @return EngineParameterListAwareInterface
     */
    public function setEngineParameters(?Collection $prmEngineParameters): EngineParameterListAwareInterface;
}