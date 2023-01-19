<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabelmaster extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'no_hp',
        'kelas_id',
        'ekstrakulikuler_id',
    ];

    protected $table = 'tabelmaster';

    public function ekskul(){
        return $this->hasManyThrough('App\Models\ekstrakulikuler', 'ekstrakulikuler_id');
    }
    public function kelas(){
        return $this->hasManyThrough('App\Models\kelas', 'kelas_id');
    }
    
}
