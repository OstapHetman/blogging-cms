<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => 'Blog',
            'adress' => 'Boston, st.Main Beach',
            'contact_number' => '555-555-5555',
            'contact_email' => 'blog@email.com'
        ]);
    }
}
