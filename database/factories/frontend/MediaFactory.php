<?php

namespace Database\Factories\frontend;

use App\Models\frontend\Media;
use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Media::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'media_photo' => 'mpc ('.$this->faker->numberBetween(1, 7).').jpg',
        ];
    }
}
