<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rendemen extends Model
{
    protected $table = 'rendemen';
    protected $fillable = ['NoAntrian', 'tanggal', 'BeratTebu', 'NPP', 'KNT', 'HPB', 'PSHK','WR','NilaiRendemen'];   
}
