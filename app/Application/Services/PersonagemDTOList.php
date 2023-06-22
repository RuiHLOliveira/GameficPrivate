<?php
namespace App\Application\Services;

use App\Application\Services\PersonagemDTO;

final class PersonagemDTOList
{
    protected array $list;

    public function __construct($list = []) {
        foreach ($list as $key => $personagem) {
            $this->add($personagem); //validates type
        }
    }

    public function add (PersonagemDTO $personagem)
    {
        $this->list[] = $personagem;
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
