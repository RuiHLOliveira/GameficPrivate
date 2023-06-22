<?php

namespace App\Http\Controllers;

use App\Domain\Entities\Personagem;
use Illuminate\Support\Facades\Response;
use App\Http\Resources\PersonagemResource;
use App\Application\Services\PersonagemDTO;
use App\Http\Resources\PersonagensResource;
use App\Http\Resources\PersonagemCollection;
use App\Http\Requests\StorePersonagemRequest;
use App\Http\Requests\UpdatePersonagemRequest;
use App\Models\Personagem as ModelsPersonagem;
use App\Application\Services\PersonagemService;
use App\Http\Resources\EloquentPersonagemResource;
use App\Domain\Interfaces\Service\PersonagemServiceInterface;

class PersonagemController extends Controller
{

    protected PersonagemServiceInterface $personagemService;

    public function __construct(PersonagemServiceInterface $personagemService) {
        $this->personagemService = $personagemService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personagens = $this->personagemService->findAll();
        $personagens = new PersonagensResource($personagens); //dto de response
        return Response::json($personagens,200);
        return $personagens;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personagem  $personagem
     * @return \Illuminate\Http\Response
     */
    public function show($personagem)
    {
        $personagem = $this->personagemService->find($personagem);
        $personagem = new PersonagemResource($personagem); //dto de response
        return Response::json($personagem,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePersonagemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonagemRequest $request)
    {
        $dados = $request->safe()->all();
        $personagemDTO = new PersonagemDTO([]);

        // fill dados; // cast
        $personagemDTO->nome = $dados['nome'];
        $personagemDTO->historia = $dados['historia'];
        $personagemDTO->objetivos = $dados['objetivos'];

        $personagem = $this->personagemService->insert($personagemDTO);
        $personagem = new PersonagemResource($personagem); //dto de response
        return Response::json($personagem,201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonagemRequest  $request
     * @param  \App\Models\Personagem  $personagem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonagemRequest $request, $personagem)
    {
        $personagem = ModelsPersonagem::findOrFail($personagem);
        $personagem->fill($request->safe()->all());
        $personagem->save();

        $personagem = new EloquentPersonagemResource($personagem);
        
        return Response::json($personagem,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personagem  $personagem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personagem $personagem)
    {
        //
    }
}
