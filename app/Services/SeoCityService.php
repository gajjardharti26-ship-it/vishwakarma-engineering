<?php

namespace App\Services;

class SeoCityService
{
    /**
     * Comprehensive List of 50+ Gujarat Cities, Districts, and Industrial Hubs
     */
    public static function getCities(): array
    {
        return [
            'ahmedabad' => [
                'name' => 'Ahmedabad',
                'district' => 'Ahmedabad',
                'region' => 'Central Gujarat',
                'industrial_zones' => ['Vatva GIDC', 'Naroda GIDC', 'Odhav GIDC', 'Changodar', 'Sanand GIDC', 'Kathwada GIDC', 'Bakrol', 'Bareja'],
                'key_industries' => ['Chemicals & Dyes', 'Pharmaceuticals & APIs', 'Engineering & Machinery', 'Specialty Chemicals', 'Agrochemicals'],
                'pincode_zone' => '382445',
            ],
            'surat' => [
                'name' => 'Surat',
                'district' => 'Surat',
                'region' => 'South Gujarat',
                'industrial_zones' => ['Sachin GIDC', 'Pandesara GIDC', 'Hazira Industrial Belt', 'Olpad GIDC', 'Katargam', 'Ichhapore'],
                'key_industries' => ['Petrochemicals & Gas', 'Textile Processing & Dyeing', 'Chemical Manufacturing', 'Heavy Engineering', 'Fertilizers'],
                'pincode_zone' => '395001',
            ],
            'vadodara' => [
                'name' => 'Vadodara',
                'district' => 'Vadodara',
                'region' => 'Central Gujarat',
                'industrial_zones' => ['Nandesari GIDC', 'Makarpura GIDC', 'Savli Heavy Industrial GIDC', 'Karjan GIDC', 'Por GIDC', 'Ranoli GIDC', 'Waghodia GIDC'],
                'key_industries' => ['Bulk Chemicals', 'Pharmaceutical Formulations', 'Heavy Engineering', 'Plastics & Polymers', 'Petrochemical Processing'],
                'pincode_zone' => '390001',
            ],
            'rajkot' => [
                'name' => 'Rajkot',
                'district' => 'Rajkot',
                'region' => 'Saurashtra',
                'industrial_zones' => ['Aji GIDC', 'Shapar-Veraval Industrial Area', 'Metoda Lodhika GIDC', 'Bhunava GIDC', 'Kothariya', 'Gondal Road'],
                'key_industries' => ['Engineering Components', 'Automobile Parts', 'Pumps & Valves', 'Forging & Casting', 'Chemical Equipment'],
                'pincode_zone' => '360001',
            ],
            'ankleshwar' => [
                'name' => 'Ankleshwar',
                'district' => 'Bharuch',
                'region' => 'South Gujarat',
                'industrial_zones' => ['Ankleshwar GIDC', 'Panoli GIDC', 'Jhagadia Industrial Estate', 'Valia GIDC'],
                'key_industries' => ['Chemical Hub of Asia', 'Pharmaceuticals & Bulk Drugs', 'Pesticides & Agrochemicals', 'Pigments & Dyes', 'Specialty Solvents'],
                'pincode_zone' => '393002',
            ],
            'bharuch' => [
                'name' => 'Bharuch',
                'district' => 'Bharuch',
                'region' => 'South Gujarat',
                'industrial_zones' => ['Dahej PCPIR', 'Vilayat GIDC', 'Narmadanagar', 'Palej GIDC', 'Nabipur'],
                'key_industries' => ['Petrochemicals', 'Heavy Organic Chemicals', 'Fertilizers & Polymers', 'Process Engineering', 'Specialty Intermediates'],
                'pincode_zone' => '392001',
            ],
            'dahej' => [
                'name' => 'Dahej',
                'district' => 'Bharuch',
                'region' => 'South Gujarat Coastal',
                'industrial_zones' => ['Dahej PCPIR Zone', 'Dahej SEZ (Special Economic Zone)', 'Marine Chemical Park', 'Dahej Port Industrial Zone'],
                'key_industries' => ['Petrochemical Refineries', 'Bulk Organic Chemicals', 'Chlor-Alkali', 'LNG & Port Engineering', 'Mega Chemical Plants'],
                'pincode_zone' => '392130',
            ],
            'vapi' => [
                'name' => 'Vapi',
                'district' => 'Valsad',
                'region' => 'South Gujarat',
                'industrial_zones' => ['Vapi GIDC Industrial Estate', 'Sarigam GIDC', 'Umbergaon GIDC', 'Bhilad Industrial Zone'],
                'key_industries' => ['Chemical Processing', 'Dyes & Pigments', 'Pharmaceutical Intermediates', 'Paper & Packaging', 'Textile Auxiliaries'],
                'pincode_zone' => '396195',
            ],
            'gandhinagar' => [
                'name' => 'Gandhinagar',
                'district' => 'Gandhinagar',
                'region' => 'North-Central Gujarat',
                'industrial_zones' => ['Gandhinagar GIDC Sector 25-28', 'Chhatral GIDC', 'Kadi Industrial Area', 'Kalol GIDC', 'Mansa GIDC'],
                'key_industries' => ['Engineering & Fabrication', 'Electronics & Instrumentation', 'Pharmaceutical Processing', 'Ceramics & Minerals', 'Plastics'],
                'pincode_zone' => '382010',
            ],
            'bhavnagar' => [
                'name' => 'Bhavnagar',
                'district' => 'Bhavnagar',
                'region' => 'Saurashtra',
                'industrial_zones' => ['Chitra GIDC', 'Vartej Industrial Area', 'Sihor Industrial Estate', 'Alang Industrial Cluster'],
                'key_industries' => ['Ship Recycling & Steel Rerolling', 'Chemicals & Salt Works', 'Specialty Plastics', 'Diamond & Engineering', 'Foundries'],
                'pincode_zone' => '364001',
            ],
            'jamnagar' => [
                'name' => 'Jamnagar',
                'district' => 'Jamnagar',
                'region' => 'Saurashtra',
                'industrial_zones' => ['Dared GIDC Phase I-III', 'Hapa Industrial Estate', 'Bedi Port Area', 'Sikka Heavy Industrial Belt', 'Motikhavdi'],
                'key_industries' => ['Brass Components & Forging', 'Oil Refining & Petrochemicals', 'Chemical Plants', 'Marine Engineering', 'Thermal Energy'],
                'pincode_zone' => '361001',
            ],
            'morbi' => [
                'name' => 'Morbi',
                'district' => 'Morbi',
                'region' => 'Saurashtra',
                'industrial_zones' => ['Morbi Ceramic Industrial Zone', 'Maliya GIDC', 'Wankaner GIDC', 'Trajpar Industrial Belt', 'Lakhdhirpur Road'],
                'key_industries' => ['Ceramic Tiles & Sanitaryware', 'Glaze Frits & Chemicals', 'Packaging & Paper Mills', 'Wall Cladding', 'Engineering Fabrication'],
                'pincode_zone' => '363641',
            ],
            'valsad' => [
                'name' => 'Valsad',
                'district' => 'Valsad',
                'region' => 'South Gujarat',
                'industrial_zones' => ['Gundlav GIDC', 'Atul Industrial Complex', 'Pardi Industrial Area', 'Dharampur GIDC'],
                'key_industries' => ['Agrochemicals & Dyes', 'Specialty Polymers', 'Chemical Synthesis', 'Food & Fruit Processing', 'Paints & Resins'],
                'pincode_zone' => '396001',
            ],
            'anand' => [
                'name' => 'Anand',
                'district' => 'Anand',
                'region' => 'Central Gujarat',
                'industrial_zones' => ['Vitthal Udyognagar GIDC', 'Khambhat GIDC', 'Sojitra GIDC', 'Tarapur Industrial Estate', 'Borsad GIDC'],
                'key_industries' => ['Dairy & Food Processing', 'Chemical & Dye Manufacturing', 'Heavy Engineering', 'Packaging Materials', 'Agriculture Equipment'],
                'pincode_zone' => '388121',
            ],
            'mehsana' => [
                'name' => 'Mehsana',
                'district' => 'Mehsana',
                'region' => 'North Gujarat',
                'industrial_zones' => ['Kadi GIDC Industrial Zone', 'Chhatral GIDC', 'Nandasan Industrial Estate', 'Visnagar GIDC', 'Unjha Spices & Processing GIDC'],
                'key_industries' => ['Oil & Gas Equipment', 'Pharma Formulations', 'Ceramic Processing', 'Food & Dairy Processing', 'Textile Machinery'],
                'pincode_zone' => '384002',
            ],
            'navsari' => [
                'name' => 'Navsari',
                'district' => 'Navsari',
                'region' => 'South Gujarat',
                'industrial_zones' => ['Bilimora GIDC', 'Chikhli Industrial Area', 'Gandevi GIDC', 'Navsari Industrial Estate'],
                'key_industries' => ['Textile Auxiliaries', 'Chemical Formulations', 'Sugar Processing & Distilleries', 'Diamond Processing', 'Metal Works'],
                'pincode_zone' => '396445',
            ],
            'halol' => [
                'name' => 'Halol',
                'district' => 'Panchmahal',
                'region' => 'East-Central Gujarat',
                'industrial_zones' => ['Halol GIDC Phase I-IV', 'Kalol GIDC', 'Panchmahal Industrial Cluster'],
                'key_industries' => ['Automotive & Auto Components', 'Pharmaceutical Plants', 'Heavy Machinery', 'Plastics & Rubber', 'Electrical Engineering'],
                'pincode_zone' => '389350',
            ],
            'mundra' => [
                'name' => 'Mundra',
                'district' => 'Kutch',
                'region' => 'Kutch Coastal',
                'industrial_zones' => ['Mundra APSEZ', 'Baroi Industrial Area', 'Mundra Port Logistics & Engineering Zone'],
                'key_industries' => ['Port Logistics & Storage', 'Thermal Power Generation', 'Edible Oil Refineries', 'Bulk Liquid Storage', 'Heavy Process Plants'],
                'pincode_zone' => '370421',
            ],
            'gandhidham' => [
                'name' => 'Gandhidham',
                'district' => 'Kutch',
                'region' => 'Kutch',
                'industrial_zones' => ['Kandla Special Economic Zone (KASEZ)', 'Anjar GIDC', 'Varsana Industrial Area', 'Mithi Rohar GIDC'],
                'key_industries' => ['Chemical Processing & Storage', 'Timber & Plywood', 'Steel & Pipe Manufacturing', 'Edible Oils', 'Logistics Infrastructure'],
                'pincode_zone' => '370201',
            ],
            'sanand' => [
                'name' => 'Sanand',
                'district' => 'Ahmedabad',
                'region' => 'Central Gujarat',
                'industrial_zones' => ['Sanand GIDC Phase I & II', 'Bol Industrial Estate', 'Khoraj Industrial Park', 'Charal GIDC'],
                'key_industries' => ['Automotive Manufacturing', 'Heavy Engineering & Fabrication', 'FMCG & Packaging', 'Precision Components', 'Electronic Systems'],
                'pincode_zone' => '382110',
            ],
            'surendranagar' => [
                'name' => 'Surendranagar',
                'district' => 'Surendranagar',
                'region' => 'Saurashtra Gateway',
                'industrial_zones' => ['Wadhwan GIDC', 'Thangadh Ceramic Cluster', 'Limbdi GIDC', 'Dhrangadhra Chemical Zone'],
                'key_industries' => ['Soda Ash & Heavy Chemicals', 'Sanitaryware & Ceramics', 'Cotton & Ginning Machinery', 'Salt Works', 'Foundry Works'],
                'pincode_zone' => '363001',
            ],
            'junagadh' => [
                'name' => 'Junagadh',
                'district' => 'Junagadh',
                'region' => 'Saurashtra',
                'industrial_zones' => ['Dolatpara GIDC', 'Shapur Industrial Area', 'Keshod GIDC', 'Vanthali GIDC'],
                'key_industries' => ['Agro-Processing & Oil Mills', 'Chemical Intermediates', 'Cement & Mineral Processing', 'Machinery Fabrication'],
                'pincode_zone' => '362001',
            ],
            'porbandar' => [
                'name' => 'Porbandar',
                'district' => 'Porbandar',
                'region' => 'Saurashtra Coastal',
                'industrial_zones' => ['Vanana GIDC', 'Ranavav Industrial Cluster', 'Porbandar Port Chemical Hub'],
                'key_industries' => ['Soda Ash & Inorganics', 'Cement Manufacturing', 'Marine & Fish Processing', 'Bauxite & Minerals', 'Chemical Storage'],
                'pincode_zone' => '360575',
            ],
            'himatnagar' => [
                'name' => 'Himatnagar',
                'district' => 'Sabarkantha',
                'region' => 'North Gujarat',
                'industrial_zones' => ['Motipura GIDC', 'Himatnagar Ceramic Hub', 'Idar GIDC', 'Prantij Industrial Area'],
                'key_industries' => ['Ceramic Wall & Floor Tiles', 'Chemical Products', 'Dairy & Food Processing', 'Agricultural Equipment', 'Plastic Pipes'],
                'pincode_zone' => '383001',
            ],
            'nadiad' => [
                'name' => 'Nadiad',
                'district' => 'Kheda',
                'region' => 'Central Gujarat',
                'industrial_zones' => ['Uttarsanda Industrial Estate', 'Nadiad GIDC', 'Matar Industrial Area', 'Mahudha GIDC'],
                'key_industries' => ['Chemical Processing', 'Pharmaceutical Intermediates', 'Food Processing & Tobacco', 'Engineering Works', 'Textile Printing'],
                'pincode_zone' => '387001',
            ],
            'godhra' => [
                'name' => 'Godhra',
                'district' => 'Panchmahal',
                'region' => 'East Gujarat',
                'industrial_zones' => ['Godhra GIDC', 'Lunawada Road Industrial Area', 'Derol GIDC'],
                'key_industries' => ['Chemical & Mineral Units', 'Agricultural Processing', 'Engineering Fabrication', 'Cement & Lime Processing'],
                'pincode_zone' => '389001',
            ],
            'palanpur' => [
                'name' => 'Palanpur',
                'district' => 'Banaskantha',
                'region' => 'North Gujarat',
                'industrial_zones' => ['Palanpur GIDC', 'Deesa GIDC Industrial Estate', 'Dhanera GIDC'],
                'key_industries' => ['Dairy & Agro Processing', 'Mineral Grinding & Chemical Additives', 'Diamond & Metal Works', 'Storage & Logistics'],
                'pincode_zone' => '385001',
            ],
            'patan' => [
                'name' => 'Patan',
                'district' => 'Patan',
                'region' => 'North Gujarat',
                'industrial_zones' => ['Patan GIDC', 'Siddhpur GIDC Industrial Area', 'Radhanpur GIDC'],
                'key_industries' => ['Chemical Intermediates', 'Isabgol & Agro Processing', 'Solar Power Infrastructure', 'Equipment Fabrication'],
                'pincode_zone' => '384265',
            ],
            'amreli' => [
                'name' => 'Amreli',
                'district' => 'Amreli',
                'region' => 'Saurashtra',
                'industrial_zones' => ['Amreli GIDC', 'Rajula Heavy Marine & Port Industrial Zone', 'Pipavav Port Zone', 'Bagasara GIDC'],
                'key_industries' => ['Port Logistics & Liquid Terminals', 'Chemical Handling', 'Agro-Oil Processing', 'Structural Fabrication', 'Cement Terminals'],
                'pincode_zone' => '365601',
            ],
            'veraval' => [
                'name' => 'Veraval',
                'district' => 'Gir Somnath',
                'region' => 'Saurashtra Coastal',
                'industrial_zones' => ['Veraval GIDC Rayon & Chemical Estate', 'Somnath Industrial Area', 'Kodinar GIDC'],
                'key_industries' => ['Rayon & Synthetic Fibers', 'Chemical Processing', 'Fish Processing & Cold Storage', 'Fertilizers', 'Bulk Liquid Tanks'],
                'pincode_zone' => '362265',
            ],
            'botad' => [
                'name' => 'Botad',
                'district' => 'Botad',
                'region' => 'Saurashtra',
                'industrial_zones' => ['Botad GIDC', 'Gadhada Industrial Area', 'Barwala Industrial Estate'],
                'key_industries' => ['Cotton Ginning & Spinning Machinery', 'Chemical Formulations', 'Diamond & Metal Polishing', 'Agro Equipment'],
                'pincode_zone' => '364710',
            ],
            'bhuj' => [
                'name' => 'Bhuj',
                'district' => 'Kutch',
                'region' => 'Kutch',
                'industrial_zones' => ['Madhapar GIDC', 'Mirzapar Industrial Area', 'Bhujodi Cluster', 'Nakhtrana Industrial Zone'],
                'key_industries' => ['Mineral Processing & Bentonite Chemicals', 'Structural Engineering', 'Ceramic Raw Materials', 'Renewable Energy'],
                'pincode_zone' => '370001',
            ],
            'kheda' => [
                'name' => 'Kheda',
                'district' => 'Kheda',
                'region' => 'Central Gujarat',
                'industrial_zones' => ['Kheda GIDC', 'Kathlal GIDC', 'Kapadvanj Industrial Area', 'Thasra GIDC'],
                'key_industries' => ['Glass & Ceramics', 'Specialty Chemical Blends', 'Agrochemicals & Fertilizers', 'Packaging Fabrication'],
                'pincode_zone' => '387411',
            ],
            'dahod' => [
                'name' => 'Dahod',
                'district' => 'Dahod',
                'region' => 'East Gujarat',
                'industrial_zones' => ['Dahod GIDC', 'Zalod GIDC', 'Limdi Industrial Area'],
                'key_industries' => ['Railway Locomotive & Heavy Engineering', 'Agro-Processing Equipment', 'Mineral Processing', 'Metal Works'],
                'pincode_zone' => '389151',
            ],
            'somnath' => [
                'name' => 'Somnath',
                'district' => 'Gir Somnath',
                'region' => 'Saurashtra',
                'industrial_zones' => ['Gir Somnath GIDC', 'Kodinar Sugar & Chemical Estate', 'Talala GIDC'],
                'key_industries' => ['Sugar Mills & Distilleries', 'Chemical Handling', 'Marine Processing', 'Fertilizers & Agro Chemicals'],
                'pincode_zone' => '362268',
            ],
            'vyara' => [
                'name' => 'Vyara',
                'district' => 'Tapi',
                'region' => 'South Gujarat',
                'industrial_zones' => ['Tapi GIDC Vyara', 'Songadh Industrial Complex', 'Valod GIDC'],
                'key_industries' => ['Paper Mills & Pulp Chemicals', 'Sugar & Ethanol Distilleries', 'Agrochemical Units', 'Engineering Fabricators'],
                'pincode_zone' => '394650',
            ],
            'modasa' => [
                'name' => 'Modasa',
                'district' => 'Aravalli',
                'region' => 'North-East Gujarat',
                'industrial_zones' => ['Aravalli Modasa GIDC', 'Malpur GIDC', 'Dhansura Industrial Area'],
                'key_industries' => ['Chemical Formulations', 'Ceramic Processing', 'Agricultural Machinery', 'Dairy & Food Processing'],
                'pincode_zone' => '383315',
            ],
            'chhatral' => [
                'name' => 'Chhatral',
                'district' => 'Gandhinagar',
                'region' => 'North-Central Gujarat',
                'industrial_zones' => ['Chhatral GIDC Phase I-IV', 'Nandasan Extension', 'Chhatral Heavy Machinery Corridor'],
                'key_industries' => ['Heavy Engineering & Process Equipment', 'Chemical Intermediates', 'Pharmaceutical Bulk Drugs', 'Plastic Extrusion'],
                'pincode_zone' => '382729',
            ],
            'kadi' => [
                'name' => 'Kadi',
                'district' => 'Mehsana',
                'region' => 'North Gujarat',
                'industrial_zones' => ['Kadi GIDC Industrial Estate', 'Borisana Industrial Zone', 'Kundal Industrial Area'],
                'key_industries' => ['Ceramic Tile Manufacturing', 'Cotton Ginning Equipment', 'Specialty Chemical Plants', 'Engineering Fabrication'],
                'pincode_zone' => '382715',
            ],
            'jhagadia' => [
                'name' => 'Jhagadia',
                'district' => 'Bharuch',
                'region' => 'South Gujarat',
                'industrial_zones' => ['Jhagadia Mega Industrial Estate', 'Jhagadia GIDC Multi-Product SEZ', 'Valia Industrial Corridor'],
                'key_industries' => ['Multinational Chemical Manufacturing', 'Glass & Specialty Coatings', 'Carbon Black & Pigments', 'Heavy Pharmaceuticals', 'Dyes & Intermediates'],
                'pincode_zone' => '393110',
            ],
            'panoli' => [
                'name' => 'Panoli',
                'district' => 'Bharuch',
                'region' => 'South Gujarat',
                'industrial_zones' => ['Panoli GIDC Chemical Zone', 'Panoli Mega Industrial Corridor'],
                'key_industries' => ['Active Pharmaceutical Ingredients (APIs)', 'Agrochemicals & Insecticides', 'Dyes & Intermediates', 'Organic Chemical Synthesis'],
                'pincode_zone' => '394116',
            ],
            'savli' => [
                'name' => 'Savli',
                'district' => 'Vadodara',
                'region' => 'Central Gujarat',
                'industrial_zones' => ['Savli GIDC Heavy Engineering Estate', 'Manjusar GIDC', 'Savli Electronics & Tech Zone'],
                'key_industries' => ['Heavy Engineering & Capital Goods', 'Power Equipment Fabrication', 'Specialty Chemicals & Polymers', 'Process Vessel Fabrication'],
                'pincode_zone' => '391775',
            ],
            'changodar' => [
                'name' => 'Changodar',
                'district' => 'Ahmedabad',
                'region' => 'Central Gujarat',
                'industrial_zones' => ['Changodar Industrial Estate', 'Moraiya GIDC', 'Sarkhej-Bawla Industrial Highway', 'Matoda GIDC'],
                'key_industries' => ['Pharma Formulations & Packaging', 'Precision Engineering', 'Chemical Blending', 'Heavy Machine Tools', 'Warehousing & Logistics'],
                'pincode_zone' => '382213',
            ],
            'naroda' => [
                'name' => 'Naroda',
                'district' => 'Ahmedabad',
                'region' => 'Central Gujarat',
                'industrial_zones' => ['Naroda GIDC Industrial Estate', 'Naroda Dye & Chemical Complex', 'Kathwada Extension'],
                'key_industries' => ['Dyes & Pigments Hub', 'Specialty Chemicals', 'Textile Auxiliaries', 'Engineering Fabrication', 'Bulk Drugs'],
                'pincode_zone' => '382330',
            ],
            'vatva' => [
                'name' => 'Vatva',
                'district' => 'Ahmedabad',
                'region' => 'Central Gujarat',
                'industrial_zones' => ['Vatva GIDC Phase I', 'Vatva GIDC Phase II', 'Vatva GIDC Phase III', 'Vatva GIDC Phase IV'],
                'key_industries' => ['Dyes & Intermediates', 'Organic Chemicals', 'Effluent & Wastewater Treatment Plants', 'Pharmaceutical Intermediates', 'Heavy Process Equipment'],
                'pincode_zone' => '382445',
            ],
            'hazira' => [
                'name' => 'Hazira',
                'district' => 'Surat',
                'region' => 'South Gujarat Coastal',
                'industrial_zones' => ['Hazira Heavy Manufacturing & Port Zone', 'Hazira Chemical & Gas Terminal Area'],
                'key_industries' => ['Petrochemical Refineries', 'LNG Terminals & Cryogenic Storage', 'Heavy Steel & Fabrication', 'Fertilizer Plants'],
                'pincode_zone' => '394270',
            ],
            'sachin' => [
                'name' => 'Sachin',
                'district' => 'Surat',
                'region' => 'South Gujarat',
                'industrial_zones' => ['Sachin GIDC Industrial Estate', 'Sachin SEZ Diamond & Engineering Zone'],
                'key_industries' => ['Textile Processing & Dyeing', 'Chemical Manufacturing', 'Pharma Formulations', 'Precision Engineering'],
                'pincode_zone' => '394230',
            ],
            'nandesari' => [
                'name' => 'Nandesari',
                'district' => 'Vadodara',
                'region' => 'Central Gujarat',
                'industrial_zones' => ['Nandesari GIDC Chemical Estate', 'Ranoli Extension Area'],
                'key_industries' => ['Organic Chemicals', 'Bulk Dyes & Pigments', 'Pharmaceutical Intermediates', 'ETP & Common Effluent Plants'],
                'pincode_zone' => '391340',
            ],
            'shapar' => [
                'name' => 'Shapar',
                'district' => 'Rajkot',
                'region' => 'Saurashtra',
                'industrial_zones' => ['Shapar-Veraval Industrial Area', 'Shapar GIDC Phase I & II'],
                'key_industries' => ['Auto Parts & Forging', 'Submersible Pumps & Motors', 'Industrial Valves & Tanks', 'Heavy Structural Fabrication'],
                'pincode_zone' => '360024',
            ],
            'metoda' => [
                'name' => 'Metoda',
                'district' => 'Rajkot',
                'region' => 'Saurashtra',
                'industrial_zones' => ['Lodhika GIDC Metoda', 'Metoda Engineering Corridor'],
                'key_industries' => ['Precision CNC Components', 'Chemical Processing Machinery', 'Packaging & Automation', 'Industrial Tanks & Agitators'],
                'pincode_zone' => '360021',
            ],
        ];
    }

    /**
     * Comprehensive List of All 26+ Vishwakarma Engineering Products with rich SEO metadata & specs
     */
    public static function getProducts(): array
    {
        return [
            // ==================== INDUSTRIAL VESSELS ====================
            'jacketed-vessel' => [
                'title' => 'Jacketed Vessel (MS / SS)',
                'short_title' => 'Jacketed Vessel',
                'category' => 'Industrial Vessels',
                'category_slug' => 'industrial-vessels',
                'image' => 'assets/images/vessal.jpg',
                'h1_prefix' => 'Jacketed Vessel (MS / SS) Manufacturer in',
                'description' => 'Vishwakarma Engineering manufactures premium industrial Jacketed Vessels in Mild Steel (MS) and Stainless Steel (SS304/SS316) designed for precise temperature control during industrial heating, cooling, mixing, and chemical reactions.',
                'capacity' => '50 Liters to 50,000 Liters',
                'material_grades' => 'SS 304, SS 316, SS 316L, Mild Steel (IS 2062 Grade B), Boiler Quality (SA 516 Gr. 70)',
                'design_standards' => 'ASME Section VIII Div 1, IS 2825, Good Engineering Practice (GEP)',
                'operating_pressure' => 'Full Vacuum to 25 Kg/cm² (Custom High Pressure)',
                'temperature_range' => '-20°C to +300°C with uniform jacket circulation',
                'jacket_types' => 'Dimple Jacket, Plain / Conventional Jacket, Half Pipe Limpet Coil',
                'features' => [
                    'Uniform Heat Transfer and Thermal Efficiency',
                    'SS304 / SS316 / MS Robust Construction',
                    'Heavy-Duty Agitator Integration Options',
                    'Customizable Nozzles, Sight Glass, & Manhole Access',
                    '100% Hydrostatic & Radiography Testing'
                ],
                'applications' => [
                    'Chemical Reaction & Synthesis Units',
                    'Pharmaceutical API & Formulation Plants',
                    'Dye, Pigment & Resin Manufacturing',
                    'Food, Dairy & Beverage Processing',
                    'Specialty Polymer & Agrochemical Plants'
                ],
                'faqs' => [
                    [
                        'q' => 'What jacket types are available for Jacketed Vessels?',
                        'a' => 'We design and fabricate Jacketed Vessels with Conventional Plain Jackets, Dimple Jackets, and Half-Pipe Limpet Coil Jackets depending on your thermal transfer requirements and working pressure.'
                    ],
                    [
                        'q' => 'Can Vishwakarma Engineering fabricate custom capacity Jacketed Vessels?',
                        'a' => 'Yes, we fabricate custom Jacketed Vessels ranging from 50 Liters up to 50,000+ Liters based on your process specifications, drawing requirements, and factory layout.'
                    ],
                    [
                        'q' => 'What quality tests are performed before dispatch?',
                        'a' => 'Each Jacketed Vessel undergoes 100% Hydrostatic pressure testing on both internal shell and jacket, Dye Penetrant Testing (DPT), Radiography Testing (RT on request), and wall thickness ultrasonic inspection.'
                    ],
                    [
                        'q' => 'Do you provide delivery and installation support across Gujarat?',
                        'a' => 'Yes, Vishwakarma Engineering supplies and coordinates turnkey delivery, testing documentation, and commissioning support to all GIDC estates and industrial zones across Gujarat.'
                    ]
                ]
            ],

            'pressure-vessel' => [
                'title' => 'Pressure Vessel (MS / SS)',
                'short_title' => 'Pressure Vessel',
                'category' => 'Industrial Vessels',
                'category_slug' => 'industrial-vessels',
                'image' => 'assets/images/pww.png',
                'h1_prefix' => 'Pressure Vessel (MS / SS) Manufacturer in',
                'description' => 'High-integrity industrial Pressure Vessels manufactured in Ahmedabad, Gujarat according to ASME Section VIII Div 1 and IS 2825 codes for storing and processing compressed gases and volatile liquids safely under high pressure.',
                'capacity' => '100 Liters to 100,000 Liters',
                'material_grades' => 'SS 304, SS 316, SS 316L, Carbon Steel SA 516 Gr. 60/70, IS 2062 Gr. B',
                'design_standards' => 'ASME Boiler and Pressure Vessel Code (BPVC) Sec VIII Div 1, IS 2825, PESO / CCOE Norms',
                'operating_pressure' => 'Up to 50 Bar (5000 kPa) or tailored to customer design',
                'temperature_range' => '-40°C to +350°C',
                'jacket_types' => 'Optional thermal insulation with SS / Aluminum cladding',
                'features' => [
                    'ASME Section VIII Div 1 Code Compliance',
                    'High Safety Margins with Precision Welding',
                    'Full Radiography & Ultrasonic Weld Inspection',
                    'Corrosion-Resistant Internal Linings Available',
                    'Custom Mounting (Vertical Skirt/Legs or Horizontal Saddles)'
                ],
                'applications' => [
                    'Chemical & Petrochemical Refineries',
                    'Compressed Air & Gas Receiving Systems',
                    'Pharmaceutical & Clean-in-Place (CIP) Systems',
                    'Boiler Feed & Thermal Power Systems',
                    'Water & Effluent Treatment Plants'
                ],
                'faqs' => [
                    [
                        'q' => 'Which design codes are followed for Pressure Vessels?',
                        'a' => 'Our pressure vessels are engineered according to ASME Section VIII Division 1, IS 2825, and relevant PESO/CCOE standards with third-party inspection certifications available.'
                    ],
                    [
                        'q' => 'What material grades do you use for high-pressure applications?',
                        'a' => 'We utilize Boiler Quality SA 516 Gr. 70, SA 516 Gr. 60, SS 316L, and SS 304L with tested test certificates (MTC) ensuring maximum tensile strength.'
                    ],
                    [
                        'q' => 'What testing documentation is provided with the vessel?',
                        'a' => 'We supply complete documentation including Hydro-test Certificate, Radiography Film & Reports, Ultrasonic Thickness Measurement, Material Test Certificates, and GA drawings.'
                    ]
                ]
            ],

            'mixing-vessel' => [
                'title' => 'Mixing Vessel',
                'short_title' => 'Mixing Vessel',
                'category' => 'Industrial Vessels',
                'category_slug' => 'industrial-vessels',
                'image' => 'assets/images/mw.png',
                'h1_prefix' => 'Mixing Vessel Manufacturer & Supplier in',
                'description' => 'Precision-engineered industrial Mixing Vessels with customized agitator assemblies, baffles, and speed drives for homogeneous blending of liquids, powders, and high-viscosity chemicals.',
                'capacity' => '50 Liters to 30,000 Liters',
                'material_grades' => 'SS 304, SS 316, SS 316L, Mild Steel with Food/Pharma Grade Mirror Finish',
                'design_standards' => 'cGMP Standards, IS 2825, DIN Standard Agitator Mounting',
                'operating_pressure' => 'Atmospheric to 6 Bar',
                'temperature_range' => 'Ambient up to 200°C',
                'jacket_types' => 'Heating / Cooling Jacketed or Non-jacketed options',
                'features' => [
                    'Heavy-Duty Top or Bottom Mounted Agitator Drive',
                    'Anchor, Turbine, Propeller, or Cowles Impeller Options',
                    'Hygienic Flush Bottom Discharge Valve',
                    'Internal Mirror Polish (Up to 240 Grit / Ra < 0.4 µm)',
                    'VFD Variable Speed Control Compatibility'
                ],
                'applications' => [
                    'Pharmaceutical Syrups, Suspensions & Ointments',
                    'Paints, Inks, Dyes & Pigment Dispersions',
                    'Chemical Blending & Emulsion Processing',
                    'Cosmetic Lotions, Shampoos & Creams',
                    'Food Flavors, Sauces & Dairy Preparations'
                ],
                'faqs' => [
                    [
                        'q' => 'What types of agitators are available for Mixing Vessels?',
                        'a' => 'We supply Anchor Agitators with Teflon Scrapers, High-Speed Dispersers (Cowles), Pitched Blade Turbines, Marine Propellers, and Counter-Rotating Dual Agitators.'
                    ],
                    [
                        'q' => 'Are your Mixing Vessels compliant with pharmaceutical cGMP standards?',
                        'a' => 'Yes, our pharmaceutical mixing vessels feature mirror-finished internal surfaces, crevice-free sanitary welding, sanitary tri-clamp fittings, and CIP/SIP spray balls.'
                    ]
                ]
            ],

            'movable-vessel' => [
                'title' => 'Movable Vessel',
                'short_title' => 'Movable Vessel',
                'category' => 'Industrial Vessels',
                'category_slug' => 'industrial-vessels',
                'image' => 'assets/images/movev.png',
                'h1_prefix' => 'Movable Vessel Manufacturer in',
                'description' => 'Industrial Movable Vessels engineered with heavy-duty polyurethane wheels, push-pull handles, and sanitary discharge systems for flexible batch transfers across processing halls.',
                'capacity' => '50 Liters to 3,000 Liters',
                'material_grades' => 'SS 304, SS 316, SS 316L with mirror or matte finish',
                'design_standards' => 'Sanitary cGMP & Industrial Heavy-Duty Ergonomic Design',
                'operating_pressure' => 'Atmospheric to 2 Bar',
                'temperature_range' => 'Ambient up to 120°C',
                'jacket_types' => 'Insulated / Double-Walled or Single-Walled',
                'features' => [
                    'Heavy-Duty Polyurethane / Castor Wheels with Wheel Brakes',
                    'Ergonomic Steering Handles & Forklift Pockets',
                    'Sanitary Sloped Bottom for 100% Complete Drainage',
                    'Hermetic Sealed Lids with Quick-Release Clamps'
                ],
                'applications' => [
                    'Pharmaceutical Cleanroom Batch Transfers',
                    'Chemical & Pigment Batch Mixing',
                    'Food & Beverage Liquid Ingredients Transfer',
                    'Cosmetic Batch Holding & Staging'
                ],
                'faqs' => [
                    [
                        'q' => 'What is the maximum capacity for a portable Movable Vessel?',
                        'a' => 'Our manual push movable vessels typically range from 50 to 1,500 Liters, while forklift/tug-assisted movable tanks can handle up to 3,000 Liters.'
                    ]
                ]
            ],

            'hydraulic-movable-vessel' => [
                'title' => 'Hydraulic Movable Vessel',
                'short_title' => 'Hydraulic Movable Vessel',
                'category' => 'Industrial Vessels',
                'category_slug' => 'industrial-vessels',
                'image' => 'assets/images/hmv.png',
                'h1_prefix' => 'Hydraulic Movable Vessel Manufacturer in',
                'description' => 'Advanced Hydraulic Movable Vessels equipped with hydraulic lifting, tilting, and discharge mechanisms for effortless unloading of heavy pastes, viscous polymers, and pharmaceutical formulations.',
                'capacity' => '100 Liters to 2,500 Liters',
                'material_grades' => 'SS 316 / SS 304 Product Contact, Heavy Mild Steel Hydraulic Cradle',
                'design_standards' => 'Industrial Safety & Ergonomic Material Handling Standards',
                'operating_pressure' => 'Atmospheric to Low Pressure',
                'temperature_range' => 'Ambient up to 150°C',
                'jacket_types' => 'Option for Heated / Jacketed Bowl',
                'features' => [
                    'Smooth Hydraulic Cylinder Lifting & 180° Tilting',
                    'Safety Interlocks with Emergency Lowering Valve',
                    'Sturdy Mobile Chassis with Swivel Castor Wheels',
                    'Operated via Hand Pump or Electro-Hydraulic Power Pack'
                ],
                'applications' => [
                    'Viscous Chemical Paste & Sealant Unloading',
                    'Pharmaceutical Tablet Granulation & Coating',
                    'Ink, Paint & Polymer Resin Discharge',
                    'Food Processing & Confectionery Creams'
                ],
                'faqs' => [
                    [
                        'q' => 'What is the advantage of a hydraulic movable vessel over standard portable tanks?',
                        'a' => 'Hydraulic movable vessels allow controlled tilting and elevation, enabling operators to discharge dense, viscous mixtures into hoppers or secondary tanks with zero manual strain.'
                    ]
                ]
            ],

            'limpet-coil-vessel' => [
                'title' => 'Limpet Coil Vessel',
                'short_title' => 'Limpet Coil Vessel',
                'category' => 'Industrial Vessels',
                'category_slug' => 'industrial-vessels',
                'image' => 'assets/images/coil.jpg',
                'h1_prefix' => 'Limpet Coil Vessel Manufacturer in',
                'description' => 'Heavy-duty Limpet Coil Vessels fabricated with half-pipe coils welded to the outer shell for maximum heating and cooling efficiency using thermal oil, steam, or chilled brine in severe chemical processes.',
                'capacity' => '500 Liters to 60,000 Liters',
                'material_grades' => 'SS 304, SS 316, SS 316L, Mild Steel IS 2062, SA 516 Gr. 70',
                'design_standards' => 'ASME Sec VIII Div 1, IS 2825, TEMA Guidelines',
                'operating_pressure' => 'Coil Pressure up to 30 Bar, Vessel Pressure Full Vacuum to 15 Bar',
                'temperature_range' => '-30°C to +350°C (Steam / Thermic Fluid)',
                'jacket_types' => 'Continuous Spiral Half-Pipe Limpet (Single or Multi-Zone Coil)',
                'features' => [
                    'High-Velocity Media Circulation Preventing Hotspots',
                    'Multi-Zone Coils for Variable Batch Volumes',
                    'High Structural Rigidity against Thermal Cycling',
                    '100% Radiography & Dye Penetrant Weld Inspection'
                ],
                'applications' => [
                    'Exothermic Chemical Reactions',
                    'Resin & Polymer Manufacturing Plants',
                    'Bulk Drug & Agro Intermediates',
                    'Solvent Recovery & Distillation Units'
                ],
                'faqs' => [
                    [
                        'q' => 'Why choose a Limpet Coil Vessel over a Conventional Jacketed Vessel?',
                        'a' => 'Limpet coils provide higher velocity flow of heating/cooling media, withstand significantly higher jacket pressures (up to 30 bar), and offer better thermal efficiency for large volume vessels.'
                    ]
                ]
            ],

            // ==================== CHEMICAL REACTORS ====================
            'ms-reactor' => [
                'title' => 'MS Reactor',
                'short_title' => 'Mild Steel Reactor',
                'category' => 'Chemical Reactors',
                'category_slug' => 'reactors',
                'image' => 'assets/images/msr.jpg',
                'h1_prefix' => 'MS Reactor Manufacturer & Supplier in',
                'description' => 'Robust Mild Steel (MS) Chemical Reactors manufactured for chemical synthesis, polymerization, esterification, and solvent processing with heavy-duty gearboxes and agitators.',
                'capacity' => '250 Liters to 50,000 Liters',
                'material_grades' => 'IS 2062 Grade B / SA 516 Grade 70 (Boiler Quality Carbon Steel)',
                'design_standards' => 'ASME Section VIII Div 1, IS 2825',
                'operating_pressure' => 'Full Vacuum to 25 Kg/cm²',
                'temperature_range' => '-10°C to +320°C',
                'jacket_types' => 'MS Limpet Coil or Conventional MS Jacket',
                'features' => [
                    'Heavy-Duty Mild Steel Shell with Ultrasonic Checked Plates',
                    'Heavy Duty Reduction Gearbox & Flameproof Motor',
                    'Mechanical Seal / Gland Packing Shaft Sealing',
                    'Internal Heating Coils & Baffles for Optimum Mixing'
                ],
                'applications' => [
                    'Synthetic Resin & Alkyd Manufacturing',
                    'Paints, Adhesives & Dyes Intermediates',
                    'Industrial Solvent Reaction Systems',
                    'Petrochemical Processing'
                ],
                'faqs' => [
                    [
                        'q' => 'What is the typical lifespan of an MS Reactor?',
                        'a' => 'Fabricated with premium IS 2062 Grade B or SA 516 Gr. 70 steel and adequate corrosion allowance, our MS Reactors deliver over 15–20 years of continuous industrial operation under standard operating conditions.'
                    ]
                ]
            ],

            'ss-reactor' => [
                'title' => 'SS Reactor (SS304 / SS316 / SS316L)',
                'short_title' => 'SS Reactor',
                'category' => 'Chemical Reactors',
                'category_slug' => 'reactors',
                'image' => 'assets/images/ssrr.jpg',
                'h1_prefix' => 'SS Reactor (SS304 / SS316) Manufacturer in',
                'description' => 'Corrosion-resistant Stainless Steel Chemical Reactors (SS304, SS316, SS316L) with high-efficiency agitation systems, sanitary mechanical seals, and ASME-compliant design for pharmaceutical and specialty chemical synthesis.',
                'capacity' => '100 Liters to 40,000 Liters',
                'material_grades' => 'SS 304, SS 316, SS 316L, SS 317L (Mill Tested Material)',
                'design_standards' => 'ASME Sec VIII Div 1, cGMP, DIN Standards',
                'operating_pressure' => 'Full Vacuum up to 35 Bar',
                'temperature_range' => '-50°C to +350°C',
                'jacket_types' => 'SS Limpet Coil or SS Dimple / Conventional Jacket',
                'features' => [
                    'Superior Corrosion Resistance against Acids & Solvents',
                    'Electropolished or Mirror-Finished Internal Shell',
                    'Cartridge Double Mechanical Seal with Thermosiphon System',
                    'Full cGMP and CIP/SIP Cleaning Compatibility'
                ],
                'applications' => [
                    'Pharmaceutical Active Pharmaceutical Ingredients (APIs)',
                    'Specialty Fine Chemicals & High-Purity Solvents',
                    'Agrochemical & Pesticide Synthesis',
                    'Fragrance, Flavors & Food Chemicals'
                ],
                'faqs' => [
                    [
                        'q' => 'Which grade of Stainless Steel is recommended: SS304 or SS316?',
                        'a' => 'SS316 contains molybdenum which offers superior resistance to chlorides, corrosive acids, and high-salinity chemicals, making it ideal for API pharma and specialty chemicals. SS304 is cost-effective for general organic solvents and food processing.'
                    ]
                ]
            ],

            'ms-ss-reactor' => [
                'title' => 'MS + SS Reactor (Cladded / Composite)',
                'short_title' => 'MS + SS Reactor',
                'category' => 'Chemical Reactors',
                'category_slug' => 'reactors',
                'image' => 'assets/images/mssss.png',
                'h1_prefix' => 'MS + SS Reactor Manufacturer in',
                'description' => 'Cost-effective MS + SS Composite Chemical Reactors featuring a high-tensile Mild Steel outer jacket/shell and Stainless Steel (SS304/SS316) product contact surfaces for optimal structural strength and chemical compatibility.',
                'capacity' => '500 Liters to 50,000 Liters',
                'material_grades' => 'SS 316 Contact Surface with Heavy MS IS 2062 Outer Jacket & Flanges',
                'design_standards' => 'ASME Sec VIII Div 1, IS 2825',
                'operating_pressure' => 'Full Vacuum up to 20 Bar',
                'temperature_range' => '-20°C to +300°C',
                'jacket_types' => 'MS Limpet Coil or Conventional MS Jacket',
                'features' => [
                    '30-40% Cost Savings compared to 100% Solid SS Vessels',
                    'Zero Contamination on Contact Surfaces',
                    'Heavy-Duty Torque Handling with MS Structural Flanges',
                    'Customizable Agitator & Drive Configurations'
                ],
                'applications' => [
                    'Bulk Chemical Processing & Dye Plants',
                    'Fertilizers & Acid Intermediate Handling',
                    'Polymer Resin & Adhesive Synthesis'
                ],
                'faqs' => [
                    [
                        'q' => 'How does an MS + SS Reactor compare in cost and performance?',
                        'a' => 'An MS+SS reactor gives 100% of the corrosion resistance where the chemical touches the vessel (SS316 inner shell) while keeping structural costs low with mild steel external components.'
                    ]
                ]
            ],

            'reactor-gearbox' => [
                'title' => 'Reactor with Gear Box & Agitation System',
                'short_title' => 'Reactor with Gearbox',
                'category' => 'Chemical Reactors',
                'category_slug' => 'reactors',
                'image' => 'assets/images/gss1.png',
                'h1_prefix' => 'Reactor with Gear Box Manufacturer in',
                'description' => 'Heavy-duty Chemical Reactors complete with integrated high-torque reduction gearboxes, motor drives, lanterns, and lantern bearings for handling highly viscous slurry reactions and heavy mass transfers.',
                'capacity' => '250 Liters to 50,000 Liters',
                'material_grades' => 'MS / SS 304 / SS 316 Contact Shell with Cast Iron / Alloy Steel Gear Units',
                'design_standards' => 'AGMA Gear Standards, ASME Sec VIII Div 1',
                'operating_pressure' => 'Full Vacuum to 30 Bar',
                'temperature_range' => '-20°C to +350°C',
                'jacket_types' => 'Limpet Coil or Conventional Dimple Jacket',
                'features' => [
                    'Helical / Worm / Planetary High Efficiency Reduction Gearbox',
                    'Flameproof (FLP) or Non-Flameproof Electric Motors',
                    'Heavy Lantern Support with High-Capacity Thrust Bearings',
                    'Vibration-Free Heavy Steel Mounting Base'
                ],
                'applications' => [
                    'High Viscosity Resin & Rubber Cement Processing',
                    'Slurry & Polymerization Reactors',
                    'Heavy Chemical Digestions & Extraction'
                ],
                'faqs' => [
                    [
                        'q' => 'What gearboxes do you integrate with your industrial reactors?',
                        'a' => 'We integrate top-tier Helical Gearboxes, Worm Reduction Gearboxes, and Planetary Drives from leading certified brands like Elecon, PBL, Premium, or Shanthi according to customer requirements.'
                    ]
                ]
            ],

            // ==================== STORAGE TANKS ====================
            'ms-storage-tank' => [
                'title' => 'MS Storage Tank',
                'short_title' => 'MS Storage Tank',
                'category' => 'Storage Tanks',
                'category_slug' => 'storage-tanks',
                'image' => 'assets/images/msst.jpg',
                'h1_prefix' => 'MS Storage Tank Manufacturer & Supplier in',
                'description' => 'Industrial Mild Steel Storage Tanks engineered for bulk storage of fuels, oils, solvents, raw water, and non-corrosive chemicals in horizontal and vertical configurations.',
                'capacity' => '500 Liters to 200,000+ Liters',
                'material_grades' => 'IS 2062 Grade A/B, ASTM A36 Carbon Steel with Anti-Corrosive Epoxy Coating',
                'design_standards' => 'API 650, IS 803, IS 2825',
                'operating_pressure' => 'Atmospheric to Low Pressure',
                'temperature_range' => 'Ambient up to 90°C',
                'jacket_types' => 'Single Wall or Heating Coil for Viscous Oils (Fuel Oil/Bitumen)',
                'features' => [
                    'Rugged IS 2062 Carbon Steel Heavy Wall Construction',
                    'Internal Anti-Corrosive Epoxy / FRP Lining Options',
                    'Level Indicator, Manhole, Breathing Valve & Ladder Platform',
                    'Underground or Aboveground Mounting Saddles'
                ],
                'applications' => [
                    'Industrial Fuel & Diesel (HSD/LDO) Storage',
                    'Furnace Oil & Lubricating Oil Storage',
                    'Raw Water & Process Water Holding',
                    'Non-Corrosive Industrial Solvent Reserves'
                ],
                'faqs' => [
                    [
                        'q' => 'Can MS Storage Tanks be installed underground?',
                        'a' => 'Yes, we fabricate underground MS Diesel and Oil storage tanks with heavy bitumen/epoxy external anti-rust coatings compliant with PESO regulations.'
                    ]
                ]
            ],

            'ss-storage-tank' => [
                'title' => 'SS Storage Tank (SS304 / SS316)',
                'short_title' => 'SS Storage Tank',
                'category' => 'Storage Tanks',
                'category_slug' => 'storage-tanks',
                'image' => 'assets/images/ssst.jpg',
                'h1_prefix' => 'SS Storage Tank Manufacturer & Supplier in',
                'description' => 'Sanitary and industrial Stainless Steel Storage Tanks (SS304 / SS316 / SS316L) designed for contamination-free storage of purified water (WFI/PW), active pharmaceutical ingredients, acids, and food products.',
                'capacity' => '200 Liters to 150,000 Liters',
                'material_grades' => 'SS 304, SS 316, SS 316L (Electro-polished / Mirror / Matte Finish)',
                'design_standards' => 'cGMP, ASME, IS 803, US FDA Guidelines for Sanitary Storage',
                'operating_pressure' => 'Atmospheric to 3 Bar',
                'temperature_range' => '-20°C to +150°C',
                'jacket_types' => 'Insulated with SS Cladding or Non-insulated',
                'features' => [
                    '100% Hygienic Crevice-Free Welding with Smooth Grinding',
                    'Sanitary Tri-Clover End Connections & Spray Balls for CIP',
                    'Conical / Dish Bottom for Complete Zero-Residue Drain',
                    'Vent Filters, Level Transmitters, and Sight Glass Integration'
                ],
                'applications' => [
                    'Pharma Purified Water (PW) & WFI Storage',
                    'Food, Dairy, Fruit Juice & Beverage Storage',
                    'Specialty Acids, Alcohols & High Purity Solvents',
                    'Cosmetic Raw Materials & Bulk Solutions'
                ],
                'faqs' => [
                    [
                        'q' => 'Do SS storage tanks come with CIP spray balls and vent filters?',
                        'a' => 'Yes, our sanitary SS storage tanks can be fully outfitted with 360° rotary CIP spray balls, 0.2 micron hydrophobic vent filters, level gauges, and hygienic sampling valves.'
                    ]
                ]
            ],

            'chemical-storage-tank' => [
                'title' => 'Chemical Storage Tank',
                'short_title' => 'Chemical Storage Tank',
                'category' => 'Storage Tanks',
                'category_slug' => 'storage-tanks',
                'image' => 'assets/images/cst.png',
                'h1_prefix' => 'Chemical Storage Tank Manufacturer in',
                'description' => 'Engineered Chemical Storage Tanks manufactured in specialized Stainless Steel, Mild Steel with corrosion-resistant internal coatings, or composite materials for safely storing aggressive acids, alkalis, and toxic industrial chemicals.',
                'capacity' => '500 Liters to 100,000 Liters',
                'material_grades' => 'SS 316L, SS 304, MS with Rubber / FRP / PTFE Lining, Hastelloy',
                'design_standards' => 'IS 2825, ASME Sec VIII, API 650',
                'operating_pressure' => 'Atmospheric to 6 Bar',
                'temperature_range' => '-10°C to +180°C',
                'jacket_types' => 'Optional Chilling / Heating Jacket',
                'features' => [
                    'Chemical Resistant Gaskets, Flanges & Nozzles',
                    'Secondary Containment & Dike Sizing Guidance',
                    'Heavy-Duty Acid / Alkali Resistant Internal Lining',
                    'Overfill Protection & Electronic Level Transmitters'
                ],
                'applications' => [
                    'Sulfuric Acid, Hydrochloric Acid & Nitric Acid Storage',
                    'Caustic Soda (NaOH) & Liquid Alkali Storage',
                    'Organic Solvents (Methanol, Toluene, Acetone, Hexane)',
                    'Fertilizer & Pesticide Intermediate Holding'
                ],
                'faqs' => [
                    [
                        'q' => 'Which material is best suited for storing concentrated acids?',
                        'a' => 'For concentrated acids, we recommend SS 316L or Heavy Mild Steel tanks lined with specialized Rubber Lining, FRP lining, or PTFE/PFA fluoropolymer coatings based on chemical concentration and temperature.'
                    ]
                ]
            ],

            'raw-material-tank' => [
                'title' => 'Raw Material Storage Tank',
                'short_title' => 'Raw Material Tank',
                'category' => 'Storage Tanks',
                'category_slug' => 'storage-tanks',
                'image' => 'assets/images/rms.png',
                'h1_prefix' => 'Raw Material Storage Tank Manufacturer in',
                'description' => 'Industrial Raw Material Storage Tanks designed for bulk holding and smooth metering of liquids, slurries, and dry powders into continuous production pipelines.',
                'capacity' => '500 Liters to 120,000 Liters',
                'material_grades' => 'MS IS 2062 / SS 304 / SS 316',
                'design_standards' => 'IS 803, Good Engineering Practices',
                'operating_pressure' => 'Atmospheric',
                'temperature_range' => 'Ambient up to 80°C',
                'jacket_types' => 'Single Wall or Thermal Jacket',
                'features' => [
                    'Optimized Flow Geometry with Anti-Bridging Cones',
                    'Integration with Load Cells for Accurate Weight Metering',
                    'Pneumatic Conveying & Pumping Inlets/Outlets'
                ],
                'applications' => [
                    'Chemical & Pigment Plant Feed Systems',
                    'Pharma Raw Solution Holding',
                    'Paint & Polymer Bulk Additive Storage'
                ],
                'faqs' => [
                    [
                        'q' => 'Can you integrate load cells with raw material storage tanks?',
                        'a' => 'Yes, our storage tanks can be designed with load cell mounting brackets and digital weigh indicators for precise automated dosing and batch logging.'
                    ]
                ]
            ],

            // ==================== COLUMNS & TOWERS ====================
            'ms-ketchi-column' => [
                'title' => 'MS Ketchi Column',
                'short_title' => 'MS Ketchi Column',
                'category' => 'Columns & Towers',
                'category_slug' => 'columns-towers',
                'image' => 'assets/images/mskc.png',
                'h1_prefix' => 'MS Ketchi Column Manufacturer & Supplier in',
                'description' => 'Precision-fabricated Mild Steel Ketchi Columns and distillation towers for chemical separation, fractional distillation, solvent recovery, and gas scrubbing operations.',
                'capacity' => 'Diameter: 300mm to 3000mm | Height: Up to 35 Meters',
                'material_grades' => 'Mild Steel IS 2062 Gr. B / Boiler Quality SA 516 Gr. 70',
                'design_standards' => 'ASME Sec VIII Div 1, IS 2825, TEMA Standards',
                'operating_pressure' => 'Full Vacuum to 10 Bar',
                'temperature_range' => 'Up to 300°C',
                'jacket_types' => 'Optional Bottom Reboiler & Condenser Interface',
                'features' => [
                    'Precision Column Verticality & Cylindricity',
                    'Structured / Random Packing Supports & Liquid Distributors',
                    'Manways, Sight Glasses, & Thermowell Nozzles at Multiple Stages',
                    'Heavy Base Ring & Anchor Chair Design for Wind Load Resistance'
                ],
                'applications' => [
                    'Solvent Recovery & Distillation Plants',
                    'Dye Intermediate Extraction & Fractionation',
                    'Chemical Plant Scrubbers & Absorption Towers'
                ],
                'faqs' => [
                    [
                        'q' => 'What internal packing options do you support for Ketchi Columns?',
                        'a' => 'We fabricate column internals to accommodate structured wire gauze packing, ceramic Raschig rings, SS Pall rings, and bubble cap or sieve trays.'
                    ]
                ]
            ],

            'ss-ketchi-column' => [
                'title' => 'SS Ketchi Column (SS304 / SS316)',
                'short_title' => 'SS Ketchi Column',
                'category' => 'Columns & Towers',
                'category_slug' => 'columns-towers',
                'image' => 'assets/images/sssks.png',
                'h1_prefix' => 'SS Ketchi Column (SS304 / SS316) Manufacturer in',
                'description' => 'High-purity Stainless Steel Ketchi Columns and Distillation Towers engineered for corrosive solvent separation, high-vacuum distillation, and pharmaceutical solvent recycling.',
                'capacity' => 'Diameter: 250mm to 2500mm | Height: Up to 30 Meters',
                'material_grades' => 'SS 304, SS 316, SS 316L with electropolished internals',
                'design_standards' => 'ASME Sec VIII Div 1, cGMP Guidelines',
                'operating_pressure' => 'Full High Vacuum (Down to 0.5 Torr) to 8 Bar',
                'temperature_range' => '-20°C to +250°C',
                'jacket_types' => 'Direct Reboiler Shell Interface',
                'features' => [
                    'Corrosion-Resistant SS316 Construction for High-Purity Solvents',
                    'Laser-Cut Liquid Distributors for Even Liquid Reflux',
                    'Modular Flanged Sections for Easy Site Erection & Packing Loading',
                    'Full Ultrasonic & Radiographic Weld Quality Testing'
                ],
                'applications' => [
                    'Pharmaceutical High-Purity Solvent Recovery (IPA, MDC, THF, Methanol)',
                    'Specialty Chemical Fractionation',
                    'Essential Oil & Flavor Distillation'
                ],
                'faqs' => [
                    [
                        'q' => 'Can SS Ketchi Columns be operated under high vacuum?',
                        'a' => 'Yes, our SS columns are designed with external stiffener vacuum rings to safely operate under full vacuum (0.1–1 Torr) without buckling.'
                    ]
                ]
            ],

            'column-structure' => [
                'title' => 'Column Structure & Access Platform',
                'short_title' => 'Column Structure & Platform',
                'category' => 'Columns & Towers',
                'category_slug' => 'columns-towers',
                'image' => 'assets/images/sfst.png',
                'h1_prefix' => 'Column Structure & Platform Manufacturer in',
                'description' => 'Heavy industrial column support frameworks, elevated maintenance platforms, staircases, and monkey ladders designed according to structural safety codes for industrial distillation towers.',
                'capacity' => 'Custom Height: Single Tier up to 8 Tier Towers (40+ Meters)',
                'material_grades' => 'Structural Steel IS 2062 (Angles, Channels, Beams & Chequered Plates)',
                'design_standards' => 'IS 800 (Structural Code), OSHA Industrial Safety Regulations',
                'operating_pressure' => 'Designed for Heavy Equipment, Wind & Seismic Loadings',
                'temperature_range' => 'Ambient Environmental',
                'jacket_types' => 'Hot-Dip Galvanized or 3-Coat Epoxy Polyurethane Finish',
                'features' => [
                    'Pre-Engineered Bolted & Welded Structure for Fast On-Site Erection',
                    'Anti-Skid Chequered / Grating Platform Flooring',
                    'Safety Handrails, Toe Guards, and Cage Ladders',
                    'Pipe Rack Supports & Condenser Mounting Cantilevers'
                ],
                'applications' => [
                    'Distillation Column Support Frameworks',
                    'Reactor Elevated Maintenance Decks',
                    'Chemical Plant Overhead Pipeline Galleries'
                ],
                'faqs' => [
                    [
                        'q' => 'Do you provide structural analysis for wind and earthquake loads?',
                        'a' => 'Yes, our engineering team designs column structures considering local Gujarat seismic zones and coastal wind speeds up to 180 km/h.'
                    ]
                ]
            ],

            // ==================== AGITATION & MIXING ====================
            'ms-stirrer' => [
                'title' => 'MS Stirrer & Agitator',
                'short_title' => 'MS Stirrer',
                'category' => 'Agitation & Mixing',
                'category_slug' => 'agitation-mixing',
                'image' => 'assets/images/mass.png',
                'h1_prefix' => 'MS Stirrer & Agitator Manufacturer in',
                'description' => 'Heavy-duty Mild Steel Stirrers and Agitator Shafts engineered for robust mixing, liquid blending, sludge suspension, and neutral chemical reactions.',
                'capacity' => 'Shaft Diameter: 35mm to 150mm | Length: Up to 8 Meters',
                'material_grades' => 'Mild Steel IS 2062, EN8 / EN9 High Tensile Carbon Steel',
                'design_standards' => 'DIN / ISO Agitator Design Standards',
                'operating_pressure' => 'Atmospheric to High Pressure Vessels',
                'temperature_range' => 'Ambient up to 250°C',
                'jacket_types' => 'Direct Drive / Belt Drive / Gearbox Connected',
                'features' => [
                    'Dynamically Balanced Impellers for Zero Shaft Runout',
                    'Rigid Shaft Coupling with Keyway & Split Sleeve Design',
                    'Anchor, Flat Blade Turbine, or Pitch Blade Impeller Blades',
                    'Anti-Vibration Steady Bottom Bearing Options'
                ],
                'applications' => [
                    'Effluent Treatment Equalization & Neutralization Tanks',
                    'Dye & Slurry Mixing Vessels',
                    'Resin & Adhesive Blending Tanks'
                ],
                'faqs' => [
                    [
                        'q' => 'How do you prevent shaft vibration on long stirrers?',
                        'a' => 'We perform finite element shaft deflection calculations, dynamic balancing, and install Teflon/PTFE bottom bush guides when shaft length exceeds standard spans.'
                    ]
                ]
            ],

            'ss-stirrer' => [
                'title' => 'SS Stirrer & Impeller (SS304 / SS316)',
                'short_title' => 'SS Stirrer',
                'category' => 'Agitation & Mixing',
                'category_slug' => 'agitation-mixing',
                'image' => 'assets/images/sss.png',
                'h1_prefix' => 'SS Stirrer & Impeller Manufacturer in',
                'description' => 'Sanitary and chemical-grade Stainless Steel Stirrers (SS304, SS316, SS316L) crafted for corrosive media, pharmaceutical blending, hygienic food processing, and fine chemicals.',
                'capacity' => 'Shaft Diameter: 25mm to 140mm | Custom Impeller Spans',
                'material_grades' => 'SS 304, SS 316, SS 316L, Hastelloy C276, Titanium',
                'design_standards' => 'cGMP, FDA Sanitary Guidelines',
                'operating_pressure' => 'Full Vacuum to 40 Bar',
                'temperature_range' => '-40°C to +300°C',
                'jacket_types' => 'Sanitary Flanged Mounting with Mechanical Seal',
                'features' => [
                    'Mirror Polished Impeller Blades for Easy Cleaning',
                    'Teflon Scrapers for Wall-Scraping Viscous Pastes',
                    'Single/Double Cartridge Mechanical Seal Interface',
                    'Hydrofoil, Marine Propeller, Cowles, and Anchor Configurations'
                ],
                'applications' => [
                    'Pharma API Crystallizers & Reactors',
                    'Food Flavors, Syrups & Dairy Agitation',
                    'Cosmetic Creams & Shampoo Emulsification',
                    'Acidic & Corrosive Chemical Processing'
                ],
                'faqs' => [
                    [
                        'q' => 'Can you manufacture custom impeller profiles like Cowles or Hydrofoil?',
                        'a' => 'Yes, we fabricate Hydrofoil, High-Shear Cowles Dispersers, Pitch Blade Turbines, Rushton Turbines, and Anchor Stirrers with replaceable Teflon scrapers.'
                    ]
                ]
            ],

            'gear-stirrer-assembly' => [
                'title' => 'Gear Structure & Stirrer Assembly',
                'short_title' => 'Gear Structure & Stirrer Assembly',
                'category' => 'Agitation & Mixing',
                'category_slug' => 'agitation-mixing',
                'image' => 'assets/images/gsa.png',
                'h1_prefix' => 'Gear Structure & Stirrer Assembly Manufacturer in',
                'description' => 'Complete Turnkey Agitator Drive Systems combining heavy structural gearbox mounting stools, lantern housings, thrust bearings, mechanical seals, and shaft impeller assemblies.',
                'capacity' => 'Motor Ratings: 1 HP to 75 HP | Speeds: 10 RPM to 3000 RPM',
                'material_grades' => 'Heavy Steel Fabrication Housing with SS304/SS316 Wetted Shaft',
                'design_standards' => 'AGMA & ISO Mechanical Transmission Standards',
                'operating_pressure' => 'Vessel Vacuum to 50 Bar',
                'temperature_range' => '-20°C to +350°C',
                'jacket_types' => 'Equipped with Cooling Jacket for Mechanical Seal',
                'features' => [
                    'Heavy Lantern Housing with High-Load Spherical Roller Thrust Bearings',
                    'Easy Mechanical Seal Replacement without Dismantling Gearbox',
                    'Flexible Coupling & Precision Machined Drive Shaft',
                    'Flameproof (FLP) Motor & Variable Frequency Drive (VFD) Options'
                ],
                'applications' => [
                    'Industrial Chemical Reactors & Autoclaves',
                    'High-Torque Viscous Mixing Tanks',
                    'Crystallizers & Fermenters'
                ],
                'faqs' => [
                    [
                        'q' => 'Can the mechanical seal be changed without removing the motor and gearbox?',
                        'a' => 'Yes, our lantern structure features a split-spacer coupling design that enables quick replacement of the mechanical seal without unseating the gearbox.'
                    ]
                ]
            ],

            'mixing-assemblies' => [
                'title' => 'Industrial Mixing Assembly',
                'short_title' => 'Mixing Assembly',
                'category' => 'Agitation & Mixing',
                'category_slug' => 'agitation-mixing',
                'image' => 'assets/images/msms.png',
                'h1_prefix' => 'Industrial Mixing Assembly Manufacturer in',
                'description' => 'Customized Industrial Mixing Assemblies designed for solid-liquid blending, liquid-liquid emulsification, gas induction, and high-shear dispersion.',
                'capacity' => 'Custom Engineered for Any Tank Size (50L to 100,000L)',
                'material_grades' => 'SS 304, SS 316, SS 316L, Mild Steel, Rubber Lined',
                'design_standards' => 'Computational Fluid Dynamics (CFD) Informed Flow Design',
                'operating_pressure' => 'Atmospheric to 25 Bar',
                'temperature_range' => '-20°C to +250°C',
                'jacket_types' => 'Tank Mount / Bridge Mount / Standalone Gantry',
                'features' => [
                    'Multi-Tier Impellers for Deep Tank Blending',
                    'Wall Baffles to Prevent Vortexing & Maximize Shear',
                    'Energy-Efficient Blade Geometry Reducing Motor Power Draw'
                ],
                'applications' => [
                    'Chemical Coagulation & Flocculation in ETP',
                    'Paint Tinting & Pigment Wetting',
                    'Bulk Food & Beverage Mixing'
                ],
                'faqs' => [
                    [
                        'q' => 'Do you supply bridge-mounted agitator assemblies for open tanks?',
                        'a' => 'Yes, we fabricate heavy steel mounting bridges spanning across civil or steel tanks complete with drive units, shafts, and impellers.'
                    ]
                ]
            ],

            // ==================== ETP & WASTEWATER TREATMENT ====================
            'complete-etp-plant' => [
                'title' => 'Complete ETP Plant Equipment',
                'short_title' => 'Complete ETP Plant',
                'category' => 'ETP – Effluent Treatment Plants',
                'category_slug' => 'etp-effluent-treatment',
                'image' => 'assets/images/etp.jpg',
                'h1_prefix' => 'Complete ETP Plant Equipment Manufacturer in',
                'description' => 'Turnkey Effluent Treatment Plant (ETP) Equipment designed for chemical, pharmaceutical, textile, and metal manufacturing industries to meet GPCB (Gujarat Pollution Control Board) and CPCB environmental discharge norms.',
                'capacity' => '5 KLD to 1000+ KLD (Kilo Liters per Day)',
                'material_grades' => 'MS with Heavy Epoxy / FRP / Coal Tar Lining & SS304/SS316 Wetted Parts',
                'design_standards' => 'CPCB / GPCB Environmental Guidelines, IS Standards for Wastewater Vessels',
                'operating_pressure' => 'Atmospheric to 5 Bar (Filter Vessels)',
                'temperature_range' => 'Ambient Process Temperature',
                'jacket_types' => 'Modular Skid Mounted or Turnkey Field Erected',
                'features' => [
                    'Full Treatment Cycle: Physico-Chemical, Biological, and Tertiary Filtration',
                    'Heavy Anti-Corrosion FRP/Epoxy Coatings Resisting High COD/BOD/TDS',
                    'Complete Equipment Set: Clarifiers, Flocculators, Aerators & Filter Presses',
                    'Energy-Efficient Pumps, Blowers & Automated PLC Control Options'
                ],
                'applications' => [
                    'Chemical & Dyes Manufacturing Units',
                    'Pharma API & Bulk Drug Intermediates',
                    'Textile Processing & Dyeing Mills',
                    'Electroplating & Surface Treatment Plants',
                    'Industrial Estates & CETP Pre-Treatment'
                ],
                'faqs' => [
                    [
                        'q' => 'Does this equipment help meet Gujarat Pollution Control Board (GPCB) norms?',
                        'a' => 'Yes, all our ETP equipment is engineered to achieve compliant reduction of BOD, COD, TSS, heavy metals, and color according to strict GPCB and CPCB discharge limits.'
                    ],
                    [
                        'q' => 'Do you provide skid-mounted compact ETP systems?',
                        'a' => 'Yes, we supply pre-fabricated modular skid-mounted ETP systems for quick plug-and-play installation with minimal civil construction.'
                    ]
                ]
            ],

            'primary-settling-tank' => [
                'title' => 'Primary Settling Tank (Clarifier)',
                'short_title' => 'Primary Settling Tank',
                'category' => 'ETP – Effluent Treatment Plants',
                'category_slug' => 'etp-effluent-treatment',
                'image' => 'assets/images/pst1.png',
                'h1_prefix' => 'Primary Settling Tank Manufacturer & Supplier in',
                'description' => 'Industrial Primary Settling Tanks (Clarifiers) engineered for rapid separation of heavy suspended solids, grit, and chemical precipitates from raw wastewater streams.',
                'capacity' => 'Diameter: 1.5M to 15M | Volume: 5,000L to 150,000L',
                'material_grades' => 'Mild Steel with Internal FRP / Polyurethane Lining or SS 304',
                'design_standards' => 'Wastewater Clarifier Sizing (Surface Overflow Rate & Retention Standards)',
                'operating_pressure' => 'Atmospheric Gravity Flow',
                'temperature_range' => 'Ambient',
                'jacket_types' => 'Conical Bottom Hopper with Central Scraper Bridge',
                'features' => [
                    'Central Sludge Scraper Mechanism with Motorized Turn-Drive',
                    'Peripheral V-Notch Overflow Weir for Uniform Supernatant Collection',
                    'High Solid Separation Efficiency Reducing Downstream Load'
                ],
                'applications' => [
                    'ETP Primary Physico-Chemical Treatment',
                    'Metal Hydroxide Precipitation in Plating Plants',
                    'Textile & Paper Mill Solids Clarification'
                ],
                'faqs' => [
                    [
                        'q' => 'What type of bottom scraper is used in your settling tanks?',
                        'a' => 'We provide slow-speed motorized central scraper bridges equipped with squeegee blades and rubber floor scrapers to continuously push settled sludge into the central drain pit.'
                    ]
                ]
            ],

            'secondary-treatment-tank' => [
                'title' => 'Secondary Treatment Tank (Aeration & Bio-Clarifier)',
                'short_title' => 'Secondary Treatment Tank',
                'category' => 'ETP – Effluent Treatment Plants',
                'category_slug' => 'etp-effluent-treatment',
                'image' => 'assets/images/etp22.png',
                'h1_prefix' => 'Secondary Treatment Tank Manufacturer in',
                'description' => 'Heavy-duty Secondary Biological Treatment Tanks, Aeration Basins, and Secondary Clarifiers designed for activated sludge processes and biological organic matter degradation.',
                'capacity' => '10,000 Liters to 250,000 Liters',
                'material_grades' => 'MS with Heavy Protective Lining / Stainless Steel Parts',
                'design_standards' => 'Biological Aeration Tank Retention Guidelines',
                'operating_pressure' => 'Atmospheric',
                'temperature_range' => 'Ambient',
                'jacket_types' => 'Equipped with Fine Bubble Diffuser Grid or Surface Aerator',
                'features' => [
                    'Uniform Dissolved Oxygen (DO) Distribution',
                    'Corrosion-Resistant Submerged Air Piping & Diffuser Grids',
                    'Sludge Recirculation & Return Activated Sludge (RAS) Line Interfaces'
                ],
                'applications' => [
                    'Activated Sludge Biological Treatment (ASP)',
                    'Moving Bed Biofilm Reactor (MBBR) Tanks',
                    'Sequential Batch Reactor (SBR) Steel Tanks'
                ],
                'faqs' => [
                    [
                        'q' => 'Can you fabricate steel aeration tanks for MBBR and SBR processes?',
                        'a' => 'Yes, we manufacture epoxy/FRP lined cylindrical steel tanks complete with media retention screens, bottom air diffuser grids, and decanter mechanisms.'
                    ]
                ]
            ],

            'holding-tank' => [
                'title' => 'ETP Holding & Equalization Tank',
                'short_title' => 'ETP Holding Tank',
                'category' => 'ETP – Effluent Treatment Plants',
                'category_slug' => 'etp-effluent-treatment',
                'image' => 'assets/images/ners.png',
                'h1_prefix' => 'ETP Holding Tank Manufacturer & Supplier in',
                'description' => 'Industrial Wastewater Holding and Equalization Tanks designed to buffer fluctuating flow rates, neutralize shock chemical loads, and stabilize pH before biological treatment.',
                'capacity' => '5,000 Liters to 200,000 Liters',
                'material_grades' => 'MS with 3-Layer Glass Flake Epoxy / FRP Lining or SS 304/SS 316',
                'design_standards' => 'IS 803 / IS 2825',
                'operating_pressure' => 'Atmospheric',
                'temperature_range' => 'Ambient up to 70°C',
                'jacket_types' => 'Single Shell Heavy Corrosion-Resistant Tank',
                'features' => [
                    'Resistant to Wide pH Swings (pH 1 to pH 14)',
                    'Agitator / Air Sparger Mounting Pads for Homogeneous Equalization',
                    'Level Sensor Mounts, Overflow Weirs & Emergency Bypass Outlets'
                ],
                'applications' => [
                    'Chemical & Pharma Industrial Effluent Buffering',
                    'Treated Water Holding & Recycle Systems',
                    'Sludge Storage & Thickening Holding'
                ],
                'faqs' => [
                    [
                        'q' => 'What lining is recommended for equalizing highly acidic or alkaline wastewater?',
                        'a' => 'We apply Heavy Glass Flake Vinyl Ester Epoxy or multi-layer Isophthalic FRP lining tested against severe acidic and basic effluent chemistry.'
                    ]
                ]
            ],

            'sand-filter' => [
                'title' => 'Pressure Sand Filter (PSF)',
                'short_title' => 'Sand Filter',
                'category' => 'ETP – Effluent Treatment Plants',
                'category_slug' => 'etp-effluent-treatment',
                'image' => 'assets/images/sf.png',
                'h1_prefix' => 'Pressure Sand Filter (PSF) Manufacturer in',
                'description' => 'Industrial Pressure Sand Filters (PSF) fabricated in Mild Steel and Stainless Steel utilizing graded quartz sand and gravel media to remove suspended turbidity down to 10–20 microns.',
                'capacity' => 'Flow Rates: 1,000 LPH to 100,000+ LPH',
                'material_grades' => 'MS (Epoxy/Rubber Lined) or SS 304 / SS 316',
                'design_standards' => 'IS 2825 / ASME Sec VIII Pressure Vessel Code',
                'operating_pressure' => '2.5 Bar to 6 Bar Working Pressure',
                'temperature_range' => 'Ambient up to 60°C',
                'jacket_types' => 'Vertical Dish-Ended Pressure Vessel',
                'features' => [
                    'Graded Quartz Sand, Gravel, and Anthracite Multi-Layer Media',
                    'Top & Bottom Strainer Hub & Lateral Distribution System',
                    'Frontal Multiport Valve or 5-Valve Butterfly Manifold for Easy Backwash',
                    'Sight Glass & Pressure Differential Gauges'
                ],
                'applications' => [
                    'ETP & STP Tertiary Water Polishing',
                    'Raw Water Filtration for Industrial Boilers & Cooling Towers',
                    'Pre-Treatment for Reverse Osmosis (RO) Plants'
                ],
                'faqs' => [
                    [
                        'q' => 'How frequently does a Pressure Sand Filter require backwashing?',
                        'a' => 'Backwashing is typically performed once daily or when the differential pressure across the filter bed exceeds 0.5–0.8 bar, taking only 10–15 minutes.'
                    ]
                ]
            ],

            'carbon-filter' => [
                'title' => 'Activated Carbon Filter (ACF)',
                'short_title' => 'Carbon Filter',
                'category' => 'ETP – Effluent Treatment Plants',
                'category_slug' => 'etp-effluent-treatment',
                'image' => 'assets/images/sdf.png',
                'h1_prefix' => 'Activated Carbon Filter (ACF) Manufacturer in',
                'description' => 'Heavy-duty Activated Carbon Filters (ACF) designed to adsorb residual color, toxic organic compounds, odor, chlorine, and trace solvents from industrial effluent and process water.',
                'capacity' => 'Flow Rates: 1,000 LPH to 100,000+ LPH',
                'material_grades' => 'MS (Rubber/Epoxy Lined) or SS 304 / SS 316',
                'design_standards' => 'IS 2825 / ASME Code Construction',
                'operating_pressure' => '2.5 Bar to 6 Bar Working Pressure',
                'temperature_range' => 'Ambient up to 60°C',
                'jacket_types' => 'Vertical Pressure Vessel with Bottom Strainer Hub',
                'features' => [
                    'High Iodine-Value Coconut Shell Activated Carbon Media (900–1100 IV)',
                    'Complete Color, Smell & Trace COD Removal',
                    'Rugged Corrosion-Resistant Internal Rubber / FRP Lining',
                    'Easy Media Filling Port & Low-Point Discharge Manhole'
                ],
                'applications' => [
                    'Textile & Dye Effluent Color Decolorization',
                    'Pharma Wastewater Tertiary Polishing',
                    'De-chlorination for RO Membrane Protection'
                ],
                'faqs' => [
                    [
                        'q' => 'What grade of activated carbon is used in your ACF vessels?',
                        'a' => 'We charge our filters with high-adsorption Virgin Coconut Shell Activated Carbon with Iodine Value ranging from 900 to 1100 mg/g for maximum organic pollutant removal.'
                    ]
                ]
            ],

            // ==================== FABRICATION & STRUCTURAL ====================
            'pipeline-work' => [
                'title' => 'MS / SS Industrial Pipeline Fabrication & Erection',
                'short_title' => 'MS / SS Pipeline Work',
                'category' => 'Fabrication & Structural Work',
                'category_slug' => 'fabrication-structural',
                'image' => 'assets/images/pwss.png',
                'h1_prefix' => 'MS / SS Industrial Pipeline Fabrication in',
                'description' => 'Turnkey MS and SS process piping fabrication, welding, testing, and site erection for high-pressure steam lines, chemical utility lines, solvent networks, and water loops.',
                'capacity' => 'Pipe Diameters: 0.5 Inch (15NB) to 48 Inch (1200NB) | Schedule 10 to Schedule 160',
                'material_grades' => 'SS 304/304L, SS 316/316L, Seamless Carbon Steel ASTM A106 Gr. B, MS IS 1239 / IS 3589',
                'design_standards' => 'ASME B31.3 (Process Piping Code), ASME B31.1 (Power Piping)',
                'operating_pressure' => 'Vacuum to 100 Bar',
                'temperature_range' => '-40°C to +400°C (Steam & Thermal Fluid)',
                'jacket_types' => 'Jacketing / Insulation with Aluminum or SS 304 Cladding',
                'features' => [
                    'TIG (GTAW) & Arc (SMAW) Qualified IBR / Non-IBR Welders',
                    '100% Radiography, DPT & Hydrostatic Pressure Testing of Welded Spools',
                    'Complete Support Engineering (Spring Hangers, Pipe Guides, U-Bolts)',
                    'Custom Valve Manifolds & Instrument Tap Connections'
                ],
                'applications' => [
                    'Chemical & Pharma Solvent Header Networks',
                    'High Pressure Steam & Condensate Distribution',
                    'Compressed Air & Chilled Water Utility Lines',
                    'ETP Wastewater Piping & Effluent Transfer'
                ],
                'faqs' => [
                    [
                        'q' => 'Do you provide on-site piping installation and welding across Gujarat factories?',
                        'a' => 'Yes, our certified piping teams handle complete on-site isometric routing, pre-fabrication, spool fit-up, TIG welding, and hydro-testing on your plant site.'
                    ]
                ]
            ],

            'structural-fabrication' => [
                'title' => 'Heavy Industrial Structural Fabrication',
                'short_title' => 'Structural Fabrication',
                'category' => 'Fabrication & Structural Work',
                'category_slug' => 'fabrication-structural',
                'image' => 'assets/images/sff.jpg',
                'h1_prefix' => 'Industrial Structural Fabrication Manufacturer in',
                'description' => 'Heavy industrial steel fabrication services including plant building frames, heavy equipment support structures, pipe bridges, reactor staging, and pre-engineered industrial frameworks.',
                'capacity' => 'Single Units from 500 Kg up to 250+ Metric Tons per Project',
                'material_grades' => 'IS 2062 Grade E250 / E350 Structural Steel Sections (Beams, Columns, Plates)',
                'design_standards' => 'IS 800:2007 (General Construction in Steel), AWS D1.1 Welding Code',
                'operating_pressure' => 'Engineered for Heavy Dead Loads, Dynamic Equipment Vibration & Seismic Loads',
                'temperature_range' => 'Environmental',
                'jacket_types' => 'Sandblasted Sa 2.5 with Epoxy Zinc Phosphate & PU Topcoat or Hot Dip Galvanizing',
                'features' => [
                    'CNC Profile Cutting, Heavy Bending & Submerged Arc Welding',
                    'Trial Assembly in Factory before Dispatch for 100% Fitment Guarantee',
                    'Heavy-Duty Anchor Bolts & Base Plate Assemblies Included'
                ],
                'applications' => [
                    'Chemical Plant Reactor Mezzanine Floors',
                    'Storage Tank Terminal Support Structures',
                    'Industrial Boiler House & Turbine Frameworks'
                ],
                'faqs' => [
                    [
                        'q' => 'What surface protection treatments do you apply to structural steel?',
                        'a' => 'We perform grit blasting to Sa 2.5 standard followed by two coats of high-build Epoxy Zinc Phosphate Primer and two finish coats of Aliphatic Polyurethane (PU) paint or hot-dip galvanizing.'
                    ]
                ]
            ],

            'platform-support' => [
                'title' => 'Platform & Equipment Support Structure',
                'short_title' => 'Platform & Support Structure',
                'category' => 'Fabrication & Structural Work',
                'category_slug' => 'fabrication-structural',
                'image' => 'assets/images/sff.jpg',
                'h1_prefix' => 'Platform & Support Structure Manufacturer in',
                'description' => 'Custom industrial platforms, operating decks, catwalks, equipment support rings, and staircase assemblies designed for operator safety and process accessibility.',
                'capacity' => 'Custom Sized to Fit Any Vessel or Factory Geometry',
                'material_grades' => 'IS 2062 Mild Steel / SS 304 / Galvanized Steel Grating',
                'design_standards' => 'IS 800, OSHA Safety Walkway Standards',
                'operating_pressure' => 'Uniform Floor Loading: 250 kg/m² to 1000 kg/m²',
                'temperature_range' => 'Ambient',
                'jacket_types' => 'Bolt-Together Modular Assembly for Easy Transport',
                'features' => [
                    'Anti-Slip Electro-Forged Steel Gratings or Chequered Plates',
                    'Standard Handrail Heights with Safety Kick Plates / Toe Guards',
                    'Modular Bolt-Together Design for Hassle-Free Erection inside Existing Plants'
                ],
                'applications' => [
                    'Reactor & Vessel Top Operating Catwalks',
                    'Storage Tank Roof Inspection Walkways',
                    'Overhead Valve Access Platforms'
                ],
                'faqs' => [
                    [
                        'q' => 'Can these platforms be installed in operational chemical factories without hot work?',
                        'a' => 'Yes, our modular bolt-together platform designs are 100% pre-fabricated and pre-drilled at our factory so only bolting assembly is needed on your site with zero hot welding work.'
                    ]
                ]
            ],

            'gear-structure-fab' => [
                'title' => 'Gear Structure Fabrication & Stool Housing',
                'short_title' => 'Gear Structure Fabrication',
                'category' => 'Fabrication & Structural Work',
                'category_slug' => 'fabrication-structural',
                'image' => 'assets/images/gss.png',
                'h1_prefix' => 'Gear Structure Fabrication Manufacturer in',
                'description' => 'Heavy-duty machined Gear Structure Stools, motor base beds, and agitator mounting frames fabricated with precision alignment to prevent vibration and gear tooth damage in heavy mixing units.',
                'capacity' => 'For Motors & Drives from 1 HP up to 100 HP',
                'material_grades' => 'Heavy Carbon Steel IS 2062 with Precision CNC Machined Flange Faces',
                'design_standards' => 'Machinery Baseplate Alignment Standards, ISO Vibration Limits',
                'operating_pressure' => 'High Torque Dynamic Loads',
                'temperature_range' => 'Ambient to +100°C',
                'jacket_types' => 'Rigid Gusseted Steel Structure',
                'features' => [
                    'Precision CNC Boring for Shaft Lantern Bearing Alignment (< 0.05 mm Runout)',
                    'Heavy-Duty Gussets Absorbing Torsional and Bending Moments',
                    'Stress Relieved Welded Construction for Dimensional Stability'
                ],
                'applications' => [
                    'Chemical Reactor Agitator Gearbox Mounts',
                    'Slurry Tank Drive Mountings',
                    'Heavy Ball Mill & Extruder Bases'
                ],
                'faqs' => [
                    [
                        'q' => 'Why is precision machining critical for gear structures?',
                        'a' => 'Accurate CNC facing and boring of the gear stool ensures perfect coaxial alignment between the reduction gearbox, mechanical seal, and agitator shaft, extending seal and gear life exponentially.'
                    ]
                ]
            ],

            // ==================== SPECIALIZED ASSEMBLIES ====================
            'gear-assembly' => [
                'title' => 'Precision Gear Assembly & Transmission Systems',
                'short_title' => 'Gear Assembly',
                'category' => 'Specialized Assemblies & Equipment',
                'category_slug' => 'assemblies-special',
                'image' => 'assets/images/ga.png',
                'h1_prefix' => 'Precision Gear Assembly Manufacturer in',
                'description' => 'High-torque industrial gear assemblies, reduction units, bevel and spur gear sets, and heavy power transmission couplings engineered for reliable performance under heavy continuous industrial duty.',
                'capacity' => 'Torque Ratings up to 25,000 Nm | Reduction Ratios 5:1 to 100:1',
                'material_grades' => 'Case Hardened Alloy Steel (20MnCr5, EN353, EN24, SAE 8620)',
                'design_standards' => 'AGMA & DIN Precision Gear Norms',
                'operating_pressure' => 'High Dynamic Load Transmission',
                'temperature_range' => '-10°C to +120°C (Oil Lubricated)',
                'jacket_types' => 'Heavy Cast Iron or Steel Fabricated Gearbox Casing',
                'features' => [
                    'Case Hardened & Precision Ground Gear Teeth for Quiet Operation',
                    'Heavy-Duty Taper Roller Bearings with Long L10 Bearing Life',
                    'Oil Bath Lubrication with Magnetic Drain Plugs and Oil Sight Glasses'
                ],
                'applications' => [
                    'Reactor Agitator Speed Reducers',
                    'Rotary Drum & Kiln Drive Assemblies',
                    'Heavy Screw Conveyors & Material Handling Systems'
                ],
                'faqs' => [
                    [
                        'q' => 'Can you manufacture replacement gear sets for existing industrial gearboxes?',
                        'a' => 'Yes, we reverse engineer and manufacture custom gears, pinions, and shafts matching your exact tooth profile, module, and hardness specifications.'
                    ]
                ]
            ],

            'structural-assembly' => [
                'title' => 'Modular Structural Assembly & Plant Skids',
                'short_title' => 'Structural Assembly',
                'category' => 'Specialized Assemblies & Equipment',
                'category_slug' => 'assemblies-special',
                'image' => 'assets/images/sa.png',
                'h1_prefix' => 'Modular Structural Assembly Manufacturer in',
                'description' => 'Fully integrated process equipment skids, skid-mounted pilot plants, pumping stations, and modular equipment assemblies tested and pre-wired for rapid commissioning.',
                'capacity' => 'Skid Dimensions: Up to 14M Length × 4M Width × 4.5M Height',
                'material_grades' => 'Structural Steel IS 2062 with SS 304 / SS 316 Equipment Wetted Parts',
                'design_standards' => 'Modular Plant Engineering & Transportation Standards',
                'operating_pressure' => 'System Specific',
                'temperature_range' => 'System Specific',
                'jacket_types' => 'Rigid Structural Skid Frame with Lifting Lugs',
                'features' => [
                    '100% Pre-Assembled with Interconnecting Piping, Valves & Instruments',
                    'Factory Tested before Dispatch Minimizing On-Site Downtime by 70%',
                    'Certified Lifting Lugs & Transport Lashing Points for Safe Transit'
                ],
                'applications' => [
                    'Chemical Dosing & Metering Skids',
                    'Skid-Mounted Pilot Reaction Plants',
                    'ETP Filtration & RO Skid Assemblies'
                ],
                'faqs' => [
                    [
                        'q' => 'What is the primary benefit of a modular skid assembly?',
                        'a' => 'Skid assemblies are built, piped, wired, and tested in our controlled factory environment, reducing on-site installation time by up to 70% with guaranteed plug-and-play operation.'
                    ]
                ]
            ],

            'customized-equipment' => [
                'title' => 'Customized Industrial Process Equipment',
                'short_title' => 'Customized Industrial Equipment',
                'category' => 'Specialized Assemblies & Equipment',
                'category_slug' => 'assemblies-special',
                'image' => 'assets/images/etp.jpg',
                'h1_prefix' => 'Customized Industrial Equipment Manufacturer in',
                'description' => 'Bespoke industrial process equipment, custom autoclaves, specialized scrubbers, flash tanks, and proprietary process vessels engineered strictly to client drawings and chemical parameters.',
                'capacity' => 'Engineered to Client Specific Technical Specifications',
                'material_grades' => 'SS 304, SS 316, SS 316L, Mild Steel, Hastelloy, Inconel, Titanium Linings',
                'design_standards' => 'ASME Section VIII Div 1, IS 2825, TEMA, Client Engineering Standards',
                'operating_pressure' => 'High Vacuum to Ultra High Pressure (100+ Bar)',
                'temperature_range' => '-50°C to +450°C',
                'jacket_types' => 'Custom Thermal Transfer Systems',
                'features' => [
                    'Custom Thermal & Mechanical Finite Element Analysis (FEA)',
                    'Specialty Alloy Fabrication with Strict Welding Metallurgy Control',
                    'Comprehensive Non-Destructive Testing (NDT) & Documentation Package'
                ],
                'applications' => [
                    'Unique Chemical Synthesis & Reaction Systems',
                    'High-Temperature / High-Pressure Industrial Autoclaves',
                    'Severe Service Acid Scrubbing & Recovery Towers'
                ],
                'faqs' => [
                    [
                        'q' => 'Can Vishwakarma Engineering fabricate from our proprietary process engineering drawings?',
                        'a' => 'Yes, our engineering design team reviews your process flow diagrams (PFDs), P&IDs, and mechanical data sheets to fabricate customized equipment that fulfills all your exact operational requirements under full NDA confidentiality.'
                    ]
                ]
            ]
        ];
    }

    /**
     * Get specific city metadata
     */
    public static function getCity(string $slug): ?array
    {
        $cities = self::getCities();
        $slug = strtolower(trim($slug));
        return $cities[$slug] ?? null;
    }

    /**
     * Get specific product metadata
     */
    /**
     * Get specific product metadata with alias fallback
     */
    public static function getProduct(string $slug): ?array
    {
        $products = self::getProducts();
        $slug = strtolower(trim($slug));

        $aliases = [
            'reactor-with-gear-box' => 'reactor-gearbox',
            'raw-material-storage-tank' => 'raw-material-tank',
            'column-structure-platform' => 'column-structure',
            'gear-structure-stirrer-assembly' => 'gear-stirrer-assembly',
            'mixing-assembly' => 'mixing-assemblies',
            'ms-ss-pipeline-work' => 'pipeline-work',
            'platform-support-structure' => 'platform-support',
            'gear-structure-fabrication' => 'gear-structure-fab',
            'customized-industrial-equipment' => 'customized-equipment',
        ];

        if (isset($aliases[$slug])) {
            $slug = $aliases[$slug];
        }

        return $products[$slug] ?? null;
    }

    /**
     * Get nearby/related industrial cities in Gujarat for cross-linking
     */
    public static function getNearbyCities(string $currentCitySlug, int $limit = 6): array
    {
        $cities = self::getCities();
        unset($cities[$currentCitySlug]);
        return array_slice($cities, 0, $limit, true);
    }

    /**
     * Get related products for cross-linking
     */
    public static function getRelatedProducts(string $currentProductSlug, int $limit = 6): array
    {
        $products = self::getProducts();
        unset($products[$currentProductSlug]);
        return array_slice($products, 0, $limit, true);
    }
}

