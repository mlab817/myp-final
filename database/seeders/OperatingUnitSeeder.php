<?php

namespace Database\Seeders;

use App\Models\OperatingUnit;
use App\Models\OuGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OperatingUnitSeeder extends Seeder
{
    /**
     * Run the database seeds for ou groups and operating units tables.
     *
     * @return void
     */
    public function run()
    {
        $ouGroups = [
            'Office of the Secretary' => [
                'Central Office',
                'Regional Field Office I',
                'Regional Field Office CAR',
                'Regional Field Office II',
                'Regional Field Office III',
                'Regional Field Office IVA',
                'Regional Field Office IVB',
                'Regional Field Office V',
                'Regional Field Office VI',
                'Regional Field Office VII',
                'Regional Field Office VIII',
                'Regional Field Office IX',
                'Regional Field Office X',
                'Regional Field Office XI',
                'Regional Field Office XII',
                'Regional Field Office CARAGA',
                'Agricultural Training Institute',
                'Bureau of Agriculture and Fisheries Engineering',
                'Bureau of Agriculture and Fisheries Standards',
                'Bureau of Animal Industry',
                'Bureau of Plant Industry',
                'Bureau of Soils and Water Management',
                'Philippine Rubber Research Institute',
            ],
            'Agricultural Credit Policy Council' => [
                'Agricultural Credit Policy Council'
            ],
            'Bureau of Fisheries and Aquatic Resources' => [
                'Bureau of Fisheries and Aquatic Resources'
            ],
            'Fertilizer and Pesticide Authority' => [
                'Fertilizer and Pesticide Authority'
            ],
            'National Fisheries Research and Development Institute' => [
                'National Fisheries Research and Development Institute'
            ],
            'National Meat Inspection Service' => [
                'National Meat Inspection Service'
            ],
            'Philippine Carabao Center' => [
                'Philippine Carabao Center'
            ],
            'Philippine Center for Post-Harvest Development and Mechanization' => [
                'Philippine Center for Post-Harvest Development and Mechanization'
            ],
            'Philippine Council for Agriculture and Fisheries' => [
                'Philippine Council for Agriculture and Fisheries'
            ],
            'Philippine Fiber Industry Development Authority' => [
                'Philippine Fiber Industry Development Authority'
            ],
            'National Dairy Authority' => [
                'National Dairy Authority'
            ],
            'National Food Authority' => [
                'National Food Authority'
            ],
            'National Irrigation Administration' => [
                'National Irrigation Administration'
            ],
            'National Tobacco Administration' => [
                'National Tobacco Administration'
            ],
            'Philippine Coconut Authority' => [
                'Philippine Coconut Authority'
            ],
            'Philippine Fisheries Development Authority' => [
                'Philippine Fisheries Development Authority'
            ],
            'Philippine Rice Research Institute' => [
                'Philippine Rice Research Institute'
            ],
            'Philippine Sugar Corporation' => [
                'Philippine Sugar Corporation'
            ],
            'Sugar Regulatory Administration' => [
                'Sugar Regulatory Administration'
            ],
        ];

        foreach ($ouGroups as $key => $value) {
            $ouGroup = OuGroup::create([
                'name' => $key,
                'label' => $key,
            ]);

            foreach ($value as $item) {
                OperatingUnit::create([
                    'name' => $item,
                    'label' => $item,
                    'ou_group_id' => $ouGroup->id,
                ]);
            }
        }
    }

}
