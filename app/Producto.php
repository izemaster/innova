<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre','descripcion','precio','categoria_id'];
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
