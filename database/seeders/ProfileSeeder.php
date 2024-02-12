<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profiles = [
            [
                'id' => Str::random(20),
                'name' => "John Doe",
                'age' => "32",
                'gender' => "Male",
            ],
            [
                'id' => Str::random(20),
                'name' => "Maria",
                'age' => "28",
                'gender' => "Female",
            ],
            [
                'id' => Str::random(20),
                'name' => "Stanley",
                'age' => "25",
                'gender' => "Male",
            ]
        ];

        Profile::insert($profiles);
    }
}
