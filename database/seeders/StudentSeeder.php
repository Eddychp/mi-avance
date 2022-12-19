<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'name'=>'Eddy Daniel',
            'male_lastname'=>'Choquepata',
            'female_lastname'=>'Pineda',
            'code'=>'20200312',
        ]);

        Student::create([
            'name'=>'Andre Paolo',
            'male_lastname'=>'Luque',
            'female_lastname'=>'Alfaro',
            'code'=>'20200314',
        ]);

        Student::create([
            'name'=>'Aldhair',
            'male_lastname'=>'Huaquisto',
            'female_lastname'=>'Coila',
            'code'=>'20200356',
        ]);
    }
}
