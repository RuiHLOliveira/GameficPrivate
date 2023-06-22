<?php
namespace App\Domain\Interfaces\Repository;

use App\Domain\Entities\Personagem;
use App\Domain\Collections\PersonagemList;

interface PersonagemRepositoryInterface
{
    public function findAll(): PersonagemList;
    public function find(int $id): Personagem;
    public function insert(Personagem $entity);
}