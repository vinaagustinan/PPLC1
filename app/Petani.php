<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petani extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $fillable = ['user_id', 'nama','no_hp','no_ktp','alamat_lahan', 'luas_lahan', 'status'];

    protected $table = 'petani';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
