<?php

namespace App\Containers\ExampleSection\Group\Data\Seeders;

use App\Containers\ExampleSection\Group\Models\Group;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    public const GROUPS_COUNT = 20;

    public function run()
    {
        Group::factory(self::GROUPS_COUNT)->create();
    }
}
