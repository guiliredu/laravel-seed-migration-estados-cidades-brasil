<?php

namespace Guiliredu\BrazilianCityMigrationSeed\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public $timestamps = false;

    public function states()
    {
        return $this->hasMany('Guiliredu\BrazilianCityMigrationSeed\Models\State');
    }

}
