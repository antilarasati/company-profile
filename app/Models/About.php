<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = 'home';
    protected $primarykey ='id_home';

    protected $fillable = [
        'tahun_berdiri',
        'latar_belakang',
        'visi',
        'misi'
    ];
}
