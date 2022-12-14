<?php

namespace Database\Seeders;

use App\Models\Indicator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class IndicatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        DB::table('indicators')->truncate();

        $indicators = [
            'Forage Seeds distributed'=>[3,4,5,6,7,8],
            'Garlic Seeds distributed'=>[3,4,5,6,7,8],
            'Onion Seeds distributed'=>[3,4,5,6,7,8],
            'Other Seeds distributed'=>[3,4,5,6,7,8],
            'Registered Rice Seeds distributed'=>[3,4,5,6,7,8],
            'Certified Rice Seeds distributed'=>[3,4,5,6,7,8],
            'Area of fertilizer vouchers claimed'=>[3,4,5,6,7,8],
            'Amount of vouchers distributed'=>[3,4,5,6,7,8],
            'Commercial Hybrid Rice seeds distributed'=>[3,4,5,6,7,8],
            'Public Hybrid Rice seeds distributed'=>[3,4,5,6,7,8],
            'Special Rice seeds distributed'=>[3,4,5,6,7,8],
            'Other Rice seeds distributed'=>[3,4,5,6,7,8],
            'Registered Rice Seeds reserved'=>[3,4,5,6,7,8],
            'Certified Rice Seeds reserved'=>[3,4,5,6,7,8],
            'Foundation Rice Seeds reserved'=>[3,4,5,6,7,8],
            'Hybrid Rice Seeds reserved'=>[3,4,5,6,7,8],
            'Other Rice Seeds reserve'=>[3,4,5,6,7,8],
            'Rice Seeds reserved'=>[3,4,5,6,7,8],
            'Vegetable Seeds reserved'=>[3,4,5,6,7,8],
            'Vegetable Seeds distributed'=>[3,4,5,6,7,8],
            'White Corn Seeds distributed'=>[3,4,5,6,7,8],
            'White Corn Seeds reserved'=>[3,4,5,6,7,8],
            'Yellow Corn Seeds distributed'=>[3,4,5,6,7,8],
            'Yellow Corn Seeds reserved'=>[3,4,5,6,7,8],
            'Sorghum Seeds distributed'=>[3,4,5,6,7,8],
            'Abaca Planting materials distributed'=>[3,4,5,6,7,8],
            'Banana Planting materials distributed'=>[3,4,5,6,7,8],
            'Cacao Planting materials distributed'=>[3,4,5,6,7,8],
            'Cassava cuttings distributed'=>[3,4,5,6,7,8],
            'Coconut Planting materials distributed'=>[3,4,5,6,7,8],
            'Coffee Planting materials distributed'=>[3,4,5,6,7,8],
            'Forage cuttings distributed'=>[3,4,5,6,7,8],
            'Mango Planting materials distributed'=>[3,4,5,6,7,8],
            'Pineapple Planting materials distributed'=>[3,4,5,6,7,8],
            'Rubber Planting materials distributed'=>[3,4,5,6,7,8],
            'Sugarcane points and plantlets distributed'=>[3,4,5,6,7,8],
            'Vegetable cuttings distributed'=>[3,4,5,6,7,8],
            'Other cuttings distributed'=>[3,4,5,6,7,8],
            'Other planting materials distributed bag'=>[3,4,5,6,7,8],
            'Other planting materials distributed piece'=>[3,4,5,6,7,8],
            'Other planting materials distributed kg'=>[3,4,5,6,7,8],
            'Bee colonies distributed'=>[3,4,5,6,7,8],
            'Beef Cattle distributed'=>[3,4,5,6,7,8],
            'Carabao distributed'=>[3,4,5,6,7,8],
            'Chicken distributed'=>[3,4,5,6,7,8],
            'Dairy Cattle distributed'=>[3,4,5,6,7,8],
            'Draft Animals distributed'=>[3,4,5,6,7,8],
            'Duck distributed'=>[3,4,5,6,7,8],
            'Goat distributed'=>[3,4,5,6,7,8],
            'Other large ruminant distributed'=>[3,4,5,6,7,8],
            'Other poultry distributed'=>[3,4,5,6,7,8],
            'Other small ruminant distributed'=>[3,4,5,6,7,8],
            'Sheep distributed'=>[3,4,5,6,7,8],
            'Swine distributed'=>[3,4,5,6,7,8],
            'Semen straws distributed'=>[3,4,5,6,7,8],
            'Biologics/vaccines/drugs distributed'=>[3,4,5,6,7,8],
            'Bio-agents distributed kg'=>[3,4,5,6,7,8],
            'Bio-agents distributed pc'=>[3,4,5,6,7,8],
            'Bactericides reserved_ liter'=>[3,4,5,6,7,8],
            'Other agri-chemicals reserved_gallon'=>[3,4,5,6,7,8],
            'Other agri-chemicals reserved_pc'=>[3,4,5,6,7,8],
            'Other agri-chemicals reserved_kg'=>[3,4,5,6,7,8],
            'Fungicides reserved_ kg'=>[3,4,5,6,7,8],
            'Fungicides reserved_liter'=>[3,4,5,6,7,8],
            'Rodenticides reserved_kg'=>[3,4,5,6,7,8],
            'Insecticides reserved_pc'=>[3,4,5,6,7,8],
            'Insecticides reserved_kg'=>[3,4,5,6,7,8],
            'Insecticides reserved_ liter'=>[3,4,5,6,7,8],
            'Bactericides distributed liter'=>[3,4,5,6,7,8],
            'Other agri-chemicals distributed_gallon'=>[3,4,5,6,7,8],
            'Other agri-chemicals distributed_pc'=>[3,4,5,6,7,8],
            'Other agri-chemicals distributed_kg'=>[3,4,5,6,7,8],
            'Fungicides distributed kg'=>[3,4,5,6,7,8],
            'Fungicides distributed liter'=>[3,4,5,6,7,8],
            'Rodenticides distributed kg'=>[3,4,5,6,7,8],
            'Insecticides distributed pc'=>[3,4,5,6,7,8],
            'Insecticides distributed kg'=>[3,4,5,6,7,8],
            'Insecticides distributed liter'=>[3,4,5,6,7,8],
            'Botanical pesticides distributed Liquid'=>[3,4,5,6,7,8],
            'Botanical pesticides distributed Solid kg'=>[3,4,5,6,7,8],
            'Botanical pesticides distributed Solid pc'=>[3,4,5,6,7,8],
            'Botanical pesticides bufferstock Solid kg'=>[3,4,5,6,7,8],
            'Botanical pesticides bufferstock Liquid'=>[3,4,5,6,7,8],
            'Compost Fungus Activator distributed'=>[3,4,5,6,7,8],
            'Soil Inoculants distributed'=>[3,4,5,6,7,8],
            'Bio-N fertilizer distributed_pack'=>[3,4,5,6,7,8],
            'Bio-N fertilizer distributed_kg'=>[3,4,5,6,7,8],
            'Foliar fertilizer distributed Liquid'=>[3,4,5,6,7,8],
            'Foliar fertilizer distributed Solid'=>[3,4,5,6,7,8],
            'Inorganic fertilizer distributed'=>[3,4,5,6,7,8],
            'Organic fertilizer distributed'=>[3,4,5,6,7,8],
            'Other fertilizers&soil ameliorants distributed kg'=>[3,4,5,6,7,8],
            'Other fertilizers&soil ameliorants distributed liter'=>[3,4,5,6,7,8],
            'Soil Test Kit distributed'=>[3,4,5,6,7,8],
            'Other testing kits distributed'=>[3,4,5,6,7,8],
            'Farm supplies distributed piece'=>[3,4,5,6,7,8],
            'Farm supplies distributed rolls'=>[3,4,5,6,7,8],
            'Farm supplies distributed meter'=>[3,4,5,6,7,8],
            'Farm inputs distributed kg'=>[3,4,5,6,7,8],
            'Farm inputs distributed liter'=>[3,4,5,6,7,8],
            'Automated weather station established'=>[3,4,5,6,7,8],
            'Greenhouses established'=>[3,4,5,6,7,8],
            'LN2 plants established'=>[3,4,5,6,7,8],
            'Nurseries established'=>[3,4,5,6,7,8],
            'Organic fertilizer composting facilities established'=>[3,4,5,6,7,8],
            'Rainshelter established'=>[3,4,5,6,7,8],
            'Screenhouse/Nethouse established'=>[3,4,5,6,7,8],
            'Seed gardens established'=>[3,4,5,6,7,8],
            'Seed Storage established'=>[3,4,5,6,7,8],
            'Stock farms established'=>[3,4,5,6,7,8],
            'Tissue culture lab established'=>[3,4,5,6,7,8],
            'Mushroom production center established'=>[3,4,5,6,7,8],
            'Other production facilities established'=>[3,4,5,6,7,8],
            'Automated weather station maintained'=>[3,4,5,6,7,8],
            'Greenhouses maintained'=>[3,4,5,6,7,8],
            'LN2 plants maintained'=>[3,4,5,6,7,8],
            'Nurseries maintained'=>[3,4,5,6,7,8],
            'Organic fertilizer composting facilities maintained'=>[3,4,5,6,7,8],
            'Rainshelter maintained'=>[3,4,5,6,7,8],
            'Screenhouse/Nethouse maintained'=>[3,4,5,6,7,8],
            'Seed gardens maintained'=>[3,4,5,6,7,8],
            'Seed Storage maintained'=>[3,4,5,6,7,8],
            'Stock farms maintained'=>[3,4,5,6,7,8],
            'Tissue culture lab maintained'=>[3,4,5,6,7,8],
            'Other production facilities maintained'=>[3,4,5,6,7,8],
            'Automated weather station upgraded'=>[3,4,5,6,7,8],
            'Greenhouses upgraded'=>[3,4,5,6,7,8],
            'LN2 plants upgraded'=>[3,4,5,6,7,8],
            'Multiplier farms upgraded'=>[3,4,5,6,7,8],
            'Nucleus farms upgraded'=>[3,4,5,6,7,8],
            'Nurseries upgraded'=>[3,4,5,6,7,8],
            'Organic fertilizer composting facilities upgraded'=>[3,4,5,6,7,8],
            'Rainshelter upgraded'=>[3,4,5,6,7,8],
            'Screenhouse/Nethouse upgraded'=>[3,4,5,6,7,8],
            'Seed gardens upgraded'=>[3,4,5,6,7,8],
            'Seed Storage upgraded'=>[3,4,5,6,7,8],
            'Tissue culture lab upgraded'=>[3,4,5,6,7,8],
            'Other production facilities upgraded'=>[3,4,5,6,7,8],
            'Automated weather station rehabilitated'=>[3,4,5,6,7,8],
            'Greenhouses rehabilitated'=>[3,4,5,6,7,8],
            'LN2 plants rehabilitated'=>[3,4,5,6,7,8],
            'Nurseries rehabilitated'=>[3,4,5,6,7,8],
            'Organic fertilizer composting facilities rehabilitated'=>[3,4,5,6,7,8],
            'Rainshelter rehabilitated'=>[3,4,5,6,7,8],
            'Screenhouse/Nethouse rehabilitated'=>[3,4,5,6,7,8],
            'Seed gardens rehabilitated'=>[3,4,5,6,7,8],
            'Seed Storage rehabilitated'=>[3,4,5,6,7,8],
            'Stock farms rehabilitated'=>[3,4,5,6,7,8],
            'Tissue culture lab rehabilitated'=>[3,4,5,6,7,8],
            'Other production facilities rehabilitated'=>[3,4,5,6,7,8],
            'Funded Local events'=>[10],
            'Funded International events'=>[10],
            'Funded NoBreakdown events'=>[10],
            'Assisted Local events'=>[10],
            'Assisted International events'=>[10],
            'Assisted NoBreakdown events'=>[10],
            'Participated Local events'=>[10],
            'Participated International events'=>[10],
            'Participated NoBreakdown events'=>[10],
            'Conducted Local events'=>[10],
            'Conducted International events'=>[10],
            'Conducted NoBreakdown events'=>[10],
            'Auction Market established'=>[10],
            'Food terminal established'=>[10],
            'Organic trading centers established'=>[10],
            'Trading Centers established'=>[10],
            'Trading Posts established'=>[10],
            'Satellite Markets established'=>[10],
            'Other market-related infra established'=>[10],
            'Auction markets assisted'=>[10],
            'Other market-related infra assisted'=>[10],
            'Market-related infra upgraded'=>[10],
            'Benchmarking activities conducted'=>[10],
            'Other market-related studies conducted'=>[10],
            'Market-related studies funded'=>[10],
            'Other market-related activities conducted'=>[10],
            'FFS conducted'=>[12,13,14,15,16,17,18],
            'POT (Package of Technology) conducted'=>[12,13,14,15,16,17,18],
            'School on Air conducted'=>[12,13,14,15,16,17,18],
            'TOT conducted'=>[12,13,14,15,16,17,18],
            'Other training conducted'=>[12,13,14,15,16,17,18],
            'FFS started'=>[12,13,14,15,16,17,18],
            'Other training started'=>[12,13,14,15,16,17,18],
            'Field day conducted'=>[12,13,14,15,16,17,18],
            'Other training-related events conducted'=>[12,13,14,15,16,17,18],
            'e-learning course administered'=>[12,13,14,15,16,17,18],
            'e-learning course graduates'=>[12,13,14,15,16,17,18],
            'Print disseminated'=>[12,13,14,15,16,17,18],
            'Audio visual disseminated'=>[12,13,14,15,16,17,18],
            'NoBreakdown Print and audio visual (including digital) disseminated'=>[12,13,14,15,16,17,18],
            'Advertisement published'=>[12,13,14,15,16,17,18],
            'Photo stories published'=>[12,13,14,15,16,17,18],
            'Video materials released'=>[12,13,14,15,16,17,18],
            'NoBreakdown Advertisement, photo stories and video materials released'=>[12,13,14,15,16,17,18],
            'NoBreakdown Advertisement, Radio programs and TV plugs/jingle aired'=>[12,13,14,15,16,17,18],
            'Radio programs aired'=>[12,13,14,15,16,17,18],
            'Radio plugs aired'=>[12,13,14,15,16,17,18],
            'TV jingles/plugs aired'=>[12,13,14,15,16,17,18],
            'Advertisement aired'=>[12,13,14,15,16,17,18],
            'Other IEC materials disseminated'=>[12,13,14,15,16,17,18],
            'RCM recommendation generated'=>[12,13,14,15,16,17,18],
            'Other IEC activities conducted'=>[12,13,14,15,16,17,18],
            'NoBreakdown scholars given study grants'=>[12,13,14,15,16,17,18],
            'Degree Non-DA scholars given study grants'=>[12,13,14,15,16,17,18],
            'Non-degree Non-DA scholars given study grants'=>[12,13,14,15,16,17,18],
            'AEWs-extension workers given incentives'=>[12,13,14,15,16,17,18],
            'AFC representative given incentives'=>[12,13,14,15,16,17,18],
            'Farmer given incentive'=>[12,13,14,15,16,17,18],
            'Farm youth given allowance'=>[12,13,14,15,16,17,18],
            'NoBreakdown Awards and recognition conferred'=>[12,13,14,15,16,17,18],
            'LGU-extension workers Awards and recognition conferred'=>[12,13,14,15,16,17,18],
            'Farmers Awards and recognition conferred'=>[12,13,14,15,16,17,18],
            'Rural Women and recognition conferred'=>[12,13,14,15,16,17,18],
            'Youth Awards and recognition conferred'=>[12,13,14,15,16,17,18],
            'LGUs Awards and recognition conferred'=>[12,13,14,15,16,17,18],
            'NoBreakdown Techno demo established/maintained'=>[12,13,14,15,16,17,18],
            'Techno demo established'=>[12,13,14,15,16,17,18],
            'Techno demo maintained'=>[12,13,14,15,16,17,18],
            'Learning Site established'=>[12,13,14,15,16,17,18],
            'Learning Site maintained'=>[12,13,14,15,16,17,18],
            'Model Farms established'=>[12,13,14,15,16,17,18],
            'Model Farms maintained'=>[12,13,14,15,16,17,18],
            'Urban Garden established'=>[12,13,14,15,16,17,18],
            'Completed Extension-related studies conducted'=>[12,13,14,15,16,17,18],
            'Continuing Extension-related studies conducted'=>[12,13,14,15,16,17,18],
            'New Extension-related studies conducted'=>[12,13,14,15,16,17,18],
            'NoBreakdown Extension-related studies conducted'=>[12,13,14,15,16,17,18],
            'Extension-related studies funded'=>[12,13,14,15,16,17,18],
            'Extension standards (manual) approved'=>[12,13,14,15,16,17,18],
            'Completed Production-related R&D activities conducted'=>[20,21,22,23,24,25],
            'Continuing Production-related R&D activities conducted'=>[20,21,22,23,24,25],
            'New Production-related R&D activities conducted'=>[20,21,22,23,24,25],
            'NoBreakdown Production-related R&D activities conducted'=>[20,21,22,23,24,25],
            'Production-related R&D activities funded'=>[20,21,22,23,24,25],
            'Completed Market-related R&D activities conducted'=>[20,21,22,23,24,25],
            'Continuing Market-related R&D activities conducted'=>[20,21,22,23,24,25],
            'New Market-related R&D activities conducted'=>[20,21,22,23,24,25],
            'NoBreakdown Market-related R&D activities conducted'=>[20,21,22,23,24,25],
            'Completed Production-related R&D activities funded'=>[20,21,22,23,24,25],
            'Continuing Production-related R&D activities funded'=>[20,21,22,23,24,25],
            'New Production-related R&D activities funded'=>[20,21,22,23,24,25],
            'Completed Extension-related R&D activities conducted'=>[20,21,22,23,24,25],
            'Continuing Extension-related R&D activities conducted'=>[20,21,22,23,24,25],
            'New Extension-related R&D activities conducted'=>[20,21,22,23,24,25],
            'NoBreakdown Extension-related R&D activities conducted'=>[20,21,22,23,24,25],
            'Completed Market-related R&D activities funded'=>[20,21,22,23,24,25],
            'Continuing Market-related R&D activities funded'=>[20,21,22,23,24,25],
            'New Market-related R&D activities funded'=>[20,21,22,23,24,25],
            'Completed Irrigation-related R&D activities conducted'=>[20,21,22,23,24,25],
            'Continuing Irrigation-related R&D activities conducted'=>[20,21,22,23,24,25],
            'New Irrigation-related R&D activities conducted'=>[20,21,22,23,24,25],
            'NoBreakdown Irrigation-related R&D activities conducted'=>[20,21,22,23,24,25],
            'Completed Extension-related R&D activities funded'=>[20,21,22,23,24,25],
            'Continuing Extension-related R&D activities funded'=>[20,21,22,23,24,25],
            'New Extension-related R&D activities funded'=>[20,21,22,23,24,25],
            'Completed Postharvest-related R&D activities conducted'=>[20,21,22,23,24,25],
            'Continuing Postharvest-related R&D activities conducted'=>[20,21,22,23,24,25],
            'New Postharvest-related R&D activities conducted'=>[20,21,22,23,24,25],
            'NoBreakdown Postharvest-related R&D activities conducted'=>[20,21,22,23,24,25],
            'Completed Irrigation-related R&D activities funded'=>[20,21,22,23,24,25],
            'Continuing Irrigation-related R&D activities funded'=>[20,21,22,23,24,25],
            'New Irrigation-related R&D activities funded'=>[20,21,22,23,24,25],
            'Completed Policy-related R&D activities conducted'=>[20,21,22,23,24,25],
            'Continuing Policy-related R&D activities conducted'=>[20,21,22,23,24,25],
            'New Policy-related R&D activities conducted'=>[20,21,22,23,24,25],
            'NoBreakdown Policy-related R&D activities conducted'=>[20,21,22,23,24,25],
            'Completed Postharvest-related R&D activities funded'=>[20,21,22,23,24,25],
            'Continuing Postharvest-related R&D activities funded'=>[20,21,22,23,24,25],
            'New Postharvest-related R&D activities funded'=>[20,21,22,23,24,25],
            'Completed Policy-related R&D activities conducted'=>[20,21,22,23,24,25],
            'Continuing Policy-related R&D activities conducted'=>[20,21,22,23,24,25],
            'New Policy-related R&D activities conducted'=>[20,21,22,23,24,25],
            'NoBreakdown Policy-related R&D activities conducted'=>[20,21,22,23,24,25],
            'Completed Policy-related R&D activities funded'=>[20,21,22,23,24,25],
            'Continuing Policy-related R&D activities funded'=>[20,21,22,23,24,25],
            'New Policy-related R&D activities funded'=>[20,21,22,23,24,25],
            'Research-related activities conducted'=>[20,21,22,23,24,25],
            'Established Research facilities'=>[20,21,22,23,24,25],
            'Funded Research facilities'=>[20,21,22,23,24,25],
            'Maintained Research facilities'=>[20,21,22,23,24,25],
            'Rehabilitated Research facilities'=>[20,21,22,23,24,25],
            'Upgraded Research facilities'=>[20,21,22,23,24,25],
            'Chopper distributed'=>[28,29,30,31,32],
            'Cultivators distributed'=>[28,29,30,31,32],
            'Combine Harvester distributed'=>[28,29,30,31,32],
            'Harvester distributed'=>[28,29,30,31,32],
            'Incubator distributed'=>[28,29,30,31,32],
            'Reapers distributed'=>[28,29,30,31,32],
            'Seeder distributed'=>[28,29,30,31,32],
            'Sprayers distributed'=>[28,29,30,31,32],
            'Threshers distributed'=>[28,29,30,31,32],
            'Tillers distributed'=>[28,29,30,31,32],
            'Crawler-wheel agricultural tractors distributed'=>[28,29,30,31,32],
            'Four-wheel agricultural tractors distributed'=>[28,29,30,31,32],
            'Walking-type agricultural tractors distributed'=>[28,29,30,31,32],
            'Planters distributed'=>[28,29,30,31,32],
            'Transplanters distributed'=>[28,29,30,31,32],
            'LN2 tank distributed'=>[28,29,30,31,32],
            'Feed milling/mixer equipment distributed'=>[28,29,30,31,32],
            'Feed pelletizer equipment distributed'=>[28,29,30,31,32],
            'Other farm production-related machinery and equipment distributed'=>[28,29,30,31,32],
            'Automated weather station established'=>[28,29,30,31,32],
            'Composting Facility for Biodegradable Waste (CFBW)'=>[28,29,30,31,32],
            'Small Scale Composting Facility (SSFW)'=>[28,29,30,31,32],
            'Livestock housing facility established'=>[28,29,30,31,32],
            'Poultry housing facility established'=>[28,29,30,31,32],
            'Poultry dressing plant established'=>[28,29,30,31,32],
            'Feed milling facilities established'=>[28,29,30,31,32],
            'Greenhouses established_p'=>[28,29,30,31,32],
            'LN2 plants established'=>[28,29,30,31,32],
            'Nurseries established'=>[28,29,30,31,32],
            'Rainshelter established'=>[28,29,30,31,32],
            'School gardens established'=>[28,29,30,31,32],
            'Screenhouse/Nethouse established'=>[28,29,30,31,32],
            'Seed gardens established'=>[28,29,30,31,32],
            'Seed Storage established'=>[28,29,30,31,32],
            'Feedmill established'=>[28,29,30,31,32],
            'Stock farms established'=>[28,29,30,31,32],
            'Tissue culture lab established'=>[28,29,30,31,32],
            'Other production facilities established'=>[28,29,30,31,32],
            'Botanical Concoction Center establsihed'=>[28,29,30,31,32],
            'Vermi-compost Shed established'=>[28,29,30,31,32],
            'Automated weather station rehabilitated'=>[28,29,30,31,32],
            'INPUT INDICATORS POSTHARVEST&OTHER INFRA'=>[28,29,30,31,32],
            'Beneficiaries rating the postharvest machinery, equipment and facilities to be atleast satisfactory'=>[28,29,30,31,32],
            'Provinces provided with support to construct postharvest facilities'=>[28,29,30,31,32],
            'Separator distributed'=>[28,29,30,31,32],
            'Hullers distributed'=>[28,29,30,31,32],
            'Chippers distributed'=>[28,29,30,31,32],
            'Depulper distributed'=>[28,29,30,31,32],
            'Granulators distributed'=>[28,29,30,31,32],
            'Graters distributed'=>[28,29,30,31,32],
            'Grinders distributed'=>[28,29,30,31,32],
            'Roasters distributed'=>[28,29,30,31,32],
            'Sheller distributed'=>[28,29,30,31,32],
            'Shredders distributed'=>[28,29,30,31,32],
            'Freezers distributed'=>[28,29,30,31,32],
            'Other processing equipment distributed'=>[28,29,30,31,32],
            'Mechanical Dryers distributed'=>[28,29,30,31,32],
            'Non- Mechanical Dryers distributed'=>[28,29,30,31,32],
            'Commodity transport vehicle distributed'=>[28,29,30,31,32],
            'Laminated sacks distributed'=>[28,29,30,31,32],
            'Milk equipment distributed'=>[28,29,30,31,32],
            'Milling equipment distributed'=>[28,29,30,31,32],
            'Storage equipment distributed'=>[28,29,30,31,32],
            'Stripping machine distributed'=>[28,29,30,31,32],
            'Other postharvest equipment and machinery distributed'=>[28,29,30,31,32],
            'MPDP/MCDP constructed'=>[28,29,30,31,32],
            'Other drying facilities constructed'=>[28,29,30,31,32],
            'Cold Storage constructed'=>[28,29,30,31,32],
            'Silo constructed'=>[28,29,30,31,32],
            'Monolithic Dome Warehouses constructed'=>[28,29,30,31,32],
            'Packinghouses constructed'=>[28,29,30,31,32],
            'Warehouses constructed'=>[28,29,30,31,32],
            'Milking parlor established'=>[28,29,30,31,32],
            'Cold Storage facilities constructed'=>[28,29,30,31,32],
            'Other Storage facilities constructed'=>[28,29,30,31,32],
            'Biogas digester constructed'=>[28,29,30,31,32],
            'Rice Fortification Equipment constructed'=>[28,29,30,31,32],
            'Agricultural Tramline System constructed'=>[28,29,30,31,32],
            'Agricultural Tramline System rehabilitated'=>[28,29,30,31,32],
            'Fermentation facility established'=>[28,29,30,31,32],
            'Rice Processing Facility (RPC) established'=>[28,29,30,31,32],
            'Other processing center established'=>[28,29,30,31,32],
            'Other postharvest facilities constructed'=>[28,29,30,31,32],
            'Service area generated from the construction of irrigation canal'=>[34,35,36,37,38],
            'SSIS Restored service area'=>[34,35,36,37,38],
            'SSIS Repaired length of canal'=>[34,35,36,37,38],
            'SSIS Repaired structure'=>[34,35,36,37,38],
            'Small Water Impounding Projects installed/constructed'=>[34,35,36,37,38],
            'Solar-powered irrigation system installed/constructed'=>[34,35,36,37,38],
            'Solar-powered fertigation system installed/constructed'=>[34,35,36,37,38],
            'Small Farm Reservoir installed/constructed'=>[34,35,36,37,38],
            'Shallow Tube Well installed/distributed'=>[34,35,36,37,38],
            'Rock Fill Dam constructed'=>[34,35,36,37,38],
            'Diversion Dam constructed'=>[34,35,36,37,38],
            'Check Dam constructed'=>[34,35,36,37,38],
            'Ram Pump installed/constructed'=>[34,35,36,37,38],
            'Hydroponics System installed/constructed'=>[34,35,36,37,38],
            'Wind-Powered Irrigation System installed/constructed'=>[34,35,36,37,38],
            'Spring Development installed/constructed'=>[34,35,36,37,38],
            'Pump Irrigation System Open Source installed/distributed'=>[34,35,36,37,38],
            'Drip Irrigation System installed/distributed'=>[34,35,36,37,38],
            'Irrigation Canal constructed'=>[34,35,36,37,38],
            'Pivot Center Irrigation System installed/constructed'=>[34,35,36,37,38],
            'Sprinkler Irrigation System installed/constructed'=>[34,35,36,37,38],
            'Other SSIP installed/constructed'=>[34,35,36,37,38],
            'Small Water Impounding Projects rehabilitated'=>[34,35,36,37,38],
            'Solar-powered irrigation system rehabilitated'=>[34,35,36,37,38],
            'Solar-powered fertigation system rehabilitated'=>[34,35,36,37,38],
            'Small Farm Reservoir rehabilitated'=>[34,35,36,37,38],
            'Shallow Tube Well rehabilitated'=>[34,35,36,37,38],
            'Rock Fill Dam rehabilitated'=>[34,35,36,37,38],
            'Diversion Dam rehabilitated'=>[34,35,36,37,38],
            'Check Dam rehabilitated'=>[34,35,36,37,38],
            'Ram Pump rehabilitated'=>[34,35,36,37,38],
            'Hydroponics System rehabilitated'=>[34,35,36,37,38],
            'Wind-Powered Irrigation System rehabilitated'=>[34,35,36,37,38],
            'Spring Development rehabilitated'=>[34,35,36,37,38],
            'Pump Irrigation System Open Source rehabilitated'=>[34,35,36,37,38],
            'Drip Irrigation System rehabilitated'=>[34,35,36,37,38],
            'Irrigation Canal rehabilitated'=>[34,35,36,37,38],
            'Pivot Center Irrigation System rehabilitated'=>[34,35,36,37,38],
            'Sprinkler Irrigation System rehabilitated'=>[34,35,36,37,38],
            'Other SSIP rehabilitated'=>[34,35,36,37,38],
            'Completed Irrigation-related studies conducted'=>[34,35,36,37,38],
            'Continuing Irrigation-related studies conducted'=>[34,35,36,37,38],
            'New Irrigation-related studies conducted'=>[34,35,36,37,38],
            'NoBreakdown Irrigation-related studies conducted'=>[34,35,36,37,38],
            'Irrigation-related studies funded'=>[34,35,36,37,38],
            'FMRs rehabilitated'=>[41],
            'FMRs upgraded'=>[41],
            'FMRs constructed'=>[41],
            'National agriculture and fishery plans formulated and distributed'=>[43],
            'Programs endorsed'=>[43],
            'Projects endorsed'=>[43],
            'Evaluation studies conducted'=>[43],
            'Monitoring and Evaluation Reports (by type) disseminated'=>[43],
            'Policy resolutions endorsed'=>[43],
            'Policy recommendations endorsed'=>[43],
            'NoBreakdown Policy recommendations/resolutions endorsed'=>[43],
            'Programs formulated/evaluated and endorsed'=>[43],
            'Projects formulated/evaluated and endorsed'=>[43],
            'NoBreakdown Programs and projects formulated/evaluated and endorsed'=>[43],
            'Policy issues resolved'=>[43],
            'Policy-related concerns addressed'=>[43],
            'Policy advocacy media disseminated'=>[43],
            'Executive measures supported'=>[43],
            'Legislative measures supported'=>[43],
            'Public/stakeholders consultations conducted'=>[43],
            'International agreements signed'=>[43],
            'MOA on agriculture and fishery cooperations signed'=>[43],
            'MOU on agriculture and fishery cooperations signed'=>[43],
            'International meetings/events organized'=>[43],
            'International negotiations participated'=>[43],
            'Policy studies funded'=>[43],
            'Policy studies conducted'=>[43],
            'Agriculture facilities monitored and/or inspected with reports issued'=>[45,46,47],
            'Total agricultural facilities registered'=>[45,46,47],
            'Agriculture products monitored and/or inspected with reports issued'=>[45,46,47],
            'Total agricultural products registered'=>[45,46,47],
            'Enforcement actions undertaken'=>[45,46,47],
            'Submitted reports that resulted in the issuance of notice of violations and penalties imposed'=>[45,46,47],
            'Detected violations that are resolved or referred for prosecution as prescribed by law'=>[45,46,47],
            'Certificates issued'=>[45,46,47],
            'Clearances issued'=>[45,46,47],
            'Permits issued'=>[45,46,47],
            'Licenses issued'=>[45,46,47],
            'Registrations issued'=>[45,46,47],
            'FLA issued'=>[45,46,47],
            'Other regulatory documents issued'=>[45,46,47],
            'Certificates endorsed'=>[45,46,47],
            'Permits endorsed'=>[45,46,47],
            'Licenses issued endorsed'=>[45,46,47],
            'Licenses endorsed'=>[45,46,47],
            'Registrations endorsed'=>[45,46,47],
            'Other regulatory documents endorsed'=>[45,46,47],
            'Amount of fees issuance of regulatory documents'=>[45,46,47],
            'Regulatory-related studies funded'=>[45,46,47],
            'Regulatory-related studies conducted'=>[45,46,47],
        ];

        foreach ($indicators as $key => $value) {
            $indicator = Indicator::create([
                'name' => $key,
                'label' => $key,
            ]);
        }

        Schema::enableForeignKeyConstraints();
    }
}
