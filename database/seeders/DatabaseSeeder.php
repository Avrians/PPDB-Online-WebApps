<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Category;
use App\Models\PassingScore;
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
        User::create([
            'name' => 'Avriansyah',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345')
        ]);

        PassingScore::create([
            'nama' => 'nilai minimal',
            'nilai' => '0.7',
        ]);

        $categories = [
            [
                'name' => 'Jarak',
                'atribut' => 'Cost',
                'bobot' => '0.5'
            ],
            [
                'name' => 'Nilai Indonesia',
                'atribut' => 'Benefit',
                'bobot' => '0.5'
            ],
            [
                'name' => 'Nilai Inggris',
                'atribut' => 'Benefit',
                'bobot' => '0.5'
            ],
            [
                'name' => 'Nilai MTK',
                'atribut' => 'Benefit',
                'bobot' => '0.5'
            ],
            [
                'name' => 'Nilai IPA',
                'atribut' => 'Benefit',
                'bobot' => '0.5'
            ]
        ];
        foreach ($categories as $ktg) {
            Category::create($ktg);
        }
    }
}
