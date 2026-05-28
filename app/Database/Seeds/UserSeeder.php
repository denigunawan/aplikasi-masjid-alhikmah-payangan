<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('users')->insert([

            'nama'     => 'Administrator',
            'username' => 'admin',
            'email'    => 'admin@gmail.com',
            'password' => password_hash('admin123', PASSWORD_DEFAULT),
            'role'     => 'admin',

        ]);
    }
}