<?php

use Illuminate\Database\Seeder;
use App\Social;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $social = new Social;
        $social->name = 'facebook';
        $social->icon = 'fa-facebook'; 
        $social->link = 'https://www.facebook.com/amr.talaat.elmahdy';
        $social->save();

        $social2 = new Social;
        $social2->name = 'twitter';
        $social2->icon = 'fa-twitter'; 
        $social2->link = 'https://twitter.com/AmrElMahdy2';
        $social2->save();

        $social3 = new Social;
        $social3->name = 'linkedin';
        $social3->icon = 'fa-linkedin'; 
        $social3->link = 'https://www.linkedin.com/in/amr-el-mahdy-5b1983b0?trk=nav_responsive_tab_profile_pic';
        $social3->save();

        $social4 = new Social;
        $social4->name = 'google plus';
        $social4->icon = 'fa-google-plus'; 
        $social4->link = 'https://plus.google.com/u/0/106052182737789593116';
        $social4->save();

        $social5 = new Social;
        $social5->name = 'instagram';
        $social5->icon = 'fa-instagram'; 
        $social5->link = 'https://www.instagram.com/amr_elmhdy/';
        $social5->save();

        $social6 = new Social;
        $social6->name = 'github';
        $social6->icon = 'fa-github'; 
        $social6->link = 'https://www.instagram.com/amr_elmhdy/';
        $social6->save();


        

    }
}
