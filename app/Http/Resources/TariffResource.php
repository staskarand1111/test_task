<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class TariffResource extends Resource
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
            'name' => $this->name,
            'is_enabled' => $this->is_enabled,
            'max_daily_cost' => $this->max_daily_cost,
            'stage_tariffs' => StageTariffResource::collection($this->stageTariffs),
            'additional_options' => AdditionalOptionsResource::collection($this->additionalOptions),
        ];
    }

}
