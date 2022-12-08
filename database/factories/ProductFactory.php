<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=> $this->faker->name,
            "thumbnail"=>$this->faker->imageUrl,
            "description"=>$this->faker->title,
            "price"=>$this->faker->randomFloat(),
            "rating"=>$this->faker->randomElement([3,3.5,4,4.5,4.5,5]),
            "category_id"=>$this->faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
        ];
    }
}
