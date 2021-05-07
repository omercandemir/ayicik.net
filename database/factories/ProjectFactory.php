<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->company;
        return [
            'title'   => $name,
            'content' => $this->faker->text,
            'author'  => 1,
            'image'   => 'assets/img/blog-2.jpg',
            'slug'    => Str::slug($name),
        ];
    }
}
