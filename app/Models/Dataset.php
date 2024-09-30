<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataset extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'jenis_kelamin',
        'tahun_masuk',
        'tahun_lulus',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'desa',
        'no_hp',
        'facebook',
        'instagram',
        'pendidikan_terakhir',
        'kuliah',
        'bekerja',
        'berkeluarga',
        'menganggur',
        'jenis_perguruan_tinggi',
        'tahun_masuk_perguruan_tinggi',
        'nama_perguruan_tinggi',
        'program_studi',
        'jenis_pekerjaan',
        'nama_perusahaan',
        'jabatan',
    ];
}
