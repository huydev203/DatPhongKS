<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'name' => "Huy",
                'image' => "hinh/1689892945_sieub.jpg",
                'birth' => "2003/12/01",
                'gender' => "Nam",
                'address' => "Nam Định",
                'email' => "huy2@gmail.com",
                'phone' => "012345627",
                'username' => "nthuy1",
                'password' => "huy1234343",
                'number_of_booking' => "0"

            ],
            [
                'name' => "Son",
                'image' => "hinh/1689892945_sieub.jpg",
                'birth' => "2003/12/01",
                'gender' => "Nam",
                'address' => "Nam Định",
                'email' => "son1@gmail.com",
                'phone' => "034344143",
                'username' => "son1",
                'password' => "huy1234343",
                'number_of_booking' => "0"

            ],
            [
                'name' => "A",
                'image' => "hinh/1689892945_sieub.jpg",
                'birth' => "2003/12/01",
                'gender' => "Nữ",
                'address' => "Nam Định",
                'email' => "a1@gmail.com",
                'phone' => "012345650",
                'username' => "a1",
                'password' => "huy1234343",
                'number_of_booking' => "0"

            ],
            [
            'name' => "B",
            'image' => "hinh/1689892945_sieub.jpg",
            'birth' => "2003/12/01",
            'gender' => "Nam",
            'address' => "Nam Định",
            'email' => "b1@gmail.com",
            'phone' => "012345330",
            'username' => "b1",
            'password' => "huy1234343",
            'number_of_booking' => "0"

        ],
        [
        'name' => "G",
            'image' => "hinh/1689892945_sieub.jpg",
            'birth' => "2003/12/01",
            'gender' => "Nam",
            'address' => "Nam Định",
            'email' => "g1@gmail.com",
            'phone' => "012345412",
            'username' => "g1",
            'password' => "huy1234343",
            'number_of_booking' => "0"

        ]
        ]);
        //
    }
}
