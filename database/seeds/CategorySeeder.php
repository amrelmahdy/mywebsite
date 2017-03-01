<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->category = 'Web Sites';
        $category->filter_name = 'websites';
        $category->save();

        $category = new Category();
        $category->category = 'Wordpress';
        $category->filter_name = 'wordpress';
        $category->save();

        $category = new Category();
        $category->category = 'Web Systems';
        $category->filter_name = 'websystems';
        $category->save();
    }
}
