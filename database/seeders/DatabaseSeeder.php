<?php

namespace Database\Seeders;

use App\Models\Todo;
use App\Models\User;
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
         User::factory()->count(random_int(5,20))->create()
         ->each(fn (User $user) => Todo::factory()->state(['user_id'=> $user->id])->count(random_int(5,200))->create());
    }
}
