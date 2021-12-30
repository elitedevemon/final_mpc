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
<<<<<<< HEAD
      $slug = Str::slug($title, '-');
        return [
          'title' => $title,
          'slug' => $slug,
          'short_desc' => 'How to generate title slugs in Laravel? - DevDojohttps://devdojo.com › ho...
          পৃষ্ঠাটি অনুবাদ করুন
          ১৫ অক্টোবর, ২০২০ — In this tutorial, you will learn how to use the title of your post and',
          'cover_image' => 'mpc ('.$this->faker->numberBetween(1, 6).').png',
          'text' => $this->faker->text(500),
        ];
=======
      $slug = Str::slug($title);
      return [
        'title' => $title,
        'slug' => $slug,
        'cover_image' => 'mpc ('.$this->faker->numberBetween(1, 6).').png',
        'text' => $this->faker->text(500)
      ];
>>>>>>> 150aa9e46c940d2035e30a74cc3718acf72f2ef5
    }
}
