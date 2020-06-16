<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tareas')->insert([
            'nombre' => 't1',
            'descripcion' => 'awiwi',
            'numero' => 1234,
            'estado' => 1,
        ]);

        DB::table('tareas')->insert([
            'nombre' => 't2',
            'descripcion' => 'awiwi',
            'numero' => 1234,
            'estado' => 1,
        ]);
        DB::table('tareas')->insert([
            'nombre' => 't3',
            'descripcion' => 'awiwi',
            'numero' => 1234,
            'estado' => 1,
        ]);
        DB::table('tareas')->insert([
            'nombre' => 't4',
            'descripcion' => 'awiwi',
            'numero' => 1234,
            'estado' => 1,
        ]);
        DB::table('tareas')->insert([
            'nombre' => 't5',
            'descripcion' => 'awiwi',
            'numero' => 1234,
            'estado' => 1,
        ]);
        DB::table('tareas')->insert([
            'nombre' => 't6',
            'descripcion' => 'awiwi',
            'numero' => 1234,
            'estado' => 1,
        ]);

        DB::table('tareas')->insert([
            'nombre' => 't7',
            'descripcion' => 'awiwi',
            'numero' => 1234,
            'estado' => 1,
        ]);
        DB::table('tareas')->insert([
            'nombre' => 't8',
            'descripcion' => 'awiwi',
            'numero' => 1234,
            'estado' => 1,
        ]);
        DB::table('tareas')->insert([
            'nombre' => 't9',
            'descripcion' => 'awiwi',
            'numero' => 1234,
            'estado' => 1,
        ]);
        DB::table('tareas')->insert([
            'nombre' => 't10',
            'descripcion' => 'awiwi',
            'numero' => 1234,
            'estado' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'adam',
            'email' => 'ad.river@hotmail.com',
            'password' => 1234,

        ]);
    }
}
