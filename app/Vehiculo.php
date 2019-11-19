<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Reserva;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';

    public function reservas(){
    	return $this->hasMany(Reserva::class);
    }
}
