<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    //
    protected $fillable = [
        'name',
        'type'
    ] ;

    public function buildings(){
        return $this->belongsToMany('App\Models\Facility','building_facility','building_id','facilities_id')->withTimestamps();
    }

}
