<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => Order::inRandomOrder()->first()->id ?? 1,
            'payment_method' => $this->faker->randomElement(['credit_card','paypal','bank_transfer','cod']),
            'status' => $this->faker->randomElement(['pending', 'completed', 'failed']),
        ];
    }
}
