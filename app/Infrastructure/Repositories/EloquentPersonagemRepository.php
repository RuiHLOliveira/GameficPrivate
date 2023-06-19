<?php
namespace App\Infrastructure\Repositories;

use App\Domain\Entities\Personagem;
use App\Domain\Collections\PersonagemList;
use App\Application\Services\PersonagemDTO;
use App\Application\Services\PersonagemDTOList;
use App\Models\Personagem as EloquentPersonagem;
use App\Domain\Interfaces\Repository\PersonagemRepositoryInterface;

class EloquentPersonagemRepository implements PersonagemRepositoryInterface
{
    public function findAll (): PersonagemDTOList
    {
        $eloquentPersonagens = EloquentPersonagem::all();
        $personagemDTOList = new PersonagemDTOList();
        foreach ($eloquentPersonagens as $key => $eloquentPersonagem) {
            $personagemDTOList->add(new PersonagemDTO($eloquentPersonagem->attributesToArray()));
        }
        return $personagemDTOList;
    }

    public function find ($id): PersonagemDTO
    {
        $eloquentPersonagem = EloquentPersonagem::findOrFail($id);
        $personagemDTO = new PersonagemDTO($eloquentPersonagem->attributesToArray());
        return $personagemDTO;
    }

    public function insert (PersonagemDTO $entity)
    {
        //instancia model
        $personagemModel = new EloquentPersonagem();
        //preenche campos
        $personagemModel->nome = $entity->getNome();
        $personagemModel->historia = $entity->getHistoria();
        $personagemModel->objetivos = $entity->getObjetivos();

        // grava
        $personagem = $personagemModel->save();
        return $personagemModel;
    }
}