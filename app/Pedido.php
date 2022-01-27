<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //
    protected $fillable = ['id', 'cliente_id'];

    public function cliente(){
        return $this->belongsTo('App\Cliente', 'cliente_id');
    }
    public function pedido(){
        return $this->hasMany('App\Pedido', 'cliente_id');

    }
}
