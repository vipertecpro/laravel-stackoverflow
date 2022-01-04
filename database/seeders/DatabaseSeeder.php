<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\User;
use Exception;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        User::factory(10)->create()->each(function($user){
            $user->questions()->saveMany(Question::factory(random_int(1,10))->make());
        });
    }
}
