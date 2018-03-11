<?php

namespace App\Http\Controllers;



use App\Http\Resources\TariffResource;
use App\Models\StageTariff;
use App\Models\Tariff;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class TariffsController extends Controller
{


    /**
     * Display the tariff resource.
     *
     * @param  int  $id
     * @return TariffResource
     */
    public function show($id)
    {
        if(!is_numeric($id))
            throw new BadRequestHttpException('param :id must be integer');

       return new TariffResource(Tariff::findOrFail($id));
    }


}
