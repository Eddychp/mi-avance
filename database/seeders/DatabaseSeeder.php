<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(UserSeeder::class);
        // $this->call(CategorySeeder::class);
        // $this->call(AreaSeeder::class);
        // $this->call(InvestigationSeeder::class);
        // $this->call(ContestantSeeder::class);
        // $this->call(ResultSeeder::class);
        // $this->call(ObservationSeeder::class);
        $this->call(StudentSeeder::class);
    }
}
