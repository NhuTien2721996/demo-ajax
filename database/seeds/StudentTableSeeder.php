<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = new \App\Student();
        $student->name = 'tiến';
        $student->age = '23';
        $student->group = 'C0819H2';
        $student->save();
        $student = new \App\Student();
        $student->name = 'tiến2';
        $student->age = '24';
        $student->group = 'C0819H1';
        $student->save();

    }
}
