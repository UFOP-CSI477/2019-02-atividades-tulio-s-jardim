<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    
    protected $fillable = ['id', 'titulo', 'ano', 'semestre', 'aluno_id', 'professor_id'];
    
   protected $table = 'projetos';

    public function aluno(){
        return $this->belongsTo('App\Aluno', 'id');
    }
    
    public function professor(){
        return $this->belongsTo('App\Professor', 'id');
    }
}
