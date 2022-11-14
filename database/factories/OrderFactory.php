<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $products = ['Mobile', 'Laptop', 'Watch', 'Mac Book'];
        static $invoice = 20;
        return [
            'product_name' => $products[rand(0,3)],
            'currency' => 'BDT',
            'amount' => 2000,
            'invoice' => $invoice++,
            'status' => 'Pending',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
