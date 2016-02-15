<?php

use Illuminate\Database\Seeder;
use App\Models\Generation;

class GenerationsTableSeeder extends Seeder
{
    public function run()
    {
        $data = ["first generation", 'two generation', 'three generation'];

        for ($i = 0; $i < count($data); $i++) {
            Generation::create([
                'name' => $data[$i],
            ]);
        }
    }
}