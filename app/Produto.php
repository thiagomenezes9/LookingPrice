<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['descricao','cd_barras','foto','categoria_id','marca_id'];


    public function preco(){
        return $this->hasMany('App\Preco','produto_id');
    }

    public function oferta(){
        return $this->hasMany('App\Oferta', 'produto_id');
    }


    public function categoria(){
        return $this->belongsTo('App\Categoria');
    }

    public function marca(){
        return $this->belongsTo('App\Marca');
    }



    public function interesse(){
        return $this->hasMany('App\Interesse','produto_id');
    }

    public function acesso(){
        return $this->hasMany('App\Acesso','produto_id');
    }


}
