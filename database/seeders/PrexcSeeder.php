<?php

namespace Database\Seeders;

use App\Models\Indicator;
use App\Models\Prexc;
use App\Models\PrexcActivity;
use App\Models\PrexcProgram;
use App\Models\PrexcSubprogram;
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
            1 => [
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
                        'Market Development Services',
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
                    'Formulation, monitoring and evaluation of agricultural and fishery policies, plans and programs' => [
                        'Formulation, monitoring and evaluation of agricultural and fishery policies, plans and programs',
                    ],
                ],
                'AGRICULTURE AND FISHERY REGULATORY SUPPORT PROGRAM' => [
                    'Quality control and inspection' => [
                        'Quality control and inspection',
                    ],
                    'Quarantine services' => [
                        'Quarantine services',
                    ],
                    'Registration and licensing' => [
                        'Registration and licensing',
                    ],
                ],
                'LOCALLY-FUNDED AND FOREIGN-ASSISTED PROGRAM' => [
                    'Project(s)' => [
                        'Locally-Funded Project(s)',
                        'Foreign-Assisted Project(s)',
                    ],
                ],
            ],
            2 => [
                'AGRICULTURAL CREDIT PROGRAM' => [
                    'Agro-Industry Modernization Credit and Financing Program (AMCFP) Administration' => [
                        'Agro-Industry Modernization Credit and Financing Program (AMCFP) Administration'
                    ],
                    'Policy formulation, research and advocacy, monitoring and evaluation of credit policies, plans and programs and capacity building' => [
                        'Policy formulation, research and advocacy, monitoring and evaluation of credit policies, plans and programs and capacity building'
                    ],
                ],
            ],
            3 => [
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
            ],
            4 => [
                'FERTILIZER AND PESTICIDE REGULATORY PROGRAM' => [
                    'Quality Control and Inspection' => [
                        'Quality Control and Inspection',
                    ],
                    'Registration and Licensing' => [
                        'Registration and Licensing',
                    ],
                ],
            ],
            5 => [
                'FISHERIES RESEARCH AND DEVELOPMENT PROGRAM' => [
                    'Research and development' => [
                        'Research and development',
                    ]
                ],
            ],
            6 => [
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
                    'Meat establishment and meat inspection assistance to LGUs services' => [
                        'Meat establishment and meat inspection assistance to LGUs services'
                    ],
                ],
            ],
            7 => [
                'NATIONAL CARABAO DEVELOPMENT PROGRAM' => [
                    'CARABAO-BASED ENTERPRISE DEVELOPMENT SUB-PROGRAM' => [
                        'Carabao-Based Enterprise Development',
                        'Locally-funded Project/s',
                    ],
                ],
            ],
            8 => [
                'AGRICULTURAL MECHANIZATION AND POSTHARVEST RESEARCH, DEVELOPMENT AND EXTENSION PROGRAM' => [
                    'Formulation, monitoring and evaluation of policies, plans and programs' => [
                        'Formulation, monitoring and evaluation of policies, plans and programs',
                    ],
                    'Extension Support, Education and Training Services' => [
                        'Extension Support, Education and Training Services',
                    ],
                    'Research and Development' => [
                        'Research and Development',
                    ],
                ],
            ],
            9 => [
                'AGRICULTURE AND FISHERY STAKEHOLDERS ENGAGEMENT PROGRAM' => [
                    'Development and Coordination of Agriculture and Fishery Policies' => [
                        'Development and Coordination of Agriculture and Fishery Policies',
                    ],
                    'Planning, Monitoring and Knowledge Management' => [
                        'Planning, Monitoring and Knowledge Management',
                    ],
                    'Partnership Development' => [
                        'Partnership Development',
                    ],
                ],
            ],
            10 => [
                'FIBER DEVELOPMENT PROGRAM' => [
                    'Production Support Services' => [
                        'Production Support Services'
                    ],
                    'Extension Support, Education and Training Services' => [
                        'Extension Support, Education and Training Services'
                    ],
                    'Research and Development' => [
                        'Research and Development'
                    ],
                ],
            ],
            11 => [
                'FIBER INDUSTRY REGULATORY PROGRAM' => [
                    'Quality Control and Inspection' => [
                        'Quality Control and Inspection'
                    ],
                    'Registration and Licensing' => [
                        'Registration and Licensing',
                    ],
                ],
            ],
            12 => [
                'IRRIGATION SYSTEMS RESTORATION PROGRAM' => [
                    'NATIONAL IRRIGATION SYSTEMS SUB-PROGRAM' => [],
                    'COMMUNAL IRRIGATION SYSTEMS (CIS) SUB-PROGRAM' => [],
                    'OTHER IRRIGATION SYSTEMS SUB-PROGRAM' => [],
                ],
                'IRRIGATION SYSTEMS DEVELOPMENT PROGRAM' => [
                    'NEW NATIONAL IRRIGATION SUB-PROGRAM' => [],
                    'ESTABLISHMENT OF PUMP IRRIGATION SUB-PROGRAM' => [],
                    'SMALL RESERVOIR IRRIGATION SUB-PROGRAM' => [],
                    'SPECIAL IRRIGATION SUB-PROGRAM' => [],
                ],
            ],
            13 => [
                'DAIRY INDUSTRY DEVELOPMENT PROGRAM' => [
                    'Dairy herd build-up' => [
                        'Dairy herd build-up',
                    ],
                    'Dairy enterprise development' => [
                        'Dairy enterprise development'
                    ],
                    'Project(s)' => [
                        'Locally-Funded Project(s)',
                        'Foreign-Assisted Project(s)',
                    ],
                ],
            ],
            14 => [
                'BUFFER STOCKING PROGRAM' => [
                    'Local Palay Procurement' => [
                        'Local Palay Procurement'
                    ],
                ],
            ],
            15 => [
                'TOBACCO INDUSTRY DEVELOPMENT' => [
                    'Project(s)' => [
                        'Locally-Funded Project(s)',
                        'Foreign-Assisted Project(s)',
                    ],
                ],
            ],
            16 => [
                'COCONUT INDUSTRY DEVELOPMENT PROGRAM' => [
                    'COCONUT PRODUCTIVITY ENHANCEMENT (CPE) SUB-PROGRAM' => [
                        'Farm Production and Extension Services'
                    ],
                    'COCONUT RESEARCH AND DEVELOPMENT SUB-PROGRAM' => [
                        'Conduct of Coconut Research'
                    ],
                ],
                'OIL PALM INDUSTRY DEVELOPMENT PROGRAM' => [
                    'OIL PALM PRODUCTIVITY ENHANCEMENT SUB-PROGRAM' => [
                        'Projects (s)'
                    ],
                ],
            ],
            17 => [
                'FISHERIES INFRASTRUCTURE DEVELOPMENT PROGRAM' => [
                    'Project(s)' => [
                        'Locally-Funded Project(s)',
                        'Foreign-Assisted Project(s)',
                    ],
                ],
            ],
            18 => [
                'RESEARCH AND DEVELOPMENT PROGRAM' => [
                    'Conduct of regional rice research for development programs for Luzon, Visayas, and Mindanao' => [
                        'Conduct of regional rice research for development programs for Luzon, Visayas, and Mindanao',
                    ],
                ],
            ],
            19 => [
                'SUGARCANE INDUSTRY DEVELOPMENT PROGRAM' => [
                    'Project(s)' => [
                        'Construction of Farm-to-Mill Roads',
                        'Bridge Construction and Repair',
                        'Block Farm Program',
                        'Socialized Credit',
                        'Scholarship',
                    ]
                ],
            ],
        ];

        foreach ($prexcs as $ouGroup => $programs) {
            // programs
            foreach ($programs as $program => $subprograms) {
                $p = PrexcProgram::create([
                    'name' => $program,
                    'label'=> $program,
                    'ou_group_id' => $ouGroup
                ]);

                foreach ($subprograms as $subprogram => $activities) {
                    $s = PrexcSubprogram::create([
                        'name' => $subprogram,
                        'label'=> $subprogram,
                        'prexc_program_id' => $p->id,
                    ]);

                    foreach ($activities as $activity) {
                        $a = PrexcActivity::create([
                            'name' => $activity,
                            'label'=> $activity,
                            'prexc_subprogram_id' => $s->id,
                        ]);
                    }
                }
            }
        }
    }
}
