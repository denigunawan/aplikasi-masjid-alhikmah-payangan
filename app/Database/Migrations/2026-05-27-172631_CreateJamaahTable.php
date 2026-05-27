<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateJamaahTable extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'foto' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],

            'nama_lengkap' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],

            'jenis_kelamin' => [
                'type'       => 'ENUM',
                'constraint' => ['Laki-laki', 'Perempuan'],
            ],

            'tempat_lahir' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],

            'tanggal_lahir' => [
                'type' => 'DATE',
            ],

            'alamat' => [
                'type' => 'TEXT',
            ],

            'no_hp' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'null'       => true,
            ],

            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],

            'jabatan' => [
                'type' => 'ENUM',
                'constraint' => [
                    'Jamaah',
                    'Imam',
                    'Khotib',
                    'Muadzin',
                    'DKM',
                    'Marbot',
                    'Guru Ngaji',
                    'Remaja Masjid'
                ],
                'default' => 'Jamaah',
            ],

            'status' => [
                'type' => 'ENUM',
                'constraint' => [
                    'Aktif',
                    'Nonaktif'
                ],
                'default' => 'Aktif',
            ],

            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('jamaah');
    }

    public function down()
    {
        $this->forge->dropTable('jamaah');
    }
}