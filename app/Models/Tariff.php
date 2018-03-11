<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Тариф на аренду авто, состоит из набора стратегий по тарификации разных этапов аренды
 *
 * @property int $id
 * @property string $name
 * @property bool $is_enabled
 * @property int $max_daily_cost
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 */
class Tariff extends Model
{
    use SoftDeletes;


    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $casts = [
        'is_enabled' => 'boolean',
    ];


    /**
     * Содержит стратегии тарификации этапов аренды
     *
     * @return HasMany
     */
    public function stageTariffs() : HasMany {

        return $this->hasMany(StageTariff::class);
    }

    /**
     * Дополнительные опции
     *
     * @return HasMany
     */
    public function additionalOptions() : HasMany {

        return $this->hasMany(AdditionalOption::class);
    }
}
