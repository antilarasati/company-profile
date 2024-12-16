<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimonial extends Model
{
    use HasFactory;

    protected $table = 'testimonial';
    protected $primaryKey = 'id_testimonial';

    protected $fillable = [
        'nama',
        'email',
        'deskripsi',
    ];
}
