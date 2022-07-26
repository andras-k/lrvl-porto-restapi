<?php

namespace App\Containers\ExampleSection\Group\Actions;

use App\Containers\ExampleSection\Group\Models\Group;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class GetGroupByIdAction
{
    public function run(int $groupId): Model
    {
        return Group::query()
            ->where(Group::ATTR_ID, $groupId)
            ->sole();
    }
}
