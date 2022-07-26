<?php

namespace App\Containers\ExampleSection\Group\UI\API\Controllers;

use App\Containers\ExampleSection\Group\Actions\GetAllGroupsAction;
use App\Containers\ExampleSection\Group\Actions\GetGroupByIdAction;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class GroupController
{
    public function index(GetAllGroupsAction $getAllGroupsAction): Collection
    {
        return $getAllGroupsAction->run();
    }

    public function show(Request $request, GetGroupByIdAction $getGroupByIdAction): Model
    {
        return $getGroupByIdAction->run($request->route('groupId'));
    }
}
