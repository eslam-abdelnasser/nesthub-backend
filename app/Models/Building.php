<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    //



    protected $table = 'buildings';
    protected $fillable = ['name','full_address','user_id','welcome_message','about_us','postcode','facilities'] ;

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function facilities(){
        return $this->belongsToMany('App\Models\Facility','building_facility','building_id','facilities_id')->withTimestamps();
    }
    public function offices()
    {
        return $this->hasMany(Office::class);
    }
}
