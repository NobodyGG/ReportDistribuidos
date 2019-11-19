<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cliente;
use App\User;	

class Persona extends Model
{
    protected $table = 'personas';

    protected $fillable = ['ci', 'nombres', 'apellidos'];

    public function cliente(){
    	return $this->hasOne(Cliente::class);
    }

    public function user(){
    	return $this->hasOne(User::class);
    }
}
