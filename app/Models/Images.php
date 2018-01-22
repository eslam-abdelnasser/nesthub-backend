<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    //
    protected $table = 'images';


    public function building()
    {
        return $this->belongsTo('App\Models\Building','building_id');
    }
}
