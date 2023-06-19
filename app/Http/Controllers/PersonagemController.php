<?php

namespace App\Http\Controllers;

use App\Domain\Entities\Personagem;
use Illuminate\Support\Facades\Response;
use App\Http\Resources\PersonagemResource;
use App\Application\Services\PersonagemDTO;
use App\Http\Requests\StorePersonagemRequest;
use App\Http\Requests\UpdatePersonagemRequest;
use App\Models\Personagem as ModelsPersonagem;
use App\Application\Services\PersonagemService;
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
        $personagemDTO
        ->setNome($dados['nome'])
        ->setHistoria($dados['historia'])
        ->setObjetivos($dados['objetivos']);

        $personagem = $this->personagemService->insert($personagemDTO);
        
        return Response::json($personagem,201);
        // $personagem = $personagem->find($personagem->id);
        // $personagem = new PersonagemResource($personagem);
        // return Response::json($personagem,201);
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

        // $personagem = $personagem->find($personagem->id);
        $personagem = new PersonagemResource($personagem);
        
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
