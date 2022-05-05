<?php

use App\Categoria;
use App\Producto;
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
        Categoria::create([
            'nombre' => 'Monitores'
        ]);
        Categoria::create([
            'nombre' => 'Procesadores'
        ]);
        Categoria::create([
            'nombre' => 'Perifericos'
        ]);
        factory(Producto::class,10)->create();


    }
}
