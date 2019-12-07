<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class alunos extends Model
{
    protected $fillable = ['id', 'nome', 'curso'];
    
    protected $table = 'alunos';

    public function projeto(){
        return $this->hasMany('App\Models\Projeto');
    }
}
