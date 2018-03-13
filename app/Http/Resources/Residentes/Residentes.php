<?php

namespace App\Http\Resources\Residentes;

use Illuminate\Http\Resources\Json\Resource;

class Residentes extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
