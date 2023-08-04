<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'image' => 'TestUser',
            'birth' => "2021-08-25",
            'gender' => '1',
            'address' => 'Test User',
            'email' => 'huy@gmail.com',
            'password' => Hash::make('1'),
            'phone' => '098765433',
            'username' => 'huy111223',
            'role_id' => '1',
            'number_of_booking' => '0',

        ]);
        $this->call([
           TypeRoomSeeder::class,
           ServicesSeeder::class,
            CustomerSeeder::class,
            RoomSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
