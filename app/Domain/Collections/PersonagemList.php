<?php
namespace App\Domain\Collections;

use App\Domain\Entities\Personagem;
use JsonSerializable;

final class PersonagemList implements JsonSerializable
{
    protected array $personagemList;

    public function __construct($personagemList = []) {
        foreach ($personagemList as $key => $personagem) {
            $this->add($personagem); //validates type
        }
    }

    public function jsonSerialize()
    {
        return $this->personagemList;
    }

    public function add (Personagem $personagem)
    {
        $this->personagemList[] = $personagem;
    }
}
