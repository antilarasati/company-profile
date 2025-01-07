<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $abouts = [
            [
                'foto1' => '',
                'foto2' => '',
                'foto3' => '',
                'foto4' => '',
                'tahun_berdiri' => '2010',
                'latar_belakang' => 'Selera Nusantara lahir dari kecintaan pendirinya terhadap kuliner tradisional Indonesia.',
                'visi' => 'Menjadi pemimpin pasar kuliner dengan cita rasa autentik Indonesia, pengalaman makan tak terlupakan, dan kualitas tinggi di setiap hidangan.',
                'misi' => 'Menyediakan makanan berkualitas tinggi dengan cita rasa otentik Indonesia.
',
            ]
        ];

          foreach($abouts as $about) {
            About::create($about);
        }
    }
}
