<?php

namespace App\Containers\ExampleSection\Customer\Tasks;

use App\Containers\ExampleSection\Customer\Models\Customer;
use Illuminate\Database\Eloquent\Model;

class GetCustomerByIdTask
{
    public function run(int $customerId): Model
    {
        return Customer::query()
            ->where(Customer::ATTR_ID, $customerId)
            ->sole();
    }
}
