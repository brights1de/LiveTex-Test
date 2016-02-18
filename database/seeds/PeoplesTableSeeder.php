<?php

use Illuminate\Database\Seeder;
use App\Libs\People\PeopleRepository;

class PeoplesTableSeeder extends Seeder
{
    private $peopleRepository;

    public function __construct(PeopleRepository $peopleRepository)
    {
        $this->peopleRepository = $peopleRepository;
    }

    public function run()
    {
        $data = [
            [
                'name'    => 'Maria',
                'surname' => 'Peterson(Low)',
                'age'     => 57,
                'gender'  => 'female',
                'spouse'  => null,
            ],
            [
                'name'    => 'Jack',
                'surname' => 'Peterson',
                'age'     => 68,
                'gender'  => 'male',
                'spouse'  => 1,
            ],
            [
                'name'    => 'Jessica',
                'surname' => 'Peterson(Nikolson)',
                'age'     => 33,
                'gender'  => 'female',
                'spouse'  => null,
            ],
            [
                'name'      => 'Kolin',
                'surname'   => 'Peterson',
                'age'       => 36,
                'gender'    => 'male',
                'parent_id' => 2,
                'spouse'    => 3,

            ],
            [
                'name'      => 'Stiv',
                'surname'   => 'Peterson',
                'age'       => 10,
                'gender'    => 'male',
                'parent_id' => 4,
                'spouse'    => null,

            ],
        ];

        for ($i = 0; $i < count($data); $i++) {
            $this->peopleRepository->createPeople($data[$i]);
        }
    }
}