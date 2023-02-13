<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Person;
use App\Models\PersonDetail;


class PersonDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // funzione che prende per ogni persona le caratteristiche
        Person::all()->each(function ($p) {
            $pd = PersonDetail::factory()->make();
            // le associa con la funzione person di PersonDetail
            $pd->person()->associate($p);
            // e le crea 
            $pd->save();

        });

    }
}