<?php

use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Persona::class, 10)->create()->each(function ($persona) {
            $persona->save();
        });
    }
}
