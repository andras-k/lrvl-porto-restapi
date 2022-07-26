<?php

namespace App\Containers\ExampleSection\Group\Data\Factories;

use App\Containers\ExampleSection\Group\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class GroupFactory extends Factory
{
    protected $model = Group::class;

    #[ArrayShape([Group::ATTR_TITLE => "string"])]
    public function definition(): array
    {
        return [
            Group::ATTR_TITLE => $this->faker->word(),
        ];
    }
}
