<?php

namespace Database\Seeders;

use App\Models\Coaches;
use App\Models\Players;
use App\Models\Program;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Program::create([
            'name' => 'ELite',
            'description' => "ini Program kelas elite",
            'purpose' => "bertujuan untuk membina karakter dan juara",
            'cover' => 'cover elite',
            'img' => json_encode([
                'foto' => 'url_to_image.jpg',
            ]),
        ]);
        User::factory()->create([
            'username' => 'coach',
            'password' => Hash::make('coach'),
            'role' => 'coach',
            'status' => 1
        ]);
        Coaches::create([
            'name' => 'Reindra Swastika Putra',
            'number_phone' => '091238429238',
            'foto' => '091238429238',
            'user_id' => 1,
            'program_id' => 1
        ]);
        // create player
        User::factory()->create([
            'username' => 'player',
            'password' => Hash::make('player'),
            'role' => 'player',
            'status' => 1
        ]);
        Players::create([
            'name' => 'Jordanio Natanael Iwan',
            'school' => 'SMA N 2 Ponorogo',
            'number_phone' => '091238429238',
            'instagram' => 'dasaamarch',
            'gender' => 'laki-laki',
            'place_of_birth' => 'Ponorogo',
            'date_of_birth' => '2007-09-29',
            'foto' => '29-09-2007',
            'program_id' => 1,
            'user_id' => 2
        ]);
    }
}
