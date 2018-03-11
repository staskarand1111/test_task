<?php

use Illuminate\Database\Seeder;

class TariffsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Tariff::class)->states('base')->create();
        factory(\App\Models\Tariff::class)->states('premium')->create()->each(function (\App\Models\Tariff $tariff){

            $tariff->stageTariffs()->save(factory(\App\Models\StageTariff::class)->states('reservation')->make());
            $tariff->stageTariffs()->save(factory(\App\Models\StageTariff::class)->states('review')->make());
            $tariff->stageTariffs()->save(factory(\App\Models\StageTariff::class)->states('parking')->make());
            $tariff->stageTariffs()->save(factory(\App\Models\StageTariff::class)->states('ride_tariff_by_time')->make());
            $tariff->stageTariffs()->save(factory(\App\Models\StageTariff::class)->states('ride_tariff_by_distance')->make());
            $tariff->additionalOptions()->save(\App\Models\AdditionalOption::make([
                'type' => 'baby_chair',
                'name' => 'Baby chair',
                'price' => 200,
                'measure' => 'min',
                'params' => [
                    'rise_max_cost' => 30000
                ]
            ]));


        });


    }
}
