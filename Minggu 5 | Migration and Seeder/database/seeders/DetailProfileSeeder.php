<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insert data ke table pegawai
        DB::table('detail_profile')->insert([
            'address' => 'Jember',
            'nomor_tlp' => '085955167029',
            'ttl' => '2002-05-13',
            'foto' => 'indraganteng.jpg'
        ]);
    }
}
