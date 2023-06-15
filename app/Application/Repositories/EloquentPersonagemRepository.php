<?php
namespace App\Application\Repositories;

use App\Domain\Entities\Personagem;
use App\Domain\Collections\PersonagemList;
use App\Models\Personagem as EloquentPersonagem;
use App\Domain\Interfaces\Repository\PersonagemRepositoryInterface;

class EloquentPersonagemRepository implements PersonagemRepositoryInterface
{
    public function findAll (): PersonagemList
    {
        $eloquentPersonagens = EloquentPersonagem::all();
        $personagemList = new PersonagemList();
        foreach ($eloquentPersonagens as $key => $eloquentPersonagem) {
            $personagemList->add(Personagem::fromArray($eloquentPersonagem->attributesToArray()));
        }
        return $personagemList;
    }

    public function find($id)
    {
        return EloquentPersonagem::findOrFail($id);
    }

    public function insert (Personagem $entity)
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