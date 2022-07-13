<?php

namespace Database\Seeders;

use App\Models\Method;
use App\Models\Option;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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


        Method::updateOrCreate([
            'type' => 'bank',
            'name' => 'Allied Bank',
            'title' => 'Shakeel Ahmad',
            'number' => '0065490010045456789',
            'r_number' => '03037702717',
            'status' => true,
        ]);


        Method::updateOrCreate([
            'type' => 'easypaisa',
            'name' => 'Microfinace Easypaisa Bank',
            'title' => 'Shakeel Ahmad',
            'number' => '03037702717',
            'r_number' => '03037702717',
            'status' => true,
        ]);


        Method::updateOrCreate([
            'type' => 'jazzcash',
            'name' => 'Microfinace Mobilnk Bank',
            'title' => 'Shakeel Ahmad',
            'number' => '03037702717',
            'r_number' => '03037702717',
            'status' => true,
        ]);


        User::updateOrCreate([
            'name' => 'Shakeel Ahmad',
            'username' => 'shakeel2717',
            'email' => 'shakeel2717@gmail.com',
            'password' => bcrypt('asdfasdf'),
            'whatsapp' => '03037702717',
        ]);


        Option::updateOrCreate([
            'name' => 'fees',
            'value' => 630,
        ]);
    }
}
