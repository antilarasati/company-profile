<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $primaryKey ='id_contact';

    protected $fillable = [
        'alamat',
        'kontak',
        'hari_oprasional',
        'jam_oprasional',
        'email'
    ];
}
