<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_category')->insert([
            'book_cat_id' => 'BCA001',
            'book_id' => 'BOB005',
            'cat_id' => 'CAT001'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BCA002',
            'book_id' => 'BOB014',
            'cat_id' => 'CAT001'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BCA003',
            'book_id' => 'BOB017',
            'cat_id' => 'CAT001'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BCA004',
            'book_id' => 'BOB022',
            'cat_id' => 'CAT001'
        ]);

        DB::table('book_category')->insert([
            'book_cat_id' => 'BCA005',
            'book_id' => 'BOB009',
            'cat_id' => 'CAT002'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BCA006',
            'book_id' => 'BOB021',
            'cat_id' => 'CAT002'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BCA007',
            'book_id' => 'BOB020',
            'cat_id' => 'CAT002'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BCA008',
            'book_id' => 'BOB013',
            'cat_id' => 'CAT002'
        ]);

        DB::table('book_category')->insert([
            'book_cat_id' => 'BCA009',
            'book_id' => 'BOB006',
            'cat_id' => 'CAT003'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BCA010',
            'book_id' => 'BOB024',
            'cat_id' => 'CAT003'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BCA011',
            'book_id' => 'BOB007',
            'cat_id' => 'CAT003'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BCA012',
            'book_id' => 'BOB023',
            'cat_id' => 'CAT003'
        ]);

        DB::table('book_category')->insert([
            'book_cat_id' => 'BCA013',
            'book_id' => 'BOB008',
            'cat_id' => 'CAT004'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BCA014',
            'book_id' => 'BOB002',
            'cat_id' => 'CAT004'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BCA015',
            'book_id' => 'BOB026',
            'cat_id' => 'CAT004'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BCA016',
            'book_id' => 'BOB025',
            'cat_id' => 'CAT004'
        ]);
    }
}
