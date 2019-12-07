<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    
    protected $fillable = ['id', 'nome', 'area'];

    protected $table = 'professors';

    public function projeto(){
        return $this->hasMany('App\Projeto');
    }
}
