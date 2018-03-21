<?php

use Illuminate\Database\Seeder;
use App\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact            = new Contact();
        $contact->full_name = 'Amr Talaat Rashed Mohamed El Mahdy';
        $contact->email     = 'info@amrelmahdy.com/amrelmhdy@hotmail.com'; 
        $contact->mobile    = '01003939110';
        $contact->address   = 'Mostafa El Nahhas st, Nasr City, Cairo';
        $contact->save();
    }
}
