<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{

    protected $fillable = ['id_petani','NoAntrian', 'tanggal','jam','nopol'];
    protected $table = 'antrian';

    public function pabrik()
    {
    	return $this->hasOne('App\Pabrik');
    }
}
