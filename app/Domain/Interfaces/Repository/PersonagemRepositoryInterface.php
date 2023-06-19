<?php
namespace App\Domain\Interfaces\Repository;

use App\Application\Services\PersonagemDTO;
use App\Application\Services\PersonagemDTOList;

interface PersonagemRepositoryInterface
{
    public function findAll(): PersonagemDTOList;
    public function find($id): PersonagemDTO;
    public function insert(PersonagemDTO $entity);
}