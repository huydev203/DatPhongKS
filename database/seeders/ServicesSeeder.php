<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'name' => "Coca",
                'image' => "hinh/1689892319_coca.png",
                'price' => "15000"
            ],
            [
                'name' => "7Up",
                'image' => "hinh/1689892333_7up.png",
                'price' => "15000"
            ],
            [
                'name' => "Pepsi",
                'image' => "hinh/1689892352_pepsi.png",
                'price' => "15000"
            ],
            [
                'name' => "Fanta",
                'image' => "hinh/1689892387_fantaa.png",
                'price' => "15000"
            ],
        ]);
        //
    }
}
