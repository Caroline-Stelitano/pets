<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class owner extends Model
{
    public function pet() {
        return $this->hasMany('App\pet');
    }
}
