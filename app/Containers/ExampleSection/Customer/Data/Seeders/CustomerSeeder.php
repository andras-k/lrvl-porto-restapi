<?php

namespace App\Containers\ExampleSection\Customer\Data\Seeders;

use App\Containers\ExampleSection\Customer\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public const CUSTOMER_COUNT = 80;

    public function run(): void
    {
        Customer::factory(self::CUSTOMER_COUNT)->create();
    }
}
