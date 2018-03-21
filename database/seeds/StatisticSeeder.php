<?php

use Illuminate\Database\Seeder;
use App\Statistic;

class StatisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$statistic = new Statistic();
        $statistic->projects_done = 6;
        $statistic->happy_clients = 6;
        $statistic->experience_years = 2;
        $statistic->countries_served = 2;
        $statistic->save();
    }
}
