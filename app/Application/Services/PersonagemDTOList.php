<?php
namespace App\Application\Services;

use JsonSerializable;
use App\Application\Services\PersonagemDTO;

final class PersonagemDTOList implements JsonSerializable
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

    public function add (PersonagemDTO $personagem)
    {
        $this->personagemList[] = $personagem;
    }
}
