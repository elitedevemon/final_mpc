<?php

namespace Database\Factories\frontend;

use App\Models\frontend\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoriesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Categories::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      $category_name = $this->faker->unique()->words($nb=2, $asText = true);
      $slug = Str::slug($category_name);
      return [
        'category' => $category_name,
        'playlist_link' => 'https://www.youtube.com/'.$slug
      ];
    }
}
