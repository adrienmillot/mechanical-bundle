<?php

namespace amillot\MechanicalBundle\Entity;

use amillot\MechanicalBundle\Traits\Namable;
use amillot\MechanicalBundle\Model\EngineInterface;

/**
 * Class AbstractEngine
 *
 * @author Adrien MILLOT <adrien.millot@gmail.com>
 */
abstract class AbstractEngine implements EngineInterface
{
    use Namable;

    protected $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}