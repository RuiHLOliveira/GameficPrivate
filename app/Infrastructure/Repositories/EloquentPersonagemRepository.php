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
    public function findAll(): PersonagemList
    {
        //utiliza implementação de terceiro (framework)
        $eloquentPersonagens = EloquentPersonagem::all();

        //converte para representação propria (da aplicação)
        $personagemList = new PersonagemList();
        foreach ($eloquentPersonagens as $key => $eloquentPersonagem) {
            $personagemList->add(Personagem::fromArray($eloquentPersonagem->attributesToArray()));
        }
        return $personagemList;
    }

    public function find(int $id): Personagem
    {
        //utiliza implementação de terceiro (framework)
        $eloquentPersonagem = EloquentPersonagem::findOrFail($id);
        
        //converte para representação propria (da aplicação)
        $personagem = Personagem::fromArray($eloquentPersonagem->attributesToArray());
        return $personagem;
    }

    public function insert(Personagem $entity): Personagem
    {
        //utiliza implementação de terceiro (framework)
        $personagemModel = new EloquentPersonagem();
        $personagemModel->nome = $entity->getNome();
        $personagemModel->historia = $entity->getHistoria();
        $personagemModel->objetivos = $entity->getObjetivos();
        $personagem = $personagemModel->save();
        return $entity;
    }
}