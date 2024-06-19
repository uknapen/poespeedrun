<?php

namespace Database\Seeders;

use App\Models\Run;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);
        $user = User::factory()->create([
            'name' => 'Asareck',
            'email' => 'asa@gmail.com'
        ]);



        Run::factory(2)->create([
            'user_id'=> $user->id
        ]);
}
}