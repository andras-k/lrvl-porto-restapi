<?php

namespace App\Containers\ExampleSection\Customer\Actions;

use App\Containers\ExampleSection\Customer\Models\Customer;
use App\Containers\ExampleSection\Customer\UI\Requests\StoreCustomerGroupRequest;
use App\Containers\ExampleSection\Group\Actions\GetGroupByIdAction;
use App\Containers\ExampleSection\Group\Models\Group;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\App;

class StoreCustomerGroupAction
{
    public function run(StoreCustomerGroupRequest $request): JsonResponse
    {
        $customerId = (int) $request->route('customerId');
        $groupId = (int) $request->post('groupId');

        /** @var Customer|null $customer */
        $customer = (App::make(GetCustomerAction::class))->run($request);

        if (!$customer) {
            return response()->json([
                'status' => 'failed',
                'data' => null,
                'message' => 'Customer not found'
            ]);
        }

        /** @var Group|null $group */
        $group = (App::make(GetGroupByIdAction::class))->run($groupId);

        if (!$group) {
            return response()->json([
                'status' => 'failed',
                'data' => null,
                'message' => 'Group not found'
            ]);
        }

        try {

            $customer->groups()->save($group);

        } catch (QueryException $exception) {
            return response()->json([
                'status' => 'failed',
                'data' => null,
                'message' => $exception->getMessage(),
            ]);
        }

        return response()->json([
            'status' => 'success',
            'data' => null,
            'message' => "CustomerGroup assigned to Customer ID [{$customerId}]"
        ]);
    }
}
