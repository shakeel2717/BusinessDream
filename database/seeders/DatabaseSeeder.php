<?php

namespace Database\Seeders;

use App\Models\Method;
use App\Models\Option;
use App\Models\Tid;
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
            'name' => 'Administer',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('asdfasdf'),
            'whatsapp' => '03037702700',
            'status' => true,
            'role' => 'admin',
        ]);

        $user = User::updateOrCreate([
            'name' => 'Shakeel Ahmad',
            'username' => 'shakeel2717',
            'email' => 'shakeel2717@gmail.com',
            'password' => bcrypt('asdfasdf'),
            'whatsapp' => '03037702717',
            'status' => true,
        ]);

        Tid::updateOrCreate([
            'user_id' => $user->id,
            'tid' => rand(00000, 99999),
            'status' => true,
        ]);

        // $user = User::updateOrCreate([
        //     'name' => 'Test User 1',
        //     'username' => 'test1',
        //     'email' => 'test1@gmail.com',
        //     'refer' => 'shakeel2717',
        //     'left' => 'test3',
        //     'right' => 'test4',
        //     'password' => bcrypt('asdfasdf'),
        //     'whatsapp' => '03037702717',
        // ]);

        // Tid::updateOrCreate([
        //     'user_id' => $user->id,
        //     'tid' => rand(00000, 99999),
        // ]);

        // $user = User::updateOrCreate([
        //     'name' => 'Test User 2',
        //     'username' => 'test2',
        //     'email' => 'test2@gmail.com',
        //     'password' => bcrypt('asdfasdf'),
        //     'left' => 'test5',
        //     'right' => 'test6',
        //     'refer' => 'shakeel2717',
        //     'whatsapp' => '03037702717',
        // ]);

        // Tid::updateOrCreate([
        //     'user_id' => $user->id,
        //     'tid' => rand(00000, 99999),
        // ]);

        // $user = User::updateOrCreate([
        //     'name' => 'Test User 3',
        //     'username' => 'test3',
        //     'email' => 'test3@gmail.com',
        //     'refer' => 'test1',
        //     'password' => bcrypt('asdfasdf'),
        //     'whatsapp' => '03037702717',
        // ]);

        // Tid::updateOrCreate([
        //     'user_id' => $user->id,
        //     'tid' => rand(00000, 99999),
        // ]);

        // $user = User::updateOrCreate([
        //     'name' => 'Test User 4',
        //     'username' => 'test4',
        //     'email' => 'test4@gmail.com',
        //     'refer' => 'test1',
        //     'password' => bcrypt('asdfasdf'),
        //     'whatsapp' => '03037702717',
        // ]);

        // Tid::updateOrCreate([
        //     'user_id' => $user->id,
        //     'tid' => rand(00000, 99999),
        // ]);

        // $user = User::updateOrCreate([
        //     'name' => 'Test User 5',
        //     'username' => 'test5',
        //     'email' => 'test5@gmail.com',
        //     'password' => bcrypt('asdfasdf'),
        //     'refer' => 'test2',
        //     'whatsapp' => '03037702717',
        // ]);

        // Tid::updateOrCreate([
        //     'user_id' => $user->id,
        //     'tid' => rand(00000, 99999),
        // ]);

        // $user = User::updateOrCreate([
        //     'name' => 'Test User 6',
        //     'username' => 'test6',
        //     'email' => 'test6@gmail.com',
        //     'password' => bcrypt('asdfasdf'),
        //     'refer' => 'test2',
        //     'whatsapp' => '03037702717',
        // ]);

        // Tid::updateOrCreate([
        //     'user_id' => $user->id,
        //     'tid' => rand(00000, 99999),
        // ]);


        Option::updateOrCreate([
            'name' => 'fees',
            'value' => 630,
        ]);


        Option::updateOrCreate([
            'name' => 'referCommision',
            'value' => 250,
        ]);


        Option::updateOrCreate([
            'name' => 'referCommisionLevel2',
            'value' => 200,
        ]);
    }
}
