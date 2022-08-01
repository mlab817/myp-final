<?php

namespace Database\Seeders;

use App\Models\Strategy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StrategySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Strategy::create([
            'name' => 'some strategy',
            'label'=> 'some strategy',
        ]);
    }
}
