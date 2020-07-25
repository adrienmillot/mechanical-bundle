<?php

namespace amillot\MechanicalBundle\Entity;

use amillot\MechanicalBundle\Model\EngineParameterInterface;
use amillot\MechanicalBundle\Traits\EngineAware;
use amillot\MechanicalBundle\Traits\ParameterAware;

/**
 * Class AbstractEngineParameter
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
abstract class AbstractEngineParameter implements EngineParameterInterface
{
    use EngineAware, ParameterAware;

    protected $id;

    protected $value;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritDoc}
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * {@inheritDoc}
     */
    public function setValue(string $prmValue): EngineParameterInterface
    {
        $this->value = $prmValue;

        return $this;
    }
}