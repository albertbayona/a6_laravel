<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;


/**
 * Post
 *La siguiente linea se pone solo para que no aparezca en el id como que esta mal
 * @mixin Builder
 */

class Property extends Model
{
    protected $table = 'publicacions';

    protected $fillable = [
        'title', 'lloc', 'metres2','user_id'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function publication(){
        $this->hasOne('App\Publication');
    }
}
