<?php

declare(strict_types=1);

namespace App\Services;

use App\Parameter;

/**
 * Class ParameterService
 * @package App\Services
 */
class ParameterService
{
    /**
     * @param string $key
     * @param null $value
     * @return \App\Parameter
     */
    public function setValue(string $key, $value = null): Parameter
    {
        return Parameter::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );
    }

    /**
     * @param string $key
     * @return mixed
     */
    public function  getValue(string $key)
    {
        /** @var Parameter $parameter */
        $parameter = Parameter::where('key', '=', $key)->first();

        if($parameter) {
            return $parameter->value;
        }
    }

}
