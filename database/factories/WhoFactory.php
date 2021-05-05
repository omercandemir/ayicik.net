<?php

namespace Database\Factories;

use App\Models\Who;
use Illuminate\Database\Eloquent\Factories\Factory;

class WhoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Who::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'desc'  => $this->faker->text,
            'icon'  => 'assets/icons/tech/why_1.svg'
        ];
    }
}
