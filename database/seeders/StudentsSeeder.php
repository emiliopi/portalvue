<?php

namespace Database\Seeders;

use Database\Factories\StudentsFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fact = new StudentsFactory();
        $fact->count(1000)
            ->create();
    }
}
