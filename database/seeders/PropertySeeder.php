<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('property')->insert([
            // Home category
            [
                'name' => 'Luxury Home',
                'price' => 1500000000.00,
                'category' => 'home',
                'cluster_type' => 'exclusive',
                'instalment' => 150000000.00,
                'location' => 'jakarta',
                'picture' => 'images/luxury_home.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Modern Home',
                'price' => 1200000000.00,
                'category' => 'home',
                'cluster_type' => 'urban',
                'instalment' => 120000000.00,
                'location' => 'bandung',
                'picture' => 'images/modern_home.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Apartment category
            [
                'name' => 'Modern Apartment',
                'price' => 800000000.00,
                'category' => 'apartment',
                'cluster_type' => 'urban',
                'instalment' => 80000000.00,
                'location' => 'bandung',
                'picture' => 'images/modern_apartment.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Luxury Apartment',
                'price' => 1000000000.00,
                'category' => 'apartment',
                'cluster_type' => 'high-rise',
                'instalment' => 100000000.00,
                'location' => 'makasar',
                'picture' => 'images/luxury_apartment.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Kavling category
            [
                'name' => 'Spacious Kavling',
                'price' => 300000000.00,
                'category' => 'kavling',
                'cluster_type' => 'land',
                'instalment' => 30000000.00,
                'location' => 'makasar',
                'picture' => 'images/spacious_kavling.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Prime Kavling',
                'price' => 500000000.00,
                'category' => 'kavling',
                'cluster_type' => 'land',
                'instalment' => 50000000.00,
                'location' => 'bekasi',
                'picture' => 'images/prime_kavling.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Office category
            [
                'name' => 'Corporate Office',
                'price' => 1200000000.00,
                'category' => 'office',
                'cluster_type' => 'commercial',
                'instalment' => 120000000.00,
                'location' => 'bekasi',
                'picture' => 'images/corporate_office.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Downtown Office',
                'price' => 1400000000.00,
                'category' => 'office',
                'cluster_type' => 'commercial',
                'instalment' => 140000000.00,
                'location' => 'bogor',
                'picture' => 'images/downtown_office.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Gudang category
            [
                'name' => 'Large Gudang',
                'price' => 700000000.00,
                'category' => 'gudang',
                'cluster_type' => 'industrial',
                'instalment' => 70000000.00,
                'location' => 'bogor',
                'picture' => 'images/large_gudang.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Warehouse Gudang',
                'price' => 900000000.00,
                'category' => 'gudang',
                'cluster_type' => 'industrial',
                'instalment' => 90000000.00,
                'location' => 'jakarta',
                'picture' => 'images/warehouse_gudang.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
