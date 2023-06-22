<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EloquentPersonagemResource extends JsonResource /*implements JsonSerializable*/
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'nome' => $this->nome,
            'historia' => $this->historia,
            'objetivos' => $this->objetivos,
            'nivel' => $this->nivel,
        ];
    }
}
