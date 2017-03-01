<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(ExperienceSeeder::class);
        $this->call(EducationSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SampleSeeder::class);
        $this->call(StatisticSeeder::class);
        $this->call(SocialSeeder::class);
    }
}
