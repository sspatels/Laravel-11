<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $json = File::get(path:'database/json/students.json');
        // $students = collect(json_decode($json));
        // $students->each(function($student) {
        //     student::create([
        //         'name' => $student->name,
        //         'email' => $student->email,
        //         'phone_number' => $student->phone_number,
        //         'status' => $student->status,
        //         'description' => $student->description
        //     ]);
        // });

        for($i = 1; $i <=100000; $i++) {
          student::create([
            'name' => fake()->name(),
             'email' => fake()->unique()->safeEmail(),
             'phone_number' => 1234567890,
             'status' => 'active',
             'description' => fake()->paragraph()
        ]);
        }
        
    }
}
