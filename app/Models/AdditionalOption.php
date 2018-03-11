<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Дополнительная опция для аренды автомобиля
 *
 * @property int $id
 * @property int $tariff_id
 * @property string $type
 * @property string $name
 * @property int $price
 * @property string $measure
 * @property array $params
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 */
class AdditionalOption extends Model
{
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $casts = [
        'params'   => 'array',
    ];

}
