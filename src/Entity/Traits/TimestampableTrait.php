<?php

namespace App\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait TimestampableTrait
 *
 * @author Wouter den Ouden <wouter.den.ouden@extendas.com>
 */
trait TimestampableTrait
{
    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    protected $created_at;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $updated_at;

    /**
     * @ORM\PrePersist
     *
     * @throws \Exception
     */
    public function prePersist()
    {
        $this->created_at = new \DateTime();

        return $this;
    }

    /**
     * @ORM\PreUpdate
     *
     * @throws \Exception
     */
    public function preUpdate()
    {
        $this->updated_at = new \DateTime();

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}
