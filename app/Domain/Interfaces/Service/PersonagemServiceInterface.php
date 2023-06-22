<?php
namespace App\Domain\Interfaces\Service;

use App\Domain\Entities\Personagem;
use App\Domain\Collections\PersonagemList;
use App\Application\Services\PersonagemDTO;
use App\Application\Services\PersonagemDTOList;

interface PersonagemServiceInterface
{
    public function findAll(): PersonagemList;
    public function find(int $id): Personagem;
    public function insert(PersonagemDTO $entity);
}