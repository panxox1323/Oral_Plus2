<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $especialidad = \DB::table('especialidades')->insert(array(
            'especialidad'      => 'Ninguna'
        ));

        \DB::table('users')->insert(array(
            'first_name'         => 'Francisco',
            'last_name'          => 'Inostroza',
            'email'              => 'francisco.inostroza@virginiogomez.cl',
            'password'           => bcrypt('123456'),
            'type'               => 'admin',
            'run'                => '15.696.727-0',
            'fecha_nacimiento'   => '1983-05-31',
            'telefono'           => '93509086',
            'saldo'              => '0',
            'direccion'          => 'Dr. Mario Mujica #189',
            'ciudad'             => 'Parral',
            'id_especialidad'    => $especialidad

        ));

        \DB::table('listado_horas')->insert(array(

            'hora_inicio'    => '09:00',
            'hora_termino'   => '09:30'
        ));
        \DB::table('listado_horas')->insert(array(

            'hora_inicio'    => '09:30',
            'hora_termino'   => '10:00'
        ));
        \DB::table('listado_horas')->insert(array(

            'hora_inicio'    => '10:00',
            'hora_termino'   => '10:30',
            'duracion'       => '30 minutos'
        ));



    }
}
