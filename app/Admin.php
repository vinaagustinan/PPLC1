<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticable
{
    use Notifiable;

    protected $guard = 'admin';

    protected $table = 'admin';
    
    protected $fillable = ['nama','no_hp','email','password','status'];

    protected $hidden = ['password'];
}
