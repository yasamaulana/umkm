<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $fillable = [
        'nama',
        'idproduk',
        'kategori',
        'nama_usaha',
        'nama_pemilik',
        'alamat',
        'deskripsi',
        'wa',
        'ig',
        'fb',
        'tiktok',
        'shopee',
        'tokped',
        'gambar1',
        'gambar2',
        'gambar3',
        'gambar4',
        'gambar5'
    ];
}