<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rendemen extends Model
{
    protected $table = 'Rendemen';
    protected $fillable = ['NoAntrian','tanggal','NilaiRendemen','DetailRendemen','BeratTebu'];
}
