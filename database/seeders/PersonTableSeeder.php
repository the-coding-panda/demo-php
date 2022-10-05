<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Person;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Person();
        $a->firstName = "Simon";
        $a->surname = "Baralos";
        $a->address = "123 Fake Street";
        $a->postcode = "CF83 1FY";
        $a->favouriteColour = "Blue";
        $a->save();

        $b = new Person();
        $b->firstName = "Phil";
        $b->surname = "Powers";
        $b->address = "321 Fake Street";
        $b->postcode = "CF11 1FY";
        $b->favouriteColour = "Red";
        $b->save();

        Person::factory()->count(50)->create();
    }
}
