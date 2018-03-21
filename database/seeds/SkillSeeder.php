<?php

use Illuminate\Database\Seeder;
use App\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skill = new Skill();
        $skill->skill = 'PHP';
        $skill->percentage = '90';
        $skill->viewed = true;
        $skill->save();

        $skill = new Skill();
        $skill->skill = 'Laravel';
        $skill->percentage = '90';
        $skill->viewed = true;
        $skill->save();

        $skill = new Skill();
        $skill->skill = 'MYSQL';
        $skill->percentage = '85';
        $skill->viewed = true;
        $skill->save();

        $skill = new Skill();
        $skill->skill = 'Javascript';
        $skill->percentage = '75';
        $skill->viewed = true;
        $skill->save();

        $skill = new Skill();
        $skill->skill = 'jQuiry';
        $skill->percentage = '85';
        $skill->viewed = true;
        $skill->save();

        $skill = new Skill();
        $skill->skill = 'AJAX';
        $skill->percentage = '90';
        $skill->viewed = true;
        $skill->save();

        $skill = new Skill();
        $skill->skill = 'HTML';
        $skill->percentage = '95';
        $skill->viewed = true;
        $skill->save();
    }
}
