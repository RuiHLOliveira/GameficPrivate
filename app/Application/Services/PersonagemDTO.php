<?php
namespace App\Application\Services;

final class PersonagemDTO
{
    public string $id;
    public string $created_at;
    public string $updated_at;
    public string $nome;
    public string $historia;
    public string $objetivos;
    public string $nivel;

    public function __construct($values)
    {
        $this->id = $values['id'] ?? '';
        $this->created_at = $values['created_at'] ?? '';
        $this->updated_at = $values['updated_at'] ?? '';
        $this->nome = $values['nome'] ?? '';
        $this->historia = $values['historia'] ?? '';
        $this->objetivos = $values['objetivos'] ?? '';
        $this->nivel = $values['nivel'] ?? '';
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'nome' => $this->nome,
            'historia' => $this->historia,
            'objetivos' => $this->objetivos,
            'nivel' => $this->nivel,
        ];
    }


    /**
     * Get the value of id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of created_at
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @param string $created_at
     *
     * @return self
     */
    public function setCreatedAt(string $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @param string $updated_at
     *
     * @return self
     */
    public function setUpdatedAt(string $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Get the value of nome
     *
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @param string $nome
     *
     * @return self
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }



    /**
     * Get the value of historia
     *
     * @return string
     */
    public function getHistoria(): string
    {
        return $this->historia;
    }

    /**
     * Set the value of historia
     *
     * @param string $historia
     *
     * @return self
     */
    public function setHistoria(string $historia): self
    {
        $this->historia = $historia;

        return $this;
    }

    /**
     * Get the value of objetivos
     *
     * @return string
     */
    public function getObjetivos(): string
    {
        return $this->objetivos;
    }

    /**
     * Set the value of objetivos
     *
     * @param string $objetivos
     *
     * @return self
     */
    public function setObjetivos(string $objetivos): self
    {
        $this->objetivos = $objetivos;

        return $this;
    }

    /**
     * Get the value of nivel
     *
     * @return string
     */
    public function getNivel(): string
    {
        return $this->nivel;
    }

    /**
     * Set the value of nivel
     *
     * @param string $nivel
     *
     * @return self
     */
    public function setNivel(string $nivel): self
    {
        $this->nivel = $nivel;

        return $this;
    }
}