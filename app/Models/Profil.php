<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $fillable = [
        'profil_id',
        'judul_profil',
        'isi_profil',
        'status',
        'image',
    ];
}
