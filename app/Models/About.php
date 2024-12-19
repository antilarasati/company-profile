<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = 'about';
    protected $primarykey ='id_about';

    protected $fillable = [
        'tahun_berdiri',
        'latar_belakang',
        'visi',
        'misi'
    ];
}
