<?php

namespace Database\Seeders;

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
       
        \App\Models\User::factory(5)->create();
         \App\Models\Persona::factory(5)->create();
         \App\Models\Empresa::factory(5)->create();
         \App\Models\SociedadAccidental::factory(5)->create();
         \App\Models\ProyectoEmpresa::factory(10)->create();
         \App\Models\ProyectoPersona::factory(10)->create();

       //  \App\Models\DescripcionSociedadAccidental::factory(10)->create();
       /**
      *
         \App\Models\SociedadAccidental::factory(10)
                                        ->hasEmpresas(2)
                                        ->create();
                                       
        for ($i = 0; $i < 5; $i++) {
                $Empresa = factory(App\Empresa::class)->create();

                $SociedadAccidental = factory(App\SociedadAccidental::class)->create();
                $DescripcionSociedadAccidental = factory(App\DescripcionSociedadAccidental::class)->create();

                DB::table('DescripcionSociedadAccidental_descripcionSociedadAccidental')->insert([
                    'Empresa_id' => $Empresa->id,
                    'Sociedad_id' => $SociedadAccidental->id,
                    'DescipcionSociedadAccidental_id' => $DescripcionSociedadAccidental->id
                ]);
            }
        */ 
            }
}
