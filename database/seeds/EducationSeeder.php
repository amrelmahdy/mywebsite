<?php

use Illuminate\Database\Seeder;
use App\Education;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $education = new Education();
        $education->university_name = 'Zagazig University';
        $education->faculty_name = 'Faulty Of Computer and Information';
        $education->start_date = '1220501051';
        $education->end_date = '1372910651';
        $education->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore adipisci excepturi dolorum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore adipisci excepturi dolorum.';
        $education->save();

        $education = new Education();
        $education->university_name = 'Berlitz English';
        $education->faculty_name = 'English Course And Certification';
        $education->start_date = '1446350651';
        $education->end_date = '1454299451';
        $education->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore adipisci excepturi dolorum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore adipisci excepturi dolorum.';
        $education->save();
    }
}
