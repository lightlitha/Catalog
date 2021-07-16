<?php

namespace Faceless\Catalog\Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AttributeSeeder::class);
        $this->call(AttributeFamilySeeder::class);
        $this->call(AttributeAttributeFamilySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(AttributeProductSeeder::class);
    }
}
