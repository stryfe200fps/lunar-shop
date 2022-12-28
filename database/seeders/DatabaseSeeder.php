<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Lunar\Hub\Models\Staff;
use Lunar\Models\AttributeGroup;
use Lunar\Models\Country;
use Lunar\Models\ProductType;
use Lunar\Models\TaxClass;

use function PHPSTORM_META\map;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        AttributeGroup::create([
            'attributable_type' => 'prodict',
            'name' => 'bakero',
            'handle' => 'details',
            'position' => 1
        ]);

        TaxClass::create([
            'name' => 'PH',
            'default' => 1
        ]);
        Country::create([

            'name' => 'Philippines',
            'iso3' => '301',
            'iso2' => '5ff',
            'phonecode' => '+63',
            'capital' => 'Manila',
            'currency' => 'PH',
            'native' => 'Bisaya',
            'emoji' => 'P',
            'emoji_u' => 'PP'
        ]);

        Staff::create([
            'admin' => 1,
            'firstname' => 'Adrian',
            'lastname' => 'Radores',
            'email' => 'mobistyle35@gmail.com',
            'password' => bcrypt('Asakaboi35')
        ]);

        ProductType::create([
            'name' => 'baluga'
        ]);


        $this->call(CollectionSeeder::class);
        $this->call(AttributeSeeder::class);
        $this->call(TaxSeeder::class);
        // $this->call(ProductSeeder::class);
        // $this->call(CustomerSeeder::class);
        // $this->call(OrderSeeder::class);
    }
}
