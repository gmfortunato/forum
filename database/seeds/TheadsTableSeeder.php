<?php

use Illuminate\Database\Seeder;

class TheadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Thread::class, 50)->create();
    }
}
