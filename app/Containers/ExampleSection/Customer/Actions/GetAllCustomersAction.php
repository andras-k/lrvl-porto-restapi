<?php

namespace App\Containers\ExampleSection\Customer\Actions;

use App\Containers\ExampleSection\Customer\Models\Customer;
use Illuminate\Database\Eloquent\Collection;

class GetAllCustomersAction
{
    public function run(): Collection
    {
        return Customer::all();
    }
}
