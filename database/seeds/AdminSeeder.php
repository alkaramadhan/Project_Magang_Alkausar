<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('admins')->insert([
    			'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password ?: $password = bcrypt('secret'),
    		]);
 
    	}
    }
}
