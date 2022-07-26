<?php

namespace App\Containers\ExampleSection\Customer\UI\API\Controllers;

use App\Containers\ExampleSection\Customer\Actions\GetAllCustomersAction;
use App\Containers\ExampleSection\Customer\Actions\GetCustomerAction;
use App\Containers\ExampleSection\Customer\Actions\StoreCustomerGroupAction;
use App\Containers\ExampleSection\Customer\UI\Requests\StoreCustomerGroupRequest;
use App\Ship\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index(GetAllCustomersAction $getAllCustomersAction): Collection
    {
        return $getAllCustomersAction->run();
    }

    public function show(Request $request, GetCustomerAction $getCustomerByIdAction): Model
    {
        return $getCustomerByIdAction->run($request);
    }

    public function update(StoreCustomerGroupRequest $request, StoreCustomerGroupAction $storeCustomerGroupAction): JsonResponse
    {
        return $storeCustomerGroupAction->run($request);
    }
}
