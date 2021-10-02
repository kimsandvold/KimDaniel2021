<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'key' => 'contact.name',
            'value' => 'Ola Normann',
            'description' => 'Navn på kontaktperson',
        ]);
        DB::table('settings')->insert([
            'key' => 'contact.email',
            'value' => 'ola@example.com',
            'description' => 'E-post på kontaktperson',
        ]);
    }
}
