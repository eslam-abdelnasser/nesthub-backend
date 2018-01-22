<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    //
    protected $table = 'offices';

    public function building()
    {
        return $this->belongsTo('App\Models\Office','building_id');
    }
}
