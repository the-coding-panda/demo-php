<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Nationalities;
use App\Models\Person;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $n = new Nationalities();
        $n->name = "French";
        $n->save();

        $e = new Nationalities();
        $e->name = "English";
        $e->save();

        $a = new Person();
        $a->firstName = "Simon";
        $a->surname = "Baralos";
        $a->address = "123 Fake Street";
        $a->postcode = "CF83 1FY";
        $a->favouriteColour = "Blue";
        $a->save();
        $a->nationalities()->attach(1);
        $a->nationalities()->attach(2);

        $this->call(PersonTableSeeder::class);
    }
}
