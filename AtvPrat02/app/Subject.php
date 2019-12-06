<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function requests(){
        return $this->hasMany('App\Request');
    }
}
