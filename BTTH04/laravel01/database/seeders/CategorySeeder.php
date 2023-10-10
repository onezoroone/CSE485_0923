<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Faker = Faker::create();
        for($i=0;$i<10;$i++){
            DB::table('categories')->insert([
                'name'=> $Faker->name,
                'description'=>$Faker->sentence,
            ]);
        }
    }
}
