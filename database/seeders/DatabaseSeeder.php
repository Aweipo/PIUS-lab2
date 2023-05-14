<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Adress;
use App\Models\Customer;
use Illuminate\Validation\Rules\Unique;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Customer::factory()->count(100)->create();
        Adress::factory()->count(300)->create();        
    }
}

