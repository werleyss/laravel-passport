<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\User::class)->create([
            'email' => 'user1@schoolofnet.com'
        ]);

        factory(\App\Models\User::class)->create([
            'email' => 'user2@schoolofnet.com'
        ]);
    }
}
