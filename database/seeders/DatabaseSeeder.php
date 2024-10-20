<?php

namespace Database\Seeders;

use App\Models\departments;
use App\Models\roles;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // User::factory(10)->create([
        //     'fname' => fake()->firstName(),
        //     'sname' => fake()->lastName(),
        //     'mname' => fake()->lastName(),
        //     'email' => fake()->email(),
        //     'password'=>Hash::make('password')
        // ]);
        departments::create([
            'title'=>'Administration',
            'type'=>'Administrative',
        ]);
        departments::create([
            'title'=>'Customer Service',
            'type'=>'Customer Service',
        ]);
        roles::create([
            'dep_id'=>1,
            'title'=>'Admin',
            'job_description'=>'Manages all departments and rights',
            'job_requirements'=>"Understands the system and its functioning. In addition ability in debugging Laravel programs will be an added advantage",
        ]);
        roles::create([
            'dep_id'=>1,
            'title'=>'Director',
            'job_description'=>'Oversees all office operations',
            'job_requirements'=>"Own the organization",
        ]);
        roles::create([
            'dep_id'=>2,
            'title'=>'Customer',
            'job_description'=>'Random Inquiry',
            'job_requirements'=>"",
        ]);
        roles::create([
            'dep_id'=>2,
            'title'=>'Client',
            'job_description'=>'Undergoing Project',
            'job_requirements'=>"Must pay for service",
        ]);
        roles::create([
            'dep_id'=>2,
            'title'=>'Investor',
            'job_description'=>'Joint up on project',
            'job_requirements'=>"Readiness to invest",
        ]);
        User::create([
            'fname'=>'Edimon',
            'sname'=>'Abimon',
            'email'=>'eabimon@gmail.com',
            'password'=>Hash::make('qazaqaza'),
            'contact'=>'0701583807',
            'role_id'=>'1',
             'isAdmin'=>true
        ]);
        // User::factory(10)->create();
    }
}
