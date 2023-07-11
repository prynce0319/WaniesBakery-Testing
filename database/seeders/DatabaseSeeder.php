<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        /* \App\Models\Category::factory(2)->create();
        \App\Models\Product::factory(2)->create();  */
        DB::table('sales')->insert([
            'sale_date' => '2023-02-09 17:20:06',
            'status' => '0',
        ]); 
         
    }
}
