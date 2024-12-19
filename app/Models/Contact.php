<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $primarykey ='id_contact';

    protected $fillable = [
        'alamat',
        'kontak',
        'jam_oprasional',
        'email'
    ];
}
