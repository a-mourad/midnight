<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return DB::table('categories')->insert([
            ['name'=>'birthday'],
            ['name'=>'mariages'],
            ['name'=>'big parties'],
            ['name'=>'lekhtana'],
        ]);
    }
}
