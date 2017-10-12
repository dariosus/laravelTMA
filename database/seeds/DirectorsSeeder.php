<?php

use Illuminate\Database\Seeder;

class DirectorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Director::class)->times(50)->create();
    }
}
