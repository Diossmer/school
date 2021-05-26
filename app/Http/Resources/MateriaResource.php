<?php

namespace App\Http\Resources;

use Illuminate\Support\Str;
use Illuminate\Http\Resources\Json\JsonResource;

class MateriaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "identificar"=> Str::random(40),
            "materia"=> Str::of($this->nombre)->singular()->upper(),
            "primary"=> $this->codigo_escolar
        ];
    }
    public function with($request)
    {
        return [
            'response'=> true,
        ];
    }
}
