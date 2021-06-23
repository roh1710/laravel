<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

           'name' => $this->faker->name,
                'slug' => $this->faker->slug,
                'description' => $this->faker->name,
                'status' => $this->faker->boolean(0,1),
                'meta_title' => $this->faker->name,
                'meta_descrip' => $this->faker->name,
                'meta_keywords' => $this->faker->name, 
        ];
    }
}
