<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidades extends Model
{
    // Lista dos campos que podem ser gravados com o mass assignment
    protected $fillable = [ 'nome', 'estado_id' ];
    // $guarded - campos que não pode ser atualizados
    
    public function estado() {
        return $this->belongsTo('App\Estado');
    }
}
