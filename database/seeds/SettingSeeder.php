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
        $result = [
            'kof'=> 100
        ];
        DB::table('settings')->insert($result);
    }
}
