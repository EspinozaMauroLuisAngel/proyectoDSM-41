<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\adminuser;
use App\Models\imagenote;
use App\Models\listnote;
use App\Models\note;
use App\Models\user;

class DataBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\imagenote::factory(10)->create();
        \App\Models\listnote::factory(10)->create();
        \App\Models\note::factory(10)->create();
        \App\Models\adminuser::factory(10)->create();
        \App\Models\user::factory(10)->create();
        
    }
}
