<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Тарификация отдельного этапы аренды
 *
 * @property int $id
 * @property int $tariff_id
 * @property string $stage_type
 * @property int $price
 * @property string $measure
 * @property array $params
 * @property bool $is_enabled
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 */
class StageTariff extends Model
{
    use SoftDeletes;

    const TYPE_RESERVATION  = 'reservation',
          TYPE_PARKING      = 'parking',
          TYPE_RIDE         = 'ride',
          TYPE_REVIEW       = 'review';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $casts = [
        'params'   => 'array',
        'is_enabled'   => 'boolean',
    ];

}
