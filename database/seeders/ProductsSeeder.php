<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'product_code' => 'SMRT-SP-001',
                'name' => 'Samsung Galaxy S23 Ultra',
                'variants' => '256GB',
                'category' => 'Smartphone',
                'supplier' => 'Samsung Electronics',
                'price' => 18000000,
                'stock' => 25,
            ],
            [
                'product_code' => 'SMRT-SP-002',
                'name' => 'Samsung Galaxy S23 Ultra',
                'variants' => '512GB',
                'category' => 'Smartphone',
                'supplier' => 'Samsung Electronics',
                'price' => 20000000,
                'stock' => 25,
            ],
            [
                'product_code' => 'IPHN-PM-003',
                'name' => 'iPhone 15 Pro Max',
                'variants' => '128GB',
                'category' => 'Smartphone',
                'supplier' => 'Apple Inc.',
                'price' => 25000000,
                'stock' => 10,
            ],
            [
                'product_code' => 'IPHN-PM-004',
                'name' => 'iPhone 15 Pro Max',
                'variants' => '256GB',
                'category' => 'Smartphone',
                'supplier' => 'Apple Inc.',
                'price' => 27000000,
                'stock' => 10,
            ],
            [
                'product_code' => 'IPHN-PM-005',
                'name' => 'iPhone 15 Pro Max',
                'variants' => '512GB',
                'category' => 'Smartphone',
                'supplier' => 'Apple Inc.',
                'price' => 30000000,
                'stock' => 10,
            ],
            [
                'product_code' => 'MBPR-LP-006',
                'name' => 'MacBook Pro M2',
                'variants' => '8GB RAM',
                'category' => 'Laptop',
                'supplier' => 'Apple Inc.',
                'price' => 25000000,
                'stock' => 15,
            ],
            [
                'product_code' => 'MBPR-LP-007',
                'name' => 'MacBook Pro M2',
                'variants' => '16GB RAM',
                'category' => 'Laptop',
                'supplier' => 'Apple Inc.',
                'price' => 30000000,
                'stock' => 10,
            ],
            [
                'product_code' => 'SWCH-WT-008',
                'name' => 'Samsung Galaxy Watch 6',
                'variants' => '40mm',
                'category' => 'Smartwatch',
                'supplier' => 'Samsung Electronics',
                'price' => 4500000,
                'stock' => 30,
            ],
            [
                'product_code' => 'SWCH-WT-009',
                'name' => 'Samsung Galaxy Watch 6',
                'variants' => '44mm',
                'category' => 'Smartwatch',
                'supplier' => 'Samsung Electronics',
                'price' => 5000000,
                'stock' => 30,
            ],
            [
                'product_code' => 'ASRG-LP-010',
                'name' => 'Laptop ASUS ROG Strix',
                'variants' => 'Core i7',
                'category' => 'Laptop',
                'supplier' => 'ASUS',
                'price' => 25000000,
                'stock' => 10,
            ],
            [
                'product_code' => 'ASRG-LP-011',
                'name' => 'Laptop ASUS ROG Strix',
                'variants' => 'Core i9',
                'category' => 'Laptop',
                'supplier' => 'ASUS',
                'price' => 30000000,
                'stock' => 10,
            ],
            [
                'product_code' => 'IPAD-TB-012',
                'name' => 'iPad Air',
                'variants' => 'WiFi',
                'category' => 'Tablet',
                'supplier' => 'Apple Inc.',
                'price' => 11000000,
                'stock' => 20,
            ],
            [
                'product_code' => 'IPAD-TB-013',
                'name' => 'iPad Air',
                'variants' => 'WiFi + Cellular',
                'category' => 'Tablet',
                'supplier' => 'Apple Inc.',
                'price' => 12000000,
                'stock' => 20,
            ],
            [
                'product_code' => 'LOGI-MS-014',
                'name' => 'Logitech MX Master 3 Mouse',
                'variants' => 'Black',
                'category' => 'Accessories',
                'supplier' => 'Logitech',
                'price' => 1500000,
                'stock' => 50,
            ],
            [
                'product_code' => 'LOGI-MS-015',
                'name' => 'Logitech MX Master 3 Mouse',
                'variants' => 'Graphite',
                'category' => 'Accessories',
                'supplier' => 'Logitech',
                'price' => 1500000,
                'stock' => 50,
            ],
            [
                'product_code' => 'LG-MN-016',
                'name' => 'Gaming Monitor LG UltraGear',
                'variants' => '2K',
                'category' => 'Monitor',
                'supplier' => 'LG Electronics',
                'price' => 7000000,
                'stock' => 20,
            ],
            [
                'product_code' => 'LG-MN-017',
                'name' => 'Gaming Monitor LG UltraGear',
                'variants' => '4K',
                'category' => 'Monitor',
                'supplier' => 'LG Electronics',
                'price' => 9000000,
                'stock' => 15,
            ],
            [
                'product_code' => 'JBL-SP-018',
                'name' => 'JBL Flip 6 Portable Bluetooth Speaker',
                'variants' => 'Black',
                'category' => 'Speaker',
                'supplier' => 'JBL',
                'price' => 2500000,
                'stock' => 40,
            ],
            [
                'product_code' => 'JBL-SP-019',
                'name' => 'JBL Flip 6 Portable Bluetooth Speaker',
                'variants' => 'Blue',
                'category' => 'Speaker',
                'supplier' => 'JBL',
                'price' => 2500000,
                'stock' => 35,
            ],
            [
                'product_code' => 'SN-WE-020',
                'name' => 'Wireless Earbuds Sony WF-1000XM5',
                'variants' => 'Black',
                'category' => 'Audio',
                'supplier' => 'Sony',
                'price' => 4000000,
                'stock' => 25,
            ],
            [
                'product_code' => 'SN-WE-021',
                'name' => 'Wireless Earbuds Sony WF-1000XM5',
                'variants' => 'White',
                'category' => 'Audio',
                'supplier' => 'Sony',
                'price' => 4000000,
                'stock' => 25,
            ],
            [
                'product_code' => 'DY-HD-022',
                'name' => 'Dyson Supersonic Hair Dryer',
                'variants' => 'Iron/Fuchsia',
                'category' => 'Hair Dryer',
                'supplier' => 'Dyson',
                'price' => 6000000,
                'stock' => 20,
            ],
            [
                'product_code' => 'DY-HD-023',
                'name' => 'Dyson Supersonic Hair Dryer',
                'variants' => 'Black/Nickel',
                'category' => 'Hair Dryer',
                'supplier' => 'Dyson',
                'price' => 6000000,
                'stock' => 15,
            ],
            [
                'product_code' => 'HP-LP-024',
                'name' => 'HP Spectre x360',
                'variants' => '13-inch',
                'category' => 'Laptop',
                'supplier' => 'HP',
                'price' => 20000000,
                'stock' => 12,
            ],
            [
                'product_code' => 'HP-LP-025',
                'name' => 'HP Spectre x360',
                'variants' => '15-inch',
                'category' => 'Laptop',
                'supplier' => 'HP',
                'price' => 25000000,
                'stock' => 10,
            ],
            [
                'product_code' => 'AMZ-TB-026',
                'name' => 'Amazon Kindle Paperwhite',
                'variants' => '8GB',
                'category' => 'E-Reader',
                'supplier' => 'Amazon',
                'price' => 1800000,
                'stock' => 50,
            ],
            [
                'product_code' => 'AMZ-TB-027',
                'name' => 'Amazon Kindle Paperwhite',
                'variants' => '32GB',
                'category' => 'E-Reader',
                'supplier' => 'Amazon',
                'price' => 2500000,
                'stock' => 30,
            ],
            [
                'product_code' => 'ASUS-LP-028',
                'name' => 'ASUS VivoBook S15',
                'variants' => '8GB RAM',
                'category' => 'Laptop',
                'supplier' => 'ASUS',
                'price' => 15000000,
                'stock' => 20,
            ],
            [
                'product_code' => 'ASUS-LP-029',
                'name' => 'ASUS VivoBook S15',
                'variants' => '16GB RAM',
                'category' => 'Laptop',
                'supplier' => 'ASUS',
                'price' => 18000000,
                'stock' => 15,
            ],
            [
                'product_code' => 'BSE-HD-030',
                'name' => 'Bose QuietComfort 45 Headphones',
                'variants' => 'Black',
                'category' => 'Audio',
                'supplier' => 'Bose',
                'price' => 5000000,
                'stock' => 25,
            ],
            [
                'product_code' => 'BSE-HD-031',
                'name' => 'Bose QuietComfort 45 Headphones',
                'variants' => 'White Smoke',
                'category' => 'Audio',
                'supplier' => 'Bose',
                'price' => 5000000,
                'stock' => 20,
            ],
            [
                'product_code' => 'SONY-CM-032',
                'name' => 'Sony Alpha a7 III Mirrorless Camera',
                'variants' => 'Body Only',
                'category' => 'Camera',
                'supplier' => 'Sony',
                'price' => 22000000,
                'stock' => 10,
            ],
            [
                'product_code' => 'SONY-CM-033',
                'name' => 'Sony Alpha a7 III Mirrorless Camera',
                'variants' => 'With Kit Lens',
                'category' => 'Camera',
                'supplier' => 'Sony',
                'price' => 25000000,
                'stock' => 8,
            ],
            [
                'product_code' => 'DEL-MN-034',
                'name' => 'Dell UltraSharp Monitor',
                'variants' => '27-inch',
                'category' => 'Monitor',
                'supplier' => 'Dell',
                'price' => 7000000,
                'stock' => 30,
            ],
            [
                'product_code' => 'DEL-MN-035',
                'name' => 'Dell UltraSharp Monitor',
                'variants' => '32-inch',
                'category' => 'Monitor',
                'supplier' => 'Dell',
                'price' => 9000000,
                'stock' => 20,
            ],
            [
                'product_code' => 'LG-SP-036',
                'name' => 'LG XBOOM Go Speaker',
                'variants' => 'Black',
                'category' => 'Speaker',
                'supplier' => 'LG Electronics',
                'price' => 1500000,
                'stock' => 50,
            ],
            [
                'product_code' => 'LG-SP-037',
                'name' => 'LG XBOOM Go Speaker',
                'variants' => 'Blue',
                'category' => 'Speaker',
                'supplier' => 'LG Electronics',
                'price' => 1500000,
                'stock' => 50,
            ],
            [
                'product_code' => 'WD-HDD-038',
                'name' => 'WD My Passport External HDD',
                'variants' => '1TB',
                'category' => 'Storage',
                'supplier' => 'Western Digital',
                'price' => 1000000,
                'stock' => 100,
            ],
            [
                'product_code' => 'WD-HDD-039',
                'name' => 'WD My Passport External HDD',
                'variants' => '2TB',
                'category' => 'Storage',
                'supplier' => 'Western Digital',
                'price' => 1500000,
                'stock' => 80,
            ],
            [
                'product_code' => 'SND-SSD-040',
                'name' => 'SanDisk Extreme Portable SSD',
                'variants' => '500GB',
                'category' => 'Storage',
                'supplier' => 'SanDisk',
                'price' => 1200000,
                'stock' => 60,
            ],
            [
                'product_code' => 'SND-SSD-041',
                'name' => 'SanDisk Extreme Portable SSD',
                'variants' => '1TB',
                'category' => 'Storage',
                'supplier' => 'SanDisk',
                'price' => 2000000,
                'stock' => 50,
            ],
            [
                'product_code' => 'NZXT-CS-042',
                'name' => 'NZXT H510 Compact PC Case',
                'variants' => 'Black',
                'category' => 'PC Components',
                'supplier' => 'NZXT',
                'price' => 1500000,
                'stock' => 30,
            ],
            [
                'product_code' => 'NZXT-CS-043',
                'name' => 'NZXT H510 Compact PC Case',
                'variants' => 'White',
                'category' => 'PC Components',
                'supplier' => 'NZXT',
                'price' => 1500000,
                'stock' => 30,
            ],
            [
                'product_code' => 'RZ-MC-044',
                'name' => 'Razer DeathAdder V2 Mouse',
                'variants' => 'Black',
                'category' => 'Accessories',
                'supplier' => 'Razer',
                'price' => 1000000,
                'stock' => 70,
            ],
            [
                'product_code' => 'RZ-MC-045',
                'name' => 'Razer DeathAdder V2 Mouse',
                'variants' => 'Mercury',
                'category' => 'Accessories',
                'supplier' => 'Razer',
                'price' => 1000000,
                'stock' => 70,
            ],
            [
                'product_code' => 'CRS-KB-046',
                'name' => 'Corsair K95 RGB Platinum Keyboard',
                'variants' => 'Black',
                'category' => 'Accessories',
                'supplier' => 'Corsair',
                'price' => 2500000,
                'stock' => 40,
            ],
            [
                'product_code' => 'CRS-KB-047',
                'name' => 'Corsair K95 RGB Platinum Keyboard',
                'variants' => 'White',
                'category' => 'Accessories',
                'supplier' => 'Corsair',
                'price' => 2500000,
                'stock' => 35,
            ],
            [
                'product_code' => 'LG-AC-048',
                'name' => 'LG Dual Inverter AC',
                'variants' => '1PK',
                'category' => 'Air Conditioner',
                'supplier' => 'LG Electronics',
                'price' => 5000000,
                'stock' => 20,
            ],
            [
                'product_code' => 'LG-AC-049',
                'name' => 'LG Dual Inverter AC',
                'variants' => '2PK',
                'category' => 'Air Conditioner',
                'supplier' => 'LG Electronics',
                'price' => 8000000,
                'stock' => 15,
            ],
            [
                'product_code' => 'SMG-TB-050',
                'name' => 'Samsung Galaxy Tab S9',
                'variants' => 'WiFi',
                'category' => 'Tablet',
                'supplier' => 'Samsung Electronics',
                'price' => 12000000,
                'stock' => 25,
            ],
        ];

        DB::table('products')->insert($products);
    }
}
