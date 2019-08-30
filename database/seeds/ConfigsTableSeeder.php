<?php

use Illuminate\Database\Seeder;

class ConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Config::insert([
            ['name' => 'site_name', 'value' => 'News-wallet'],
            ['name' => 'site_title', 'value' => 'News-wallet'],
            ['name' => 'copyright_owner', 'value' => 'james'],
            ['name' => 'admin_email', 'value' => 'jamespauloh@gmail.com'],
        ]);
    }
}
