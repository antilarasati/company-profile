<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tim extends Model
{
    use HasFactory;

    protected $table = 'tims';
    protected $primaryKey = 'id_tim';

    protected $fillable = [
        'nama',
        'foto',
        'jabatan',
    ];
}
