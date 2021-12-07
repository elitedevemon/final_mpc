<?php

namespace Database\Factories\frontend;

use App\Models\frontend\Categories;
use App\Models\frontend\VideosInformation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VideosInformationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VideosInformation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      // $category_name = $this->faker->unique()->words($nb=2, $asText = true);
      $title = $this->faker->unique()->words($nb=5, $asText = true);
      $thumbnail = 'mpc ('.$this->faker->numberBetween(1, 10).').png';
      $link = Str::slug($title);
      $category = Categories::all();
      return [
        'title' => $title,
        'thumbnail' => $thumbnail,
        'link' => 'https://www.youtube.com/'.$link,
        'category' => $this->faker->randomElement($category)
      ];
    }
}
