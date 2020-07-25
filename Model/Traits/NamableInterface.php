<?php

namespace amillot\MechanicalBundle\Model\Traits;

/**
 * Interface NamableInterface
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
interface NamableInterface
{
    /**
     * Get name
     *
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * Set name
     *
     * @param string|null $prmName
     *
     * @return NamableInterface
     */
    public function setName(?string $prmName): NamableInterface;
}