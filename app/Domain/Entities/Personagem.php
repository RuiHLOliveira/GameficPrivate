<?php

namespace App\Domain\Entities;

use App\Domain\Entities\BaseEntity;

class Personagem extends BaseEntity
{

    protected $nome;
    protected $historia;
    protected $objetivos;
    protected $nivel;

    public function __construct($nivel = 1) {
        $this->nivel = $nivel;
    }

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

    /**
     * Get the value of historia
     */ 
    public function getHistoria()
    {
        return $this->historia;
    }

    /**
     * Set the value of historia
     *
     * @return  self
     */ 
    public function setHistoria($historia)
    {
        $this->historia = $historia;

        return $this;
    }

    /**
     * Get the value of objetivos
     */ 
    public function getObjetivos()
    {
        return $this->objetivos;
    }

    /**
     * Set the value of objetivos
     *
     * @return  self
     */ 
    public function setObjetivos($objetivos)
    {
        $this->objetivos = $objetivos;

        return $this;
    }

    /**
     * Get the value of nivel
     */ 
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set the value of nivel
     *
     * @return  self
     */ 
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }
}
