<?php
namespace App\Application\Services;

use App\Domain\Entities\Personagem;
use App\Domain\Interfaces\Repository\PersonagemRepositoryInterface;
use App\Domain\Interfaces\Service\PersonagemServiceInterface;

class PersonagemService implements PersonagemServiceInterface
{

    protected PersonagemRepositoryInterface $personagemRepository;

    public function __construct(PersonagemRepositoryInterface $personagemRepository) {
        $this->personagemRepository = $personagemRepository;
    }

    public function findAll ()
    {
        return $this->personagemRepository->findAll();
    }

    public function find($id)
    {
        return $this->personagemRepository->find($id);
    }

    public function insert(Personagem $personagemEntity)
    {
        $personagemModel = $this->personagemRepository->insert($personagemEntity);
        return $personagemModel;
    }
}