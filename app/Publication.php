<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;


/**
 * Post
 *La siguiente linea se pone solo para que no aparezca en el id como que esta mal
 * @mixin Builder
 */

class Publication extends Model
{
    protected $table = 'publicacions';
    protected $fillable=['titol','disponibilitat','propietat_id'];

    protected $primaryKey = 'id';//por defecto coge ID y que es un numero autoincremental
//    public $incrementing = false; //si no queremos que sea autoincremental
//    protected $keyType = 'string';//en caso de ser un string
//    public $timestamps = false;//si no tenemos las columnas created_at y updated_at lo podemos poner como falso
//    protected $dateFormat = 'U';//si necesitamos algun formato en concreto

//    const CREATED_AT = 'creation_date'; //si hemos cambiado el nombre de la columna
//    const UPDATED_AT = 'last_update'; //si hemos cambiado el nombre de la columna

    public function property(){
        return $this->belongsTo('App\Property', 'id');
    }
}
