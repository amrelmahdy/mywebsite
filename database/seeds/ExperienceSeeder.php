<?php

use Illuminate\Database\Seeder;
use App\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experience = new Experience();
        $experience->company_name = 'Osalcom IT Consulting';
        $experience->job_title = 'Senior PHP Web Developer';
        $experience->start_date = '1451621051';
        $experience->end_date = time();
        $experience->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore adipisci excepturi dolorum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore adipisci excepturi dolorum.';
        $experience->current = true;
        $experience->save();

        $experience = new Experience();
        $experience->company_name = 'Arena Createive Solution';
        $experience->job_title = 'PHP Web Developer';
        $experience->start_date = '1435982651';
        $experience->end_date = '1451880251';
        $experience->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore adipisci excepturi dolorum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore adipisci excepturi dolorum.';
        $experience->current = false;
        $experience->save();
    }
}
