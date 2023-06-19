<?php
namespace App\Application\Services;

use App\Application\Services\PersonagemDTO;
use App\Domain\Interfaces\Service\PersonagemServiceInterface;
use App\Domain\Interfaces\Repository\PersonagemRepositoryInterface;

class PersonagemService implements PersonagemServiceInterface
{
    protected PersonagemRepositoryInterface $personagemRepository;

    public function __construct(PersonagemRepositoryInterface $personagemRepository) {
        $this->personagemRepository = $personagemRepository;
    }

    public function findAll (): PersonagemDTOList
    {
        return $this->personagemRepository->findAll();
    }

    public function find($id): PersonagemDTO
    {
        return $this->personagemRepository->find($id);
    }

    public function insert(PersonagemDTO $personagemEntity)
    {
        $personagemModel = $this->personagemRepository->insert($personagemEntity);
        return $personagemModel;
    }
}