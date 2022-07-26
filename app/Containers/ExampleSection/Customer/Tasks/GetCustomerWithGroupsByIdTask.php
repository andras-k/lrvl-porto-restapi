<?php

namespace App\Containers\ExampleSection\Customer\Tasks;

use App\Containers\ExampleSection\Customer\Models\Customer;
use Illuminate\Database\Eloquent\Model;

class GetCustomerWithGroupsByIdTask
{
    public function run(int $customerId): Model
    {
        return Customer::query()
            ->with(Customer::RELATION_GROUPS)
            ->where(Customer::ATTR_ID, $customerId)
            ->sole();
    }
}
