<?php

namespace Database\Seeders;

use App\Containers\ExampleSection\Customer\Data\Seeders\CustomerGroupSeeder;
use App\Containers\ExampleSection\Customer\Data\Seeders\CustomerSeeder;
use App\Containers\ExampleSection\Group\Data\Seeders\GroupSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(CustomerSeeder::class);
        $this->call(GroupSeeder::class);
        $this->call(CustomerGroupSeeder::class);
    }
}
