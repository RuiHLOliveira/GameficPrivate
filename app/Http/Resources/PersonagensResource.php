<?php

namespace App\Http\Resources;

use JsonSerializable;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PersonagensResource extends JsonResource /*implements JsonSerializable*/
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $list = $this->getList();
        for ($i=0; $i < count($list); $i++) { 
            $list[$i] = new PersonagemResource($list[$i]);
        }
        return [
            'data' => $list,
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
