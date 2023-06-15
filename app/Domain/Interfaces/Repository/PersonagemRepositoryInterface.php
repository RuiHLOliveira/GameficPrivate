<?php
namespace App\Domain\Interfaces\Repository;

use App\Domain\Entities\Personagem;


interface PersonagemRepositoryInterface
{
    public function findAll();
    public function find($id);
    public function insert(Personagem $entity);
}