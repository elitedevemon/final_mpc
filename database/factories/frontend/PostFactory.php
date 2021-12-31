<?php

namespace Database\Factories\frontend;

use App\Models\frontend\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      $title = $this->faker->unique()->words($nb=5, $asText = true);
      $slug = Str::slug($title);
      return [
        'title' => $title,
        'slug' => $slug,
        'short_desc' => $this->faker->text(50),
        'cover_image' => 'mpc ('.$this->faker->numberBetween(1, 6).').png',
        'text' => $this->faker->text(500)
      ];
    }
}
