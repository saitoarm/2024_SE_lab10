<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'JK',
        //     'email' => 'saitoarm@gmail.com',
        //     'password' => Hash::make('wordpass'),
        //     'user_type' => 0
        // ]);        

        //customer
        DB::table('users') ->insert ([
            'name' => 'customer 1',
            'email' => 'customer@gmail.com',
            'password' => Hash::make('wordpass'),
            'user_type' => 0
        ]);
        //Empoyee
        DB::table('users') ->insert ([
            'name' => 'Employee 1',
            'email' => 'emp1@gmail.com',
            'password' => Hash::make('wordpass'),
            'user_type' => 1
        ]);
        //Admin
        DB::table('users') ->insert ([
            'name' => 'Admin 1',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('wordpass'),
            'user_type' => 2
        ]);
        $this->call((ProductTypesTableSeeder::class));
        $this->call((ProductsTableSeeder_service1::class));
    }
}
