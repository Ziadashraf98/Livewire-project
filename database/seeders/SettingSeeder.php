<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(['email'=>'test@test.com'] , [
            'name'=>'Digital',
            'address'=>'New Cairo',
            'phone'=>'01143080327',
            'link'=>
            [
                'facebook'=>'https://www.facebook.com/PullandBearMENA',
                'linkedin'=>'https://www.linkedin.com/in/ziad-ashraf-600765209/'
            ]
        ]);
    }
}
