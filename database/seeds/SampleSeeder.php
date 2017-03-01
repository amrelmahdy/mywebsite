<?php

use Illuminate\Database\Seeder;
use App\Sample;
use App\category;

class SampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $sample = new Sample();

        $cat_websites   = Category::where('filter_name', 'websites')->first();
        $cat_wordpress  = Category::where('filter_name', 'wordpress')->first();
        $cat_websystems = Category::where('filter_name', 'websystems')->first();

        $sample->project_name = 'Virus Research And Study Center';
        $sample->image = 'project1.jpg';
        $sample->description = 'Virus research and study center | Al Azhar university';
        $sample->link = 'http//:www.vrsc-azhar.edu.eg';
        $cat_websites->samples()->save($sample);

        $sample2 = new Sample();

        $sample2->project_name = 'Arena Creative Soltion';
        $sample2->image = 'project2.jpg';
        $sample2->description = 'Virus research and study center | Al Azhar university';
        $sample2->link = 'http//:www.arena-egypt.com';
        $cat_wordpress->samples()->save($sample2);


        $sample3 = new Sample();

        $sample3->project_name = 'Mien bubsguild';
        $sample3->image = 'project3.jpg';
        $sample3->description = 'Virus research and study center | Al Azhar university';
        $sample3->link = 'http//:www.mein-bussgeld.de';
        $cat_websites->samples()->save($sample3);


        $sample4 = new Sample();

        $sample4->project_name = 'Toggar B2B Online Trade';
        $sample4->image = 'project4.jpg';
        $sample4->description = 'Virus research and study center | Al Azhar university';
        $sample4->link = 'http//:www.toggar.com';
        $cat_websites->samples()->save($sample4);

        
        $sample5 = new Sample();

        $sample5->project_name = 'Virus Research And Study Center';
        $sample5->image = 'project5.jpg';
        $sample5->description = 'Virus research and study center | Al Azhar university';
        $sample5->link = 'http//:www.careerec.com/hes';
        $cat_websystems->samples()->save($sample5);

    }
}
