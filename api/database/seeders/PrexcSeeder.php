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
        $items = [
            'Agricultural and Fishery Policy Services' => [
                'National agriculture and fishery plans formulated and distributed',
                'Programs endorsed',
                'Projects endorsed',
                'Evaluation studies conducted',
                'Monitoring and Evaluation Reports (by type) disseminated',
                'Policy resolutions endorsed',
                'Policy recommendations endorsed',
                'NoBreakdown Policy recommendations/resolutions endorsed',
                'Programs formulated/evaluated and endorsed',
                'Projects formulated/evaluated and endorsed',
                'NoBreakdown Programs and projects formulated/evaluated and endorsed',
                'Policy issues resolved',
                'Policy-related concerns addressed',
                'Policy advocacy media disseminated',
                'Executive measures supported',
                'Legislative measures supported',
                'Public/stakeholders consultations conducted',
                'International agreements signed',
                'MOA on agriculture and fishery cooperations signed',
                'MOU on agriculture and fishery cooperations signed',
                'International meetings/events organized',
                'International negotiations participated',
                'Policy studies funded',
                'Policy studies conducted',
            ],
            'Production Support Services' => [
                'Forage Seeds distributed',
                'Garlic Seeds distributed',
                'Onion Seeds distributed',
                'Other Seeds distributed',
                'Registered Rice Seeds distributed',
                'Certified Rice Seeds distributed',
                'Area of fertilizer vouchers claimed',
                'Amount of vouchers distributed',
                'Commercial Hybrid Rice seeds distributed',
                'Public Hybrid Rice seeds distributed',
                'Special Rice seeds distributed',
                'Other Rice seeds distributed',
                'Registered Rice Seeds reserved',
                'Certified Rice Seeds reserved',
                'Foundation Rice Seeds reserved',
                'Hybrid Rice Seeds reserved',
                'Other Rice Seeds reserve',
                'Rice Seeds reserved',
                'Vegetable Seeds reserved',
                'Vegetable Seeds distributed',
                'White Corn Seeds distributed',
                'White Corn Seeds reserved',
                'Yellow Corn Seeds distributed',
                'Yellow Corn Seeds reserved',
                'Sorghum Seeds distributed',
                'Abaca Planting materials distributed',
                'Banana Planting materials distributed',
                'Cacao Planting materials distributed',
                'Cassava cuttings distributed',
                'Coconut Planting materials distributed',
                'Coffee Planting materials distributed',
                'Forage cuttings distributed',
                'Mango Planting materials distributed',
                'Pineapple Planting materials distributed',
                'Rubber Planting materials distributed',
                'Sugarcane points and plantlets distributed',
                'Vegetable cuttings distributed',
                'Other cuttings distributed',
                'Other planting materials distributed bag',
                'Other planting materials distributed piece',
                'Other planting materials distributed kg',
                'Bee colonies distributed',
                'Beef Cattle distributed',
                'Carabao distributed',
                'Chicken distributed',
                'Dairy Cattle distributed',
                'Draft Animals distributed',
                'Duck distributed',
                'Goat distributed',
                'Other large ruminant distributed',
                'Other poultry distributed',
                'Other small ruminant distributed',
                'Sheep distributed',
                'Swine distributed',
                'Semen straws distributed',
                'Biologics/vaccines/drugs distributed',
                'Bio-agents distributed kg',
                'Bio-agents distributed pc',
                'Bactericides reserved_ liter',
                'Other agri-chemicals reserved_gallon',
                'Other agri-chemicals reserved_pc',
                'Other agri-chemicals reserved_kg',
                'Fungicides reserved_ kg',
                'Fungicides reserved_liter',
                'Rodenticides reserved_kg',
                'Insecticides reserved_pc',
                'Insecticides reserved_kg',
                'Insecticides reserved_ liter',
                'Bactericides distributed liter',
                'Other agri-chemicals distributed_gallon',
                'Other agri-chemicals distributed_pc',
                'Other agri-chemicals distributed_kg',
                'Fungicides distributed kg',
                'Fungicides distributed liter',
                'Rodenticides distributed kg',
                'Insecticides distributed pc',
                'Insecticides distributed kg',
                'Insecticides distributed liter',
                'Botanical pesticides distributed Liquid',
                'Botanical pesticides distributed Solid kg',
                'Botanical pesticides distributed Solid pc',
                'Botanical pesticides bufferstock Solid kg',
                'Botanical pesticides bufferstock Liquid',
                'Compost Fungus Activator distributed',
                'Soil Inoculants distributed',
                'Bio-N fertilizer distributed_pack',
                'Bio-N fertilizer distributed_kg',
                'Foliar fertilizer distributed Liquid',
                'Foliar fertilizer distributed Solid',
                'Inorganic fertilizer distributed',
                'Organic fertilizer distributed',
                'Other fertilizers&soil ameliorants distributed kg',
                'Other fertilizers&soil ameliorants distributed liter',
                'Soil Test Kit distributed',
                'Other testing kits distributed',
                'Farm supplies distributed piece',
                'Farm supplies distributed rolls',
                'Farm supplies distributed meter',
                'Farm inputs distributed kg',
                'Farm inputs distributed liter',
                'Automated weather station established',
                'Greenhouses established',
                'LN2 plants established',
                'Nurseries established',
                'Organic fertilizer composting facilities established',
                'Rainshelter established',
                'Screenhouse/Nethouse established',
                'Seed gardens established',
                'Seed Storage established',
                'Stock farms established',
                'Tissue culture lab established',
                'Mushroom production center established',
                'Other production facilities established',
                'Automated weather station maintained',
                'Greenhouses maintained',
                'LN2 plants maintained',
                'Nurseries maintained',
                'Organic fertilizer composting facilities maintained',
                'Rainshelter maintained',
                'Screenhouse/Nethouse maintained',
                'Seed gardens maintained',
                'Seed Storage maintained',
                'Stock farms maintained',
                'Tissue culture lab maintained',
                'Other production facilities maintained',
                'Automated weather station upgraded',
                'Greenhouses upgraded',
                'LN2 plants upgraded',
                'Multiplier farms upgraded',
                'Nucleus farms upgraded',
                'Nurseries upgraded',
                'Organic fertilizer composting facilities upgraded',
                'Rainshelter upgraded',
                'Screenhouse/Nethouse upgraded',
                'Seed gardens upgraded',
                'Seed Storage upgraded',
                'Tissue culture lab upgraded',
                'Other production facilities upgraded',
                'Automated weather station rehabilitated',
                'Greenhouses rehabilitated',
                'LN2 plants rehabilitated',
                'Nurseries rehabilitated',
                'Organic fertilizer composting facilities rehabilitated',
                'Rainshelter rehabilitated',
                'Screenhouse/Nethouse rehabilitated',
                'Seed gardens rehabilitated',
                'Seed Storage rehabilitated',
                'Stock farms rehabilitated',
                'Tissue culture lab rehabilitated',
                'Other production facilities rehabilitated',
            ],
            'Extension Support, Education and Training Services' => [
                'FFS conducted',
                'POT (Package of Technology) conducted',
                'School on Air conducted',
                'TOT conducted',
                'Other training conducted',
                'FFS started',
                'Other training started',
                'Field day conducted',
                'Other training-related events conducted',
                'e-learning course administered',
                'e-learning course graduates',
                'Print disseminated',
                'Audio visual disseminated',
                'NoBreakdown Print and audio visual (including digital) disseminated',
                'Advertisement published',
                'Photo stories published',
                'Video materials released',
                'NoBreakdown Advertisement, photo stories and video materials released',
                'NoBreakdown Advertisement, Radio programs and TV plugs/jingle aired',
                'Radio programs aired',
                'Radio plugs aired',
                'TV jingles/plugs aired',
                'Advertisement aired',
                'Other IEC materials disseminated',
                'RCM recommendation generated',
                'Other IEC activities conducted',
                'NoBreakdown scholars given study grants',
                'Degree Non-DA scholars given study grants',
                'Non-degree Non-DA scholars given study grants',
                'AEWs-extension workers given incentives',
                'AFC representative given incentives',
                'Farmer given incentive',
                'Farm youth given allowance',
                'NoBreakdown Awards and recognition conferred',
                'LGU-extension workers Awards and recognition conferred',
                'Farmers Awards and recognition conferred',
                'Rural Women and recognition conferred',
                'Youth Awards and recognition conferred',
                'LGUs Awards and recognition conferred',
                'NoBreakdown Techno demo established/maintained',
                'Techno demo established',
                'Techno demo maintained',
                'Learning Site established',
                'Learning Site maintained',
                'Model Farms established',
                'Model Farms maintained',
                'Urban Garden established',
                'Completed Extension-related studies conducted',
                'Continuing Extension-related studies conducted',
                'New Extension-related studies conducted',
                'NoBreakdown Extension-related studies conducted',
                'Extension-related studies funded',
                'Extension standards (manual) approved',
            ],
            'Research and Development' => [
                'Completed Production-related R&D activities conducted',
                'Continuing Production-related R&D activities conducted',
                'New Production-related R&D activities conducted',
                'NoBreakdown Production-related R&D activities conducted',
                'Production-related R&D activities funded',
                'Completed Market-related R&D activities conducted',
                'Continuing Market-related R&D activities conducted',
                'New Market-related R&D activities conducted',
                'NoBreakdown Market-related R&D activities conducted',
                'Completed Production-related R&D activities funded',
                'Continuing Production-related R&D activities funded',
                'New Production-related R&D activities funded',
                'Completed Extension-related R&D activities conducted',
                'Continuing Extension-related R&D activities conducted',
                'New Extension-related R&D activities conducted',
                'NoBreakdown Extension-related R&D activities conducted',
                'Completed Market-related R&D activities funded',
                'Continuing Market-related R&D activities funded',
                'New Market-related R&D activities funded',
                'Completed Irrigation-related R&D activities conducted',
                'Continuing Irrigation-related R&D activities conducted',
                'New Irrigation-related R&D activities conducted',
                'NoBreakdown Irrigation-related R&D activities conducted',
                'Completed Extension-related R&D activities funded',
                'Continuing Extension-related R&D activities funded',
                'New Extension-related R&D activities funded',
                'Completed Postharvest-related R&D activities conducted',
                'Continuing Postharvest-related R&D activities conducted',
                'New Postharvest-related R&D activities conducted',
                'NoBreakdown Postharvest-related R&D activities conducted',
                'Completed Irrigation-related R&D activities funded',
                'Continuing Irrigation-related R&D activities funded',
                'New Irrigation-related R&D activities funded',
                'Completed Policy-related R&D activities conducted',
                'Continuing Policy-related R&D activities conducted',
                'New Policy-related R&D activities conducted',
                'NoBreakdown Policy-related R&D activities conducted',
                'Completed Postharvest-related R&D activities funded',
                'Continuing Postharvest-related R&D activities funded',
                'New Postharvest-related R&D activities funded',
                'Completed Policy-related R&D activities conducted',
                'Continuing Policy-related R&D activities conducted',
                'New Policy-related R&D activities conducted',
                'NoBreakdown Policy-related R&D activities conducted',
                'Completed Policy-related R&D activities funded',
                'Continuing Policy-related R&D activities funded',
                'New Policy-related R&D activities funded',
                'Research-related activities conducted',
                'Established Research facilities',
                'Funded Research facilities',
                'Maintained Research facilities',
                'Rehabilitated Research facilities',
                'Upgraded Research facilities',
            ],
            'Irrigation Network Services' => [
                'Service area generated from the construction of irrigation canal',
                'SSIS Restored service area',
                'SSIS Repaired length of canal',
                'SSIS Repaired structure',
                'Small Water Impounding Projects installed/constructed',
                'Solar-powered irrigation system installed/constructed',
                'Solar-powered fertigation system installed/constructed',
                'Small Farm Reservoir installed/constructed',
                'Shallow Tube Well installed/distributed',
                'Rock Fill Dam constructed',
                'Diversion Dam constructed',
                'Check Dam constructed',
                'Ram Pump installed/constructed',
                'Hydroponics System installed/constructed',
                'Wind-Powered Irrigation System installed/constructed',
                'Spring Development installed/constructed',
                'Pump Irrigation System Open Source installed/distributed',
                'Drip Irrigation System installed/distributed',
                'Irrigation Canal constructed',
                'Pivot Center Irrigation System installed/constructed',
                'Sprinkler Irrigation System installed/constructed',
                'Other SSIP installed/constructed',
                'Small Water Impounding Projects rehabilitated',
                'Solar-powered irrigation system rehabilitated',
                'Solar-powered fertigation system rehabilitated',
                'Small Farm Reservoir rehabilitated',
                'Shallow Tube Well rehabilitated',
                'Rock Fill Dam rehabilitated',
                'Diversion Dam rehabilitated',
                'Check Dam rehabilitated',
                'Ram Pump rehabilitated',
                'Hydroponics System rehabilitated',
                'Wind-Powered Irrigation System rehabilitated',
                'Spring Development rehabilitated',
                'Pump Irrigation System Open Source rehabilitated',
                'Drip Irrigation System rehabilitated',
                'Irrigation Canal rehabilitated',
                'Pivot Center Irrigation System rehabilitated',
                'Sprinkler Irrigation System rehabilitated',
                'Other SSIP rehabilitated',
                'Completed Irrigation-related studies conducted',
                'Continuing Irrigation-related studies conducted',
                'New Irrigation-related studies conducted',
                'NoBreakdown Irrigation-related studies conducted',
                'Irrigation-related studies funded',
            ],
            'Farm-to-Mark Road Network Services' => [
                'FMRs rehabilitated',
                'FMRs upgraded',
                'FMRs constructed',
            ],
            'Agricultural and Fishery Machinery Equipment and Facilities Support Services' => [
                'Chopper distributed',
                'Cultivators distributed',
                'Combine Harvester distributed',
                'Harvester distributed',
                'Incubator distributed',
                'Reapers distributed',
                'Seeder distributed',
                'Sprayers distributed',
                'Threshers distributed',
                'Tillers distributed',
                'Crawler-wheel agricultural tractors distributed',
                'Four-wheel agricultural tractors distributed',
                'Walking-type agricultural tractors distributed',
                'Planters distributed',
                'Transplanters distributed',
                'LN2 tank distributed',
                'Feed milling/mixer equipment distributed',
                'Feed pelletizer equipment distributed',
                'Other farm production-related machinery and equipment distributed',
                'Automated weather station established',
                'Composting Facility for Biodegradable Waste (CFBW)',
                'Small Scale Composting Facility (SSFW)',
                'Livestock housing facility established',
                'Poultry housing facility established',
                'Poultry dressing plant established',
                'Feed milling facilities established',
                'Greenhouses established_p',
                'LN2 plants established',
                'Nurseries established',
                'Rainshelter established',
                'School gardens established',
                'Screenhouse/Nethouse established',
                'Seed gardens established',
                'Seed Storage established',
                'Feedmill established',
                'Stock farms established',
                'Tissue culture lab established',
                'Other production facilities established',
                'Botanical Concoction Center establsihed',
                'Vermi-compost Shed established',
                'Automated weather station rehabilitated',
                'INPUT INDICATORS POSTHARVEST&OTHER INFRA',
                'Beneficiaries rating the postharvest machinery, equipment and facilities to be atleast satisfactory',
                'Provinces provided with support to construct postharvest facilities',
                'Separator distributed',
                'Hullers distributed',
                'Chippers distributed',
                'Depulper distributed',
                'Granulators distributed',
                'Graters distributed',
                'Grinders distributed',
                'Roasters distributed',
                'Sheller distributed',
                'Shredders distributed',
                'Freezers distributed',
                'Other processing equipment distributed',
                'Mechanical Dryers distributed',
                'Non- Mechanical Dryers distributed',
                'Commodity transport vehicle distributed',
                'Laminated sacks distributed',
                'Milk equipment distributed',
                'Milling equipment distributed',
                'Storage equipment distributed',
                'Stripping machine distributed',
                'Other postharvest equipment and machinery distributed',
                'MPDP/MCDP constructed',
                'Other drying facilities constructed',
                'Cold Storage constructed',
                'Silo constructed',
                'Monolithic Dome Warehouses constructed',
                'Packinghouses constructed',
                'Warehouses constructed',
                'Milking parlor established',
                'Cold Storage facilities constructed',
                'Other Storage facilities constructed',
                'Biogas digester constructed',
                'Rice Fortification Equipment constructed',
                'Agricultural Tramline System constructed',
                'Agricultural Tramline System rehabilitated',
                'Fermentation facility established',
                'Rice Processing Facility (RPC) established',
                'Other processing center established',
                'Other postharvest facilities constructed',
            ],
            'Agricultural and Fishery Regulation Services' => [
                'Agriculture facilities monitored and/or inspected with reports issued',
                'Total agricultural facilities registered',
                'Agriculture products monitored and/or inspected with reports issued',
                'Total agricultural products registered',
                'Enforcement actions undertaken',
                'Submitted reports that resulted in the issuance of notice of violations and penalties imposed',
                'Detected violations that are resolved or referred for prosecution as prescribed by law',
                'Certificates issued',
                'Clearances issued',
                'Permits issued',
                'Licenses issued',
                'Registrations issued',
                'FLA issued',
                'Other regulatory documents issued',
                'Certificates endorsed',
                'Permits endorsed',
                'Licenses issued endorsed',
                'Licenses endorsed',
                'Registrations endorsed',
                'Other regulatory documents endorsed',
                'Amount of fees issuance of regulatory documents',
                'Regulatory-related studies funded',
                'Regulatory-related studies conducted',
            ],
            'Credit Support Services',
            'Market Development Services' => [
                'Funded Local events',
                'Funded International events',
                'Funded NoBreakdown events',
                'Assisted Local events',
                'Assisted International events',
                'Assisted NoBreakdown events',
                'Participated Local events',
                'Participated International events',
                'Participated NoBreakdown events',
                'Conducted Local events',
                'Conducted International events',
                'Conducted NoBreakdown events',
                'Auction Market established',
                'Food terminal established',
                'Organic trading centers established',
                'Trading Centers established',
                'Trading Posts established',
                'Satellite Markets established',
                'Other market-related infra established',
                'Auction markets assisted',
                'Other market-related infra assisted',
                'Market-related infra upgraded',
                'Benchmarking activities conducted',
                'Other market-related studies conducted',
                'Market-related studies funded',
                'Other market-related activities conducted',
            ],
            'Special Projects (Locally-funded and Foreign-assisted)',
            'Food Laboratory Testing Support Activities',
            'Agriculture and Fisheries Engineering Support Activities',
            'Operations and Maintenance of Integrated Laboratories',
            'FMR Network Planning',
            'Field Program Management Activities',
            'Planning and Policy Formulation for Soil and Water Resources Conservation, Management and Development',
            'Coordination of Agricultural Research',
            'Information and Communication Technology (ICT) Management Support',
            'Public Information Services',
            'Development of Organizational Policies, Plans, and Procedures',
            'International Affairs Coordination and Liaisoning',
            'Agriculture and Fisheries Surveillance Support Activities',
            'Other PSS',
            'Other ESETS',
            'Other R&D',
            'Other Regulatory',
        ];

        foreach ($items as $key => $value) {
            $prexc = Prexc::create([
                'name' => is_int($key) ? $value : $key,
                'label'=> is_int($key) ? $value : $key,
            ]);

            if (is_array($value)) {
                foreach ($value as $v) {
                    Indicator::create([
                        'prexc_id' => $prexc->id,
                        'name' => $v,
                        'label' => $v,
                    ]);
                }
            }
        }
    }
}
