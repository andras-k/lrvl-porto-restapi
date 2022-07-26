<?php

namespace App\Containers\ExampleSection\Group\Actions;

use App\Containers\ExampleSection\Group\Models\Group;
use Illuminate\Database\Eloquent\Collection;

class GetAllGroupsAction
{
    public function run(): Collection
    {
        return Group::all();
    }
}
