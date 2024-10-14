<?php

namespace Database\Seeders;

use App\Models\Tasks;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(50)->create();

        User::query()->inRandomOrder()->limit(10)->get()->each(function (User $u) {
             Tasks::factory()->create(['from_user' => $u->id]);
        });

    }
}
