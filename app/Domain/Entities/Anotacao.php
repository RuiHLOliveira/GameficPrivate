<?php

namespace App\Domain\Entities;

use App\Domain\Entities\BaseEntity;

class Anotacao extends BaseEntity
{
    protected $texto;
    protected $lembrete;

    /**
     * Get the value of texto
     */ 
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set the value of texto
     *
     * @return  self
     */ 
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get the value of lembrete
     */ 
    public function getLembrete()
    {
        return $this->lembrete;
    }

    /**
     * Set the value of lembrete
     *
     * @return  self
     */ 
    public function setLembrete($lembrete)
    {
        $this->lembrete = $lembrete;

        return $this;
    }
}
