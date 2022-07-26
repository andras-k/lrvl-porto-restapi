<?php

namespace App\Containers\ExampleSection\Customer\Data\Factories;

use App\Containers\ExampleSection\Customer\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    #[ArrayShape(['firstname' => "string", 'lastname' => "string", 'email' => "string", 'is_verified' => "bool"])]
    public function definition(): array
    {
        return [
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'email' => $this->faker->email(),
            'is_verified' => $this->faker->boolean()
        ];
    }
}
