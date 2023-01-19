<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class update extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'deskripsi',
        'hari',
        'jam',
    ];

    protected $table = 'update';

}
