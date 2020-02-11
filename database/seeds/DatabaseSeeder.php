<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     factory(User::class,50)->create();
     factory(\App\Listing::class,50)->create();
    }
}
