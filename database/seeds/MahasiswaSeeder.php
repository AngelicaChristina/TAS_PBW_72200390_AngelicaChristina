<?php

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID'); 
 
        for($i = 1; $i <= 100; $i++) 
        { 
            DB::table('mahasiswa')->insert([ 
                'nim' => $faker->randomNumber(), 
                'nama' => $faker->firstName(), 
                'gender' => $faker->suffix(),                 
                'jurusan' => $faker->title(), 
                'bimin' => $faker->jobTitle() 
            ]); 
        }
    }
}
