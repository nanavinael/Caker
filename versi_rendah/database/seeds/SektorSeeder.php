<?php

use Illuminate\Database\Seeder;
use App\Sektor;

class SektorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listSektor = [

            ['nama_sektor' => 'All'],

            ['nama_sektor' => 'Bank'],
            ['nama_sektor' => 'Pendidikan'],
            ['nama_sektor' => 'Teknik'],

            ['nama_sektor' => 'Teknologi'],
            ['nama_sektor' => 'Kesehatan'],
            ['nama_sektor' => 'Hukum']
        ];

        foreach ($listSektor as $sektor) {
        	Sektor::create($sektor);
        }
    }
}
