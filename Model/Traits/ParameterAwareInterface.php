<?php

namespace amillot\MechanicalBundle\Model\Traits;

use amillot\MechanicalBundle\Model\ParameterInterface;

/**
 * Interface ParameterAwareInterface
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
interface ParameterAwareInterface
{
    /**
     * @return ParameterInterface|null
     */
    public function getParameter(): ?ParameterInterface;

    /**
     * @param ParameterInterface|null $prmParameter
     *
     * @return ParameterAwareInterface
     */
    public function setParameter(?ParameterInterface $prmParameter): ParameterAwareInterface;
}