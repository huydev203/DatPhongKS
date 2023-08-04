<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('room')->insert([
            [
                'name' => "Huy",
                'image' => "hinh/1690190199_phong1.jpg",
                'price' => "123",
                'description' => "Nam",
                'room_type' => "1",
                'status' => "1 ",



            ],

        ]);


    }
}
