<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    // Objeto para compañias creado y asignado a tabla.
    protected $table = 'companies';

    // Valores a ser asignados en el CRUD.
    protected $fillable = [
        'name', 'headquarters', 'industry', 'type'
    ];

    // Relación Uno a Muchos (Una empresa puede tener muchos Trabajadores).
    public function workers(){
    	return $this->hasMany('App\Worker');
    }
}
