<?php
namespace App\Application\Services;

use App\Domain\Entities\Personagem;
use App\Domain\Collections\PersonagemList;
use App\Application\Services\PersonagemDTO;
use App\Domain\Interfaces\Service\PersonagemServiceInterface;
use App\Domain\Interfaces\Repository\PersonagemRepositoryInterface;

class PersonagemService implements PersonagemServiceInterface
{
    protected PersonagemRepositoryInterface $personagemRepository;

    public function __construct(PersonagemRepositoryInterface $personagemRepository) {
        $this->personagemRepository = $personagemRepository;
    }

    public function findAll(): PersonagemList
    {
        $personagemList = $this->personagemRepository->findAll();
        return $personagemList;
    }

    public function find($id): Personagem
    {
        $personagem = $this->personagemRepository->find($id);
        return $personagem;
    }

    public function insert(PersonagemDTO $personagemDTO): Personagem
    {
        $personagemEntity = Personagem::fromArray($personagemDTO->toArray());

        $personagemModel = $this->personagemRepository->insert($personagemEntity);
        return $personagemModel;
    }
}