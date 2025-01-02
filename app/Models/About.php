<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = 'abouts';
    protected $primaryKey ='id_about';

    protected $fillable = [
        'foto1',
        'foto2',
        'foto3',
        'foto4',
        'tahun_berdiri',
        'latar_belakang',
        'visi',
        'misi'
    ];
}
