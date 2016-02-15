<?php

use Illuminate\Database\Seeder;
use App\Models\Family;

class FamiliesTableSeeder extends Seeder
{
    public function run()
    {
        $data = ["Petersen", 'Armstrong ', 'Gruber', 'Mayer', 'Koller'];

        for ($i = 0; $i < count($data); $i++) {
            Family::create([
                'name' => $data[$i],
            ]);
        }
    }
}