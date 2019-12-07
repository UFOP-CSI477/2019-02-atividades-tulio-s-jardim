<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['id', 'nome', 'curso'];
    
    protected $table = 'alunos';

    public function projeto(){
        return $this->hasMany('App\Projeto');
    }
}
