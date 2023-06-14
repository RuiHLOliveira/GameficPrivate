<?php

namespace App\Domain\Entities;

use App\Domain\Entities\BaseEntity;

class Recurso extends BaseEntity
{
    protected $nome;

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}
