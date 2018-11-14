<?php

declare(strict_types = 1);

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Parameter
 * @property string $key
 * @property string|null $value
 * @package App
 */
class Parameter extends Model
{
    const PARAMETER_WIND_SPEED = 'wind_speed';
    /**
     * @var array
     */
    protected $fillable = [
        'key',
        'value'
    ];

}
