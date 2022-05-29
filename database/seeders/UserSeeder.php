<?php

namespace Database\Seeders;

use Domain\Users\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'prodelpe',
            'email' => 'prodelpe@gmail.com',
            'password' => Hash::make('abonop'),
        ]);

        $user->assignRole('webmaster');

        User::factory(10)->create();
    }
}
