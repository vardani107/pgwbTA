<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    protected $fillable = [
        'kelas',
    ];

    protected $table = 'kelas';

    public function daftar(){
        // return $this->hasManyThrough('App\Models\tabelmaster', 'kelas');
        return $this->hasMany('App\Models\tabelmaster');
    }

}
