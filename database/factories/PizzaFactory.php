<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pizza>
 */
class PizzaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $toppingChoices = [
            'Extra Cheese',
            'Peperoni',
            'Sausage',
            'Onions',
            'Jalapenos',
            'Green Peppers',
            'Anchovies',
            'Mushrooms',
            'Black Olives',
            'Spinach'
        ];

        $toppings =[];
        for ($i = 0; $i < rand(1, 4); $i++) {
            $toppings[] = Arr::random($toppingChoices);
        }
        $toppings = array_unique($toppings);

        return [
            'id' => rand(1111, 99999),
            'user_id' => rand(1, 10),
            'size' => Arr::random(['Small', 'Medium', 'Large', 'Extra-Large']),
            'crust' => Arr::random(['Normal', 'Gluten-free', 'Crispy', 'Stuffed']),
            'toppings' => $toppings,
            'status' => Arr::random(['Ordered', 'Preparing','Baking', 'Ready', 'Delivered']),
        ];
    }
}
