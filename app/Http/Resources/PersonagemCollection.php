<?php

namespace App\Http\Resources;

use JsonSerializable;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PersonagemCollection extends ResourceCollection /*implements JsonSerializable*/
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
            'data' => $this->getList(),
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
