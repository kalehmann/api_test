<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Greeting
{
    /**
     * @var string
     *
     * @ORM\Id
     * @ORM\Column(type="string")
     *
     */
    private $immutable;

    /**
     * @var string A nice person
     *
     * @ORM\Column(type="string")
     */
    private $editable;

    public function __construct($immutable)
    {
        $this->immutable = $immutable;
    }

    /**
     * @return string
     */
    public function getImmutable()
    {
        return $this->immutable;
    }

    /**
     * @param string $immutable
     */
    public function setImmutable($immutable)
    {
        $this->immutable = $immutable;
    }

    /**
     * @return string
     */
    public function getEditable()
    {
        return $this->editable;
    }

    /**
     * @param string $editable
     */
    public function setEditable($editable)
    {
        $this->editable = $editable;
    }
}
