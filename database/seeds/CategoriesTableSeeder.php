<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'ติดสังคม',
        ]);
        DB::table('categories')->insert([
            'name' => 'ติดบ้าน',
        ]);
        DB::table('categories')->insert([
            'name' => 'ติดเตียง',
        ]);
        DB::table('categories')->insert([
            'name' => 'ติดเสียชีวิต',
        ]);
    }
}
