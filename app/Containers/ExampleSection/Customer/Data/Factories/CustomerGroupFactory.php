<?php

namespace App\Containers\ExampleSection\Customer\Data\Factories;

use App\Containers\ExampleSection\Customer\Models\Customer;
use App\Containers\ExampleSection\Customer\Models\CustomerGroup;
use App\Containers\ExampleSection\Group\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class CustomerGroupFactory extends Factory
{
    protected $model = CustomerGroup::class;

    #[ArrayShape([CustomerGroup::ATTR_CUSTOMER_ID => "mixed", CustomerGroup::ATTR_GROUP_ID => "mixed"])]
    public function definition(): array
    {
        return [
            CustomerGroup::ATTR_CUSTOMER_ID => Customer::factory(),
            CustomerGroup::ATTR_GROUP_ID => Group::factory(),
        ];
    }
}
