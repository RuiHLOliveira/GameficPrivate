<?php
namespace App\Domain\Collections;

use App\Domain\Entities\Personagem;

final class PersonagemList
{
    protected array $list;

    public function __construct($list = [])
    {
        foreach ($list as $key => $personagem) {
            $this->add($personagem); 
        }
    }

    //validates type
    public function add (Personagem $personagem): self
    {
        $this->list[] = $personagem;
        return $this;
    }

    /**
     * Get the value of list
     *
     * @return array
     */
    public function getList(): array
    {
        return $this->list;
    }
}
