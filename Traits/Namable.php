<?php

namespace amillot\MechanicalBundle\Traits;

use amillot\MechanicalBundle\Model\Traits\NamableInterface;

/**
 * Trait Namable
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
trait Namable
{
    protected $name;

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * {@inheritDoc}
     */
    public function setName(?string $prmName): NamableInterface
    {
        $this->name = $prmName;

        return $this;
    }
}