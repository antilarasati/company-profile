<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'alamat' => 'metro pusat, lampung, indonesia',
                'kontak' => '08123456789',
                'hari_oprasional' => 'Senin - Sabtu',
                'jam_oprasional' => '09:00 - 21:00',
                'email' => 'selera_nusantara@gmail.com',
            ]
        ];

          foreach($contacts as $contact) {
            Contact::create($contact);
        }
    }
}
