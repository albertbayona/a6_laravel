<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $fillable = [
        'title', 'lloc', 'metres2','user_id'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function publicacion(){
        $this->hasOne('App\Publicacion');
    }
}
