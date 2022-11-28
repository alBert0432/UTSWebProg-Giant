<?php

namespace Database\Seeders;

use App\Models\categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'cat_id' => 'CAT001',
            'cat_name' => 'Mystery'
        ]);
        DB::table('categories')->insert([
            'cat_id' => 'CAT002',
            'cat_name' => 'Horror'
        ]);
        DB::table('categories')->insert([
            'cat_id' => 'CAT003',
            'cat_name' => 'Science Fiction'
        ]);
        DB::table('categories')->insert([
            'cat_id' => 'CAT004',
            'cat_name' => 'Self Improvement'
        ]);
    }
}
