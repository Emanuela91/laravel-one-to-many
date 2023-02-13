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
        Person::all()->each(function ($p) {
            $pd = PersonDetail::factory()->make();
            $pd->person()->associate($p);

            $pd->save();

        });

    }
}