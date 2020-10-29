<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pabrik extends Model
{
    //
    protected $fillable = ['user_id', 'nama_pabrik','no_hp','alamat', 'status'];

    protected $table = 'pabrik';
}
