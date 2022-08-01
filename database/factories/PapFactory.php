<?php

namespace Database\Factories;

use App\Models\Commodity;
use App\Models\CommoditySystem;
use App\Models\Indicator;
use App\Models\Location;
use App\Models\Prexc;
use App\Models\User;
use App\Models\ValueChainSegment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pap>
 */
class PapFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pap' => $this->faker->sentence,
            'brief_description' => $this->faker->paragraph,
//            'prexc_id' => Prexc::where('level', 2)->inRandomOrder()->first()->id,
            'commodity_id' => Commodity::all()->random()->id,
            'commodity_system_id' => CommoditySystem::all()->random()->id,
            'location_id' => Location::all()->random()->id,
            'value_chain_segment_id' => ValueChainSegment::all()->random()->id,
            'indicator_id' => Indicator::all()->random()->id,
            'unit_of_measure' => $this->faker->randomElement(['number','kg','bag','km']),
            'unit_cost' => $this->faker->randomNumber(2) * 1000,
            'physical_target_2022' => $this->faker->numberBetween(10, 99) * 10,
            'physical_target_2023' => $this->faker->numberBetween(10, 99) * 10,
            'physical_target_2024' => $this->faker->numberBetween(10, 99) * 10,
            'physical_target_2025' => $this->faker->numberBetween(10, 99) * 10,
            'physical_target_2026' => $this->faker->numberBetween(10, 99) * 10,
            'physical_target_2027' => $this->faker->numberBetween(10, 99) * 10,
            'physical_target_2028' => $this->faker->numberBetween(10, 99) * 10,
            'physical_target_2029' => $this->faker->numberBetween(10, 99) * 10,
            'physical_target_2030' => $this->faker->numberBetween(10, 99) * 10,
            'user_id' => User::all()->random()->id,
        ];
    }
}
