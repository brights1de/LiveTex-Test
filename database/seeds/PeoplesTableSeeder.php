<?php

use Illuminate\Database\Seeder;
use App\Models\People;

class PeoplesTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'          => 'Jack',
                'surname'       => 'Peterson',
                'age'           => 68,
                'gender'        => 'male',
                'family_id'     => 1,
                'generation_id' => 1,
            ],
            [
                'name'          => 'Maria',
                'surname'       => 'Peterson(Low)',
                'age'           => 57,
                'gender'        => 'female',
                'family_id'     => 1,
                'generation_id' => 1,
            ],
            [
                'name'          => 'Kolin',
                'surname'       => 'Peterson',
                'age'           => 36,
                'gender'        => 'male',
                'family_id'     => 1,
                'generation_id' => 2,
            ],
            [
                'name'          => 'Jessica',
                'surname'       => 'Peterson(Nikolson)',
                'age'           => 33,
                'gender'        => 'female',
                'family_id'     => 1,
                'generation_id' => 2,
            ],
            [
                'name'          => 'Stiv',
                'surname'       => 'Peterson',
                'age'           => 10,
                'gender'        => 'male',
                'family_id'     => 1,
                'generation_id' => 3,
            ],
        ];

        for ($i = 0; $i < count($data); $i++) {
            People::create([
                'name'          => $data[$i]['name'],
                'surname'       => $data[$i]['surname'],
                'age'           => $data[$i]['age'],
                'gender'        => $data[$i]['gender'],
                'family_id'     => $data[$i]['family_id'],
                'generation_id' => $data[$i]['generation_id'],
            ]);
        }
    }
}