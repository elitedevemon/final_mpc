<?php

namespace Database\Factories\frontend;

use App\Models\frontend\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
          'title' => $title,
          'cover_image' => 'mpc ('.$this->faker->numberBetween(1, 6).').png',
          'text' => $this->faker->text(500),
          'date' => date('d/m/Y', strtotime('today')),
          'video_1' => 'mpc ('.$this->faker->numberBetween(1, 9).').png',
          'video_2' => 'mpc ('.$this->faker->numberBetween(1, 9).').png',
          'video_3' => 'mpc ('.$this->faker->numberBetween(1, 9).').png',
          'video_4' => 'mpc ('.$this->faker->numberBetween(1, 9).').png',
        ];
    }
}
