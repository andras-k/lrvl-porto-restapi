<?php

namespace App\Containers\ExampleSection\Customer\Actions;

use App\Containers\ExampleSection\Customer\Tasks\GetCustomerByIdTask;
use App\Containers\ExampleSection\Customer\Tasks\GetCustomerWithGroupsByIdTask;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class GetCustomerAction
{
    public function run(Request $request): Model
    {
        $customerId = $request->route('customerId');
        if ($request->get('withGroups', false)) {
            return (App::make(GetCustomerWithGroupsByIdTask::class))->run($customerId);
        }
        return (App::make(GetCustomerByIdTask::class))->run($customerId);
    }
}
