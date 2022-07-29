<?php

namespace Database\Seeders;

use App\Models\Indicator;
use App\Models\Prexc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrexcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prexcs = [
            'TECHNICAL AND SUPPORT SERVICES PROGRAM' => [
                'PRODUCTION SUPPORT SERVICES (PSS) SUB-PROGRAM' => [
                    'PSS on the National Rice Program',
                    'PSS on the National Livestock Program',
                    'PSS on the National Corn Program',
                    'PSS on the National High-Value Crops Development Program',
                    'PSS on the Promotion and Development of Organic Agriculture Program',
                    'Other production support activities',
                ],
                'MARKET DEVELOPMENT SERVICES (MDS) SUB-PROGRAM' => [
                    'Market Development Services'
                ],
                'EXTENSION SUPPORT, EDUCATION AND TRAINING SERVICES (ESETS) SUB-PROGRAM' => [
                    'ESETS on the National Rice Program',
                    'ESETS on the National Livestock Program',
                    'ESETS on the National Corn Program',
                    'ESETS on the National High-Value Crops Development Program',
                    'ESETS on the Promotion and Development of Organic Agriculture Program',
                    'Other extension support, education and training services activities',
                    'ESETS on the Halal Food Industry Development Program',
                ],
                'RESEARCH AND DEVELOPMENT (R&D) SUB-PROGRAM' => [
                    'R&D on the National Rice Program',
                    'R&D on the National Livestock Program',
                    'R&D on the National Corn Program',
                    'R&D on the National High-Value Crops Development Program',
                    'R&D on the Promotion and Development of Organic Agriculture Program',
                    'Other research and development activities',
                ],
            ],
            'AGRICULTURAL MACHINERY, EQUIPMENT, FACILITIES AND INFRASTRUCTURES PROGRAM' => [
                'AGRICULTURAL MACHINERY, EQUIPMENT, AND FACILITIES SUPPORT SERVICES SUB-PROGRAM' => [
                    'Provision of Agricultural Equipment and Facilities (PAEF) on the National Rice Program',
                    'PAEF on the National Livestock Program',
                    'PAEF on the National Corn Program',
                    'PAEF on the National High-Value Crops Development Program',
                    'PAEF on the Promotion and Development of Organic Agriculture Program',
                ],
                'IRRIGATION NETWORK SERVICES (INS) SUB-PROGRAM' => [
                    'INS on the National Rice Program',
                    'INS on the National Corn Program',
                    'INS on the National High-Value Crops Development Program',
                    'Other Water Resources Projects',
                    'INS for the Promotion and Development of Organic Agriculture',
                ],
                'FARM-TO-MARKET ROADS (FMR) SUB-PROGRAM' => [
                    'Farm-to-Market Road (FMR) Network Planning and Monitoring Services',
                    'Projects'
                ],
            ],
            'AGRICULTURE AND FISHERY POLICY PROGRAM' => [
                'Formulation, monitoring and evaluation of agricultural and fishery policies, plans and programs',
            ],
            'AGRICULTURE AND FISHERY REGULATORY SUPPORT PROGRAM' => [
                'Quality control and inspection',
                'Quarantine services',
                'Registration and licensing',
            ],
            'LOCALLY-FUNDED AND FOREIGN-ASSISTED PROGRAM' => [
                'Project(s)' => [
                    'Locally-Funded Project(s)',
                    'Foreign-Assisted Project(s)',
                ],
            ],
            'AGRICULTURAL CREDIT PROGRAM' => [
                'Agro-Industry Modernization Credit and Financing Program (AMCFP) Administration',
                'Policy formulation, research and advocacy, monitoring and evaluation of credit policies, plans and programs and capacity building',
            ],
            'FISHERIES DEVELOPMENT PROGRAM' => [
                'CAPTURE FISHERIES SUB-PROGRAM' => [
                    'Fishing gear/paraphernalia distribution'
                ],
                'AQUACULTURE SUB-PROGRAM' => [
                    'Fisheries production and distribution',
                    'Operation and management of production facilities',
                ],
                'POST-HARVEST SUB-PROGRAM' => [
                    'Provision of fishery on-farm/ post-harvest equipment and facilities'
                ],
                'MARKET DEVELOPMENT SUB-PROGRAM' => [
                    'Market development services'
                ],
                'LOCALLY-FUNDED AND FOREIGN-ASSISTED SUB-PROGRAM' => [
                    'Project(s)'
                ],
                'FISHERIES REGULATORY AND LAW ENFORCEMENT PROGRAM' => [
                    'Monitoring, control and surveillance',
                    'Quality control and inspection',
                    'Quarantine, registration and licensing',
                    'Coastal and inland fisheries resource management',
                    'Project(s)',
                ],
                'FISHERIES EXTENSION PROGRAM' => [
                    'Extension Support, Education and Training Services (ESETS)'
                ],
                'FISHERIES POLICY PROGRAM' => [
                    'Formulation, monitoring and evaluation of policies, plans and programs'
                ],
            ],
            'FERTILIZER AND PESTICIDE REGULATORY PROGRAM' => [
                'Quality Control and Inspection',
                'Registration and Licensing',
            ],
            'FISHERIES RESEARCH AND DEVELOPMENT PROGRAM' => [
                'Research and development'
            ],
            'MEAT REGULATORY PROGRAM' => [
                'MEAT SAFETY AND QUALITY ASSURANCE SUB-PROGRAM' => [
                    'Meat inspection enforcement and deputation services',
                    'Meat inspection development services',
                ],
                'LICENSING AND REGISTRATION SUB-PROGRAM' => [
                    'Meat establishment licensing services',
                    'Meat importers and exporters registration services',
                ],
            ],
            'LOCAL MEAT ESTABLISHMENT ASSISTANCE PROGRAM' => [
                'Meat establishment and meat inspection assistance to LGUs services',
            ],
            'NATIONAL CARABAO DEVELOPMENT PROGRAM' => [
                'CARABAO-BASED ENTERPRISE DEVELOPMENT SUB-PROGRAM' => [
                    'Carabao-Based Enterprise Development',
                    'Locally-funded Project/s',
                ],
            ],
            'AGRICULTURAL MECHANIZATION AND POSTHARVEST RESEARCH, DEVELOPMENT AND EXTENSION PROGRAM' => [
                'Formulation, monitoring and evaluation of policies, plans and programs',
                'Extension Support, Education and Training Services',
                'Research and Development',
            ],
            'AGRICULTURE AND FISHERY STAKEHOLDERS ENGAGEMENT PROGRAM' => [
                'Development and Coordination of Agriculture and Fishery Policies',
                'Planning, Monitoring and Knowledge Management',
                'Partnership Development',
            ],
            'FIBER DEVELOPMENT PROGRAM' => [
                'Production Support Services',
                'Extension Support, Education and Training Services',
                'Research and Development',
            ],
            'FIBER INDUSTRY REGULATORY PROGRAM' => [
                'Quality Control and Inspection',
                'Registration and Licensing',
            ],
            'IRRIGATION SYSTEMS RESTORATION PROGRAM' => [
                'NATIONAL IRRIGATION SYSTEMS SUB-PROGRAM',
                'COMMUNAL IRRIGATION SYSTEMS (CIS) SUB-PROGRAM',
                'OTHER IRRIGATION SYSTEMS SUB-PROGRAM',
            ],
            'IRRIGATION SYSTEMS DEVELOPMENT PROGRAM' => [
                'NEW NATIONAL IRRIGATION SUB-PROGRAM',
                'ESTABLISHMENT OF PUMP IRRIGATION SUB-PROGRAM',
                'SMALL RESERVOIR IRRIGATION SUB-PROGRAM',
                'SPECIAL IRRIGATION SUB-PROGRAM',
            ],
            'DAIRY INDUSTRY DEVELOPMENT PROGRAM' => [
                'Dairy herd build-up',
                'Dairy enterprise development',
                'Project(s)',
            ],
            'BUFFER STOCKING PROGRAM' => [
                'Local Palay Procurement',
            ],
            'TOBACCO INDUSTRY DEVELOPMENT' => [
                'Project(s)',
            ],
            'COCONUT INDUSTRY DEVELOPMENT PROGRAM' => [
                'COCONUT PRODUCTIVITY ENHANCEMENT (CPE) SUB-PROGRAM',
                'COCONUT RESEARCH AND DEVELOPMENT SUB-PROGRAM',
            ],
            'OIL PALM INDUSTRY DEVELOPMENT PROGRAM' => [
                'OIL PALM PRODUCTIVITY ENHANCEMENT SUB-PROGRAM',
            ],
            'FISHERIES INFRASTRUCTURE DEVELOPMENT PROGRAM' => [
                'Project(s)',
            ],
            'RESEARCH AND DEVELOPMENT PROGRAM' => [
                'Conduct of regional rice research for development programs for Luzon, Visayas, and Mindanao',
            ],
            'SUGARCANE INDUSTRY DEVELOPMENT PROGRAM' => [
                'Project(s)' => [
                    'Construction of Farm-to-Mill Roads',
                    'Bridge Construction and Repair',
                    'Block Farm Program',
                    'Socialized Credit',
                    'Scholarship',
                ]
            ],
        ];

        // create top level
        foreach ($prexcs as $k0 => $value0) {
            // if the value is array,
            if (is_array($value0)) {
                $prexc0 = Prexc::create([
                    'name' => $k0,
                    'level' => 0,
                ]);

                foreach ($value0 as $k1 => $value1) {
                    if (is_int($k1)) {
                        $prexc1 = Prexc::create([
                            'name' => $value1,
                            'level' => 2,
                            'parent_id' => $prexc0->id,
                        ]);
                    } else {
                        $prexc1 = Prexc::create([
                            'name' => $k1,
                            'level' => 1,
                            'parent_id' => $prexc0->id,
                        ]);

                        if (is_array($value1)) {
                            foreach ($value1 as $k2 => $value2) {
                                echo 'k2: ' . $k2;
                                if (is_int($k2)) {
                                    $prexc2 = Prexc::create([
                                        'name' => $value2,
                                        'level' => 2,
                                        'parent_id' => $prexc1->id,
                                    ]);
                                } else {
                                    $prexc2 = Prexc::create([
                                        'name' => $k2,
                                        'level' => 2,
                                        'parent_id' => $prexc1->id,
                                    ]);
                                }
                            }
                        }
                    }
                }
            } else {
                $prexc0 = Prexc::create([
                    'name' => $value0,
                    'level' => 0,
                ]);
            }
        }
    }
}
