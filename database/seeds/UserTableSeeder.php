<?php

use Illuminate\Database\Seeder;
use Faker\Factory; 

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // reset the user table
        DB::statement('SET FOREIGN_KEY_CHECKS=0'); 
        DB::table('users')->truncate(); 

        $faker = Factory::create(); 

        // generate 3 users/authors
        DB::table('users')->insert([
            [
                'name' => "John Doe",
                'slug' => "jone-doe",
                'email' => "johndoe@test.com",
                'password' => bcrypt('secret'),
                'bio' => $faker->text(rand(250, 300))
            ],
            [
                'name' => "Jane Doe",
                'slug' => "jane-doe",
                'email' => "janedoe@test.com",
                'password' => bcrypt('secret'),
                'bio' => $faker->text(rand(250, 300))
            ],
            [
                'name' => "Edo Masaru",
                'slug' => "edo-masaru",
                'email' => "edo@test.com",
                'password' => bcrypt('secret'),
                'bio' => $faker->text(rand(250, 300))
            ],
    ]); 

    }
}
