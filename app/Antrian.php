<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{

    protected $fillable = ['id_petani','NoAntrian','id_pabrik', 'tanggal','jam','nopol',];
    protected $table = 'antrian';

    public function petani()
    {
    	return $this->hasOne('App\Petani');
    }

    public function pabrik()
    {
    	return $this->hasOne('App\Pabrik');
    }


}
