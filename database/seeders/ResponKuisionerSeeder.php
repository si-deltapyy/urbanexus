<?php

namespace Database\Seeders;

use App\Models\OpsiJawaban;
use App\Models\ResponKuisioner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\TextUI\XmlConfiguration\Group;

class ResponKuisionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $group_id = rand();
        $ans = rand(1,50);

        for ($pertanyaan_id = 1; $pertanyaan_id <= 73; $pertanyaan_id++) {
            ResponKuisioner::create([
                'pertanyaan_id' => $pertanyaan_id,
                'user_id' => 3,
                'jawaban' => rand(1,50),
                'group_id' => $group_id
            ]);
        }

        for ($pertanyaan_id = 1; $pertanyaan_id <= 73; $pertanyaan_id++) {
            ResponKuisioner::create([
                'pertanyaan_id' => $pertanyaan_id,
                'user_id' => 2,
                'jawaban' => rand(1,50),
                'group_id' => $group_id
            ]);
        }
        
        for ($pertanyaan_id = 76; $pertanyaan_id <= 91; $pertanyaan_id++){
            ResponKuisioner::create([
                'pertanyaan_id' => $pertanyaan_id,
                'user_id' => 2,
                'jawaban' => rand(5,13),
                'group_id' => $group_id
            ]);
        }
        for ($pertanyaan_id = 76; $pertanyaan_id <= 91; $pertanyaan_id++){
            ResponKuisioner::create([
                'pertanyaan_id' => $pertanyaan_id,
                'user_id' => 3,
                'jawaban' => rand(5,13),
                'group_id' => $group_id
            ]);
        }

    }
}
