<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nip' => '12323123',
            'nama' => 'Admin',
            'password' => bcrypt(123456),
            'email' => 'admin@gmail.com',
            'notelp' => '123123',
            'jabatan' => 'ppa'
        ]);
    }
}
