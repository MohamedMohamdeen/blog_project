<?php

use Illuminate\Database\Seeder;
use App\Setting;
class settingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Setting = Setting::create([
		 'blog_name'   =>'test blog',
		 'about'       =>'this is my projct',
		 'phone_number'=>'01063113773',
		 'email_blog'  =>'mode.mode1234@gmail.com',
		 'address'     =>'giza',
        ]);
    }
}
