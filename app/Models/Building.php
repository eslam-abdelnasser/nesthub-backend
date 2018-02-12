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
    public function images()
    {
        return $this->hasMany('App\Models\Images','building_id');
    }
    public function facilities(){
        return $this->belongsToMany(Facility::class);
    }

    public function offices()
    {
        return $this->hasMany(Office::class);
    }
    public function addtionals()
    {
        return $this->hasOne(Additional::class);
    }
    public function images(){
        return $this->hasMany(Images::class);
    }
}
