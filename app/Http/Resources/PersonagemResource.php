<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonagemResource extends JsonResource /*implements JsonSerializable*/
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
            'id' => $this->getId(),
            'created_at' => $this->getCreatedAt(),
            'updated_at' => $this->getUpdatedAt(),
            'nome' => $this->getNome(),
            'historia' => $this->getHistoria(),
            'objetivos' => $this->getObjetivos(),
            'nivel' => $this->getnivel(),
        ];
    }
}
