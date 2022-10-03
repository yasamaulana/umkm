<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $table = 'wisata';
    protected $fillable = ['nama_wisata', 'ig', 'fb', 'alamat', 'gmaps', 'deskripsi', 'status', 'yt'];
}