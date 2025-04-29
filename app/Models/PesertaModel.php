<?php

namespace App\Models;

use CodeIgniter\Model;

class PesertaModel extends Model
{
    protected $table = 'peserta';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'telepon',
        'pendidikan',
        'alamat',
        'kab_kota',
        'nama_bank',
        'nama_rekening',
        'no_rekening',
        'id_cabang',
        'id_golongan',
        'pass_foto',
        'lampiran_ktp',
        'lampiran_kk',
        'lampiran_akta',
        'lampiran_ijasah',
        'lampiran_buku_tabungan',
        'lampiran_piagam_penghargaan',
        'berkas_lain',
        'status_peserta',
        'catatan_verifikasi'
    ];
}
