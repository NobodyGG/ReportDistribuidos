<?php

use Illuminate\Database\Seeder;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert(
          [
              'ci' => '12345678',
              'nombres' => 'Juan',
              'apellidos'=> 'Pinto',
              'direccion'=> 'Av. Las banderas S/N',
              'telefono' => '6247417',
              'fecha_nacimiento' => date('Y-m-d H:i:s'),
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]
        );

        $persona = array(
            'ci' => '86654321',
            'nombres' => 'Alex',
            'apellidos' => 'Mamani',
            'direccion'=> 'La paz 420',
            'telefono'=>'72412345',
            'fecha_nacimiento' => '2019-10-10 08:00:00',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        );

        DB::table('personas')->insert($persona);
    }
}
