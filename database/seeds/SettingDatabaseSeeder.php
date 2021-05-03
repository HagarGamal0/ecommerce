<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::setMany([
           'default locale' =>'ar',
           'default timezone' =>'afrika/cairo',
           'good reviews' =>'true',
           'currences' =>['usd','ar', 'sld'],
           'hi' => 0 ,
           'translatable' =>[
              'store name' =>'hagar gamal',
              'store nackname' =>'lola',
              'store owner' =>'abdo gamal',

        ],

        ]);
    }
}
