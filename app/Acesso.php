<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acesso extends Model
{
    protected $fillable = ['data','produto_id','user_id'];

    public function produto(){
        return $this->belongsTo('App\Produto');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

}
