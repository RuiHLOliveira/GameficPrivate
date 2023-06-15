<?php
namespace App\Domain\Interfaces\Service;

use App\Domain\Entities\Personagem;

interface PersonagemServiceInterface
{
    public function findAll();
    public function find($id);
    public function insert(Personagem $entity);
}