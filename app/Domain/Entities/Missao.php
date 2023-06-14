<?php

namespace App\Domain\Entities;

use App\Domain\Entities\BaseEntity;

class Missao extends BaseEntity
{
    const TIPO_DIARIA = 1;
    const TIPO_SEMANAL = 2;
    const TIPO_UNICA = 3;

    const SITUACAO_ATIVA = 1;
    const SITUACAO_PAUSADA = 2;
    const SITUACAO_FALHA = 3;
    
    const DIFICULDADE_BAIXA = 1;
    const DIFICULDADE_MEDIA = 2;
    const DIFICULDADE_ALTA = 3;

    protected $titulo;
    protected $historia;
    protected $descricao;
    protected $tipo;
    protected $prazo;
    protected $situacao;
    protected $dificuldade;

    public static function getEnumTipos(){
        return [
            self::TIPO_DIARIA,
            self::TIPO_SEMANAL,
            self::TIPO_UNICA,
        ];
    }
    
    public static function getEnumSituacoes(){
        return [
            self::SITUACAO_ATIVA,
            self::SITUACAO_PAUSADA,
            self::SITUACAO_FALHA,
        ];
    }

    public static function getEnumDificuldades(){
        return [
            self::DIFICULDADE_BAIXA,
            self::DIFICULDADE_MEDIA,
            self::DIFICULDADE_ALTA,
        ];
    }


    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

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
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of prazo
     */ 
    public function getPrazo()
    {
        return $this->prazo;
    }

    /**
     * Set the value of prazo
     *
     * @return  self
     */ 
    public function setPrazo($prazo)
    {
        $this->prazo = $prazo;

        return $this;
    }

    /**
     * Get the value of situacao
     */ 
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * Set the value of situacao
     *
     * @return  self
     */ 
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }

    /**
     * Get the value of dificuldade
     */ 
    public function getDificuldade()
    {
        return $this->dificuldade;
    }

    /**
     * Set the value of dificuldade
     *
     * @return  self
     */ 
    public function setDificuldade($dificuldade)
    {
        $this->dificuldade = $dificuldade;

        return $this;
    }
}
