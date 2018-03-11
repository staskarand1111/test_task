<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class StageTariffResource extends Resource
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
            'id' => $this->id,
            'tariff_id' => $this->tariff_id,
            'stage_type' => $this->stage_type,
            'price' => $this->price,
            'measure' => $this->measure,
            'params' => $this->params,
            'is_enabled' => $this->is_enabled,
        ];
    }

}
