<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{

    protected $fillable = ['id','NoAntrian', 'tanggal','jam','nopol'];
    protected $table = 'antrian';
}
