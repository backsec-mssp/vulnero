<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssetCategory extends Model
{
    public function assets()
    {
        return $this->hasMany('App\Asset');
    }
}
