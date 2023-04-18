<?php

namespace Database\Seeders;

use App\Models\Conference;
use Carbon\Carbon;
use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new Conference())->insert([
            [
                'title' => Lorem::sentence(5),
                'description' => Lorem::text(),
                'dateOfConference' => Carbon::create('2023', '05', '01'),
                'address' => "adresas 7",
                'country' => 'Lietuva',
                'city' => 'Kupiškis'
            ],
            [
                'title' => Lorem::sentence(5),
                'description' => Lorem::text(),
                'dateOfConference' => Carbon::create('2023', '06', '20'),
                'address' => "adresas 5",
                'country' => 'Lietuva',
                'city' => 'Kuršėnai'
            ]
        ]);
    }
}
