<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pet extends Model
{
    protected $fillable = [];   //captará itens do formulario do cliente
    //protected $table = "pets";

    //ex de interligações das tables (1-1, 1-n, n-n)
    
    public function owner() {
        return $this->belongsTo('App\Owner','id', 'owner_id');
    }

    
    /*
    public function user() {
        return $this->hasOne('App\User');
    }
    public function hasMany() {

    }
    public function belongsTo() {

    }
    public function hasOne() {

    }
    */
}
