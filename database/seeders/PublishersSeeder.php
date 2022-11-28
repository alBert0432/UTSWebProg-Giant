<?php

namespace Database\Seeders;

use App\Models\publishers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            'pub_id' => 'PUB001',
            'pub_name' => 'Gramedia Widiasarana Indonesia',
            'address' => 'Gd. Kompas Gramedia Unit I, Lt. 3 Jalan Palmerah Barat 33-37, Jakarta 10270 - Indonesia',
            'phone' => '(021) 536 50110 - 536 50111, ext: 3301, 3303, 3304,3305',
            'email' => 'redaksi@grasindo.id',
            'image' => 'GramediaWidiasaranaIndonesia.jpg'
        ]);
        DB::table('publishers')->insert([
            'pub_id' => 'PUB002',
            'pub_name' => 'Gramedia Pustaka Utama',
            'address' => 'Gedung Kompas Gramedia Blok 1 lt.5 Jl. Palmerah Barat No.29-37 Jakarta 10270 Indonesia',
            'phone' => '(021) 53650110/11',
            'email' => 'redaksi@gramediapustakautama.id',
            'image' => 'gramediapustakautama.png'
        ]);
        DB::table('publishers')->insert([
            'pub_id' => 'PUB003',
            'pub_name' => 'Gagasmedia',
            'address' => 'Jl. H. Montong No. 57 Ciganjur Jagakarsa 12360 Indonesia',
            'phone' => '021-7888-3030',
            'email' => 'redaksi@gagasmedia.net',
            'image' => 'gagasmedia.jpg'
        ]);
        DB::table('publishers')->insert([
            'pub_id' => 'PUB004',
            'pub_name' => 'Elex Media Komputindo',
            'address' => 'Gedung Kompas-Gramedia, Jl. Palmerah Barat No. 29 - 32, Gelora, Tanah Abang',
            'phone' => '(021) 5365 0110 / 11',
            'email' => 'customercare@gramedia.com',
            'image' => 'elexmedia.png'
        ]);
    }
}
