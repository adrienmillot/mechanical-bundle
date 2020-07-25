<?php

namespace amillot\MechanicalBundle\Model\Traits;

use amillot\MechanicalBundle\Model\ParameterInterface;
use Doctrine\Common\Collections\Collection;

/**
 * Interface ParameterListAwareInterface
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
interface ParameterListAwareInterface
{
    /**
     * @param ParameterInterface $prmParameter
     *
     * @return ParameterListAwareInterface
     */
    public function addParameter(ParameterInterface $prmParameter): ParameterListAwareInterface;

    /**
     * @return Collection
     */
    public function getParameters(): Collection;

    /**
     * @param ParameterInterface $prmParameter
     *
     * @return ParameterListAwareInterface
     */
    public function removeParameter(ParameterInterface $prmParameter): ParameterListAwareInterface;

    /**
     * @param Collection|null $prmParameters
     *
     * @return ParameterListAwareInterface
     */
    public function setParameters(?Collection $prmParameters): ParameterListAwareInterface;
}