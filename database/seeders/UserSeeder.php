<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $users = [
            ['name' => 'Admin', 'email' => 'Admin@gmail.com', 'password' => Hash::make('1234Asdf'),
                'created_at' => '2021-10-08 ', 'updated_at' => '2021-10-08'],
            ['name' => 'Lara', 'email' => 'Lara@gmail.com', 'password' => Hash::make('1234Asdf'),
                'created_at' => '2021-10-08', 'updated_at' => '2021-10-08'],
                ];
        User::insert($users);
    }
}
