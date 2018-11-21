<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function produtos(){
        return $this->belongsToMany('App\Produto', 'pedido_produtos')->withPivot('quantidade');
    }

    public function cliente(){
        return $this->belongsTo('App\Cliente');
    }
}
