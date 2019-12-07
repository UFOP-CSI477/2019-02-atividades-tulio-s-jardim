<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class professors extends Model
{
    
    protected $fillable = ['id', 'nome', 'area'];

    protected $table = 'professors';

    public function projeto(){
        return $this->hasMany('App\Models\Projeto');
    }
}
