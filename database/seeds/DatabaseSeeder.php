<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DirectorsSeeder::class);


        DB::table('users')->insert([
           'name' => "Dario",
           'email' => 'dario@gmail.com',
           'password' => bcrypt('secret'),
       ]);
    }
}
