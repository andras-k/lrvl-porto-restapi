<?php

namespace App\Containers\ExampleSection\Customer\Data\Seeders;

use App\Containers\ExampleSection\Customer\Models\Customer;
use App\Containers\ExampleSection\Customer\Models\CustomerGroup;
use App\Containers\ExampleSection\Group\Models\Group;
use Illuminate\Database\Seeder;

class CustomerGroupSeeder extends Seeder
{
    public function run()
    {
        $customers = Customer::all([
            Customer::ATTR_ID,
        ]);
        $groups = Group::all([
            Group::ATTR_ID,
        ]);

        /** @var Customer $customer */
        foreach ($customers as $customer) {
            if (rand(0, 1)) {
                CustomerGroup::factory()->create([
                    CustomerGroup::ATTR_CUSTOMER_ID => $customer->id,
                    CustomerGroup::ATTR_GROUP_ID => $groups->random()->id
                ]);
            }
        }
    }
}
