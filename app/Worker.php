<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    // Objeto para trabajadores creado y asiganado a tabla.
    protected $table = 'workers';

    // Valores a ser asignados en el CRUD.
    protected $fillable = [
        'first_name', 'last_name', 'age', 'position', 'company_id'
    ];

    // Relación Uno a Muchos INVERSA (Un trabajador pertenece solo a una empresa).
    public function companies(){
    	return $this->belongsTo('App\Company');
    }
}
