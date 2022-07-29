<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

         \App\Models\User::create([
             'name' => 'Test User',
             'email' => 'test@example.com',
             'password' => Hash::make('password'),
         ]);

        $this->call(CommoditySeeder::class);
        $this->call(CommoditySystemSeeder::class);
        $this->call(ValueChainSegmentSeeder::class);
        $this->call(PrexcSeeder::class);
        $this->call(IndicatorSeeder::class);
        $this->call(ImplementingUnitSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PapSeeder::class);
    }
}
