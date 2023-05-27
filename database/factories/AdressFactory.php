<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $customer_id = Customer::all()->random();
        return [
            'custom_name'=> $this->faker->realTextBetween(4,30),
            'city' => $this->faker->city(),
            'street' => $this->faker->streetAddress(),
            'building' => $this->faker->buildingNumber(),
            'floor' => $this->faker->numberBetween(0,200),
            'apartment' => $this->faker->numberBetween(1,1000),
            'intercom_key' => $this->faker->text(10),
            'customer_id' => $customer_id
        ];
    }
}