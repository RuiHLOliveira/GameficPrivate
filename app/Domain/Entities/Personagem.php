<?php

namespace App\Domain\Entities;

use App\Domain\Entities\BaseEntity;
use DomainException;

class Personagem extends BaseEntity
{

    /**
     * Regras de negocio
     * Tamanho
     * Numeros Positivos
     */

    protected $nome;
    protected $historia;
    protected $objetivos;
    protected $nivel;

    public function __construct($nivel = 1)
    {
        $this->setNivel($nivel);
    }

    public static function fromArray($array)
    {
        //validate array
        $personagem = parent::fromArray($array); //id created updated

        $personagem
        ->setNome($array['nome'])
        // ->setNivel($array['nivel'])
        ->setHistoria($array['historia'])
        ->setObjetivos($array['objetivos']);

        return $personagem;
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
        if($nivel <= 0) {
            throw new DomainException('Um personagem não pode possuir um nível zero ou negativo.');
        }

        $this->nivel = $nivel;

        return $this;
    }
}
