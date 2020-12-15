<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petani extends Model
{
    protected $table = 'petani';
    protected $fillable = ['user_id', 'nama','no_hp','no_ktp','alamat_lahan', 'luas_lahan', 'status'];
    
}
