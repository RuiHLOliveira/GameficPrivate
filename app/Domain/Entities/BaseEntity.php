<?php

namespace App\Domain\Entities;

abstract class BaseEntity
{

    protected $id;
    protected $created_at;
    protected $updated_at;

    public static function fromArray($array): self
    {
        $object = new static(); //instantiated object
        $object
        ->setId($array['id'])
        ->setCreatedAt($array['created_at'])
        ->setUpdatedAt($array['updated_at']);

        return $object;
    }
    
    public function __toArray(): array
    {
        return [
            'id' => $this->id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
    
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    /**
     * Get the value of created_at
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     */
    public function setCreatedAt($created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     */
    public function setUpdatedAt($updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
