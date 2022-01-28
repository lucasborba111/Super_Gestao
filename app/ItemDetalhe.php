<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemDetalhe extends Model
{
    protected $table = 'produto_detalhes';
    protected $fillable = ['produto_id','comprimento', 'largura', 'altura', 'unidade_id']; //detalhe do produto, então pertence ao produto

    public function item(){
       return $this->belongsTo('App\Item', 'produto_id', 'id');
    }
}
