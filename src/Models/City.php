<?php

namespace Guiliredu\BrazilianCityMigrationSeed\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $timestamps = false;

    public function state()
    {
        return $this->belongsTo('Guiliredu\BrazilianCityMigrationSeed\Models\State');
    }
}
