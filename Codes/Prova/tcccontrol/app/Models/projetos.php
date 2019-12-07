<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class projetos extends Model
{
    
    protected $fillable = ['id', 'titulo', 'ano', 'semestre', 'aluno_id', 'professor_id'];
    
    protected $table = 'projetos';

    public function aluno(){
        return $this->belongsTo('App\Models\Aluno', 'id');
    }
    
    public function professor(){
        return $this->belongsTo('App\Models\Professor', 'id');
    }
}
