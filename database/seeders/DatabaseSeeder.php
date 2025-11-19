<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //ALL environments
        $this->call(GeostateSeeder::class);
        $this->call(CountySeeder::class);

        //NEVER seed production
        if(config('app.env') !== 'production'){
            $this->call(UserSeeder::class);
            $this->call(SchoolSeeder::class);
        }



    }
}
