<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Persona;
use App\Reserva;

class Cliente extends Model
{
    protected $table = 'clientes';

    public function persona(){
    	return $this->belongsTo(Persona::class);
    }

    public function reservas(){
    	return $this->hasMany(Reserva::class);
    }
}
