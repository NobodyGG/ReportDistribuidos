<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cliente;
use App\Vehiculo;

class Reserva extends Model
{
    protected $table = 'reservas';

    public function cliente(){
    	return $this->belongsTo(Cliente::class);
    }

    public function vehiculo(){
    	return $this->belongsTo(Vehiculo::class);
    }
}
