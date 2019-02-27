<?php

namespace Guiliredu\BrazilianCityMigrationSeed\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public $timestamps = false;

    public function cities()
    {
        return $this->hasMany('Guiliredu\BrazilianCityMigrationSeed\Models\City');
    }
}
