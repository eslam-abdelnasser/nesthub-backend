<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','mobile_number','type','title','about_me'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function routeNotificationForSlack(){
        //dynamic
        return 'https://hooks.slack.com/services/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';
    }
    //user has one image
    public function image()
    {
        return $this->hasOne('App\Models\Images');
    }
}
