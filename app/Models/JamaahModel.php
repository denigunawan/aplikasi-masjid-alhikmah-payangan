<?php

namespace App\Models;

use CodeIgniter\Model;

class JamaahModel extends Model
{
    protected $table            = 'jamaah';
    protected $primaryKey       = 'id';

    protected $allowedFields = [
        'foto',
        'nama_lengkap',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'no_hp',
        'email',
        'jabatan',
        'status',
    ];

    protected $useTimestamps = true;
}