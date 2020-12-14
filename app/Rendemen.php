<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rendemen extends Model
{
    protected $table = 'Rendemen';
    protected $fillable = ['NoAntrian', 'tanggal', 'BeratTebu', 'NPP', 'KNT', 'HPB', 'PSHK','WR','NilaiRendemen', 'hargaGiling', 'Biaya'];   
}
