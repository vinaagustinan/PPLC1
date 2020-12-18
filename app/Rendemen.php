<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rendemen extends Model
{
    protected $table = 'Rendemen';
    protected $fillable = ['id_antrian', 'BeratTebu', 'NPP', 'KNT', 'HPB', 'PSHK','WR','rendemenSementara', 'hargaGiling', 'Biaya'];  
    
    public function petani()
    {
    	return $this->belongsTo('App\Petani');
    }
}
